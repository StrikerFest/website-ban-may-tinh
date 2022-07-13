<?php

namespace App\Imports;

use App\Models\ImportDetailModel;
use App\Models\ImportModel;
use App\Models\ProductModel;
use App\Models\SerialModel;
use DB;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\withValidation;

class StockImport implements ToCollection, withHeadingRow, withValidation
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $tenNPP = json_decode($collection->toJSON())[0]->nha_phan_phoi;
        $maNPP = DB::table('nha_phan_phoi')->where('tenNPP', 'like', "%$tenNPP%")->first()->maNPP;


        //Check sản phẩm có thuộc nhà phân phối được chọn hay không
        $listSP = DB::table('san_pham')
            ->join('san_pham_nha_phan_phoi', 'san_pham_nha_phan_phoi.maSP', '=', 'san_pham.maSP')
            ->where('san_pham_nha_phan_phoi.maNPP', $maNPP)
            ->get();
        // dd(explode(",", $collection[0]['ma_serial']));
        $arraySP = [];
        for($i = 0; $i < sizeof($listSP); $i++){
            array_push($arraySP, $listSP[$i]->tenSP);
        }
        $counter = 1;
        $error = false;
        $error_row = [];
        foreach($collection as $row){
            $counter++;
            if(!in_array($row['san_pham'], $arraySP)){
                $error = true;
                array_push($error_row, $counter);
            }
        }
        if($error){
            return back()->with('sanPham1', "Sản phẩm hàng ". implode(', ', $error_row) ." không thuộc nhà phân phối được chọn");
        }


        //Đưa mã serial nhập từ excel vào mảng
        $arrMaSerialExcel = [];
        foreach($collection as $row){
            $serial = explode(",", $row['ma_serial']);
            $arrMaSerialExcel = array_merge($arrMaSerialExcel, $serial);
        }
        // dd($arrMaSerialExcel);
        

        //Check số lượng mã serial bằng với số lượng sản phẩm nhập
        $arrQuantity = [];
        $arrSerial = [];
        foreach($collection as $row){
            $serial = explode(",", $row['ma_serial']);
            array_push($arrQuantity, $row['so_luong']);
            array_push($arrSerial, count($serial));
        }
        // dd($arrQuantity, $arrSerial);
        if($arrQuantity != $arrSerial){
            return back()->with('quantity', "Số lượng mã serial không khớp với số lượng nhập");
        }
        

        //Check trùng mã serial trong file excel
        $checkUnique = array_unique($arrMaSerialExcel);
        if(count($arrMaSerialExcel) != count($checkUnique)){
            return back()->with('serial', "Mã serial trùng lặp");
        }


        //Check trùng mã serial trong DB
        $arrMaSerialDB = [];
        $listSerial = DB::table('serial')->get('serial');
        foreach($listSerial as $s){
            array_push($arrMaSerialDB, $s->serial);
        }
        
        $duplicatedSerial = [];
        foreach($arrMaSerialExcel as $excel){
            if(in_array($excel, $arrMaSerialDB)){
                array_push($duplicatedSerial, $excel);
                $error = true;
            }
        }
        if($error){
            return back()->with('duplicate', "Mã serial: ". implode(', ', $duplicatedSerial) ." đã được sử dụng");
        }
        // dd($duplicatedSerial);

    //Insert Database
        //Tạo phiếu nhập kho
        $nhapKho = new ImportModel();
        $nhapKho->maNPP = $maNPP;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $nhapKho->ngayNhap = date('Y-m-d H:i:s');
        $nhapKho->maNV = session()->get('admin');
        $nhapKho->save();
        

        //Nhập các mã serial vào bảng
        $arrProduct = [];
        $arrSerial = [];
        foreach($collection as $row){
            $serial = explode(",", $row['ma_serial']);
            $tenSP = $row['san_pham'];
            $maSP = DB::table('san_pham')->where('tenSP', 'like', "%$tenSP%")->first()->maSP;
            array_push($arrProduct, $maSP);
            array_push($arrSerial, $serial);
        }
        $combined = array_combine($arrProduct, $arrSerial);
        // dd($combined);

        foreach($combined as $key => $value){
            // dd($key, $value);
            //key: maSP, value: [serial]
            for($i = 0; $i < count($value); $i++){
                $S = new SerialModel();
                $S->maSP = $key;
                $S->serial = $value[$i];
                $S->maNK = $nhapKho->maNK;
                $S->save();
            }
        }


        //Tạo phiếu nhập kho chi tiết
        foreach($collection as $row){
            $NKCT = new ImportDetailModel();
            $NKCT->maNK = $nhapKho->maNK;
            $tenSP = $row['san_pham'];
            $NKCT->maSP = (DB::table('san_pham')->where('tenSP', 'like', "$tenSP")->first()->maSP);
            $NKCT->soLuong = $row['so_luong'];
            $NKCT->giaNhap = $row['gia_nhap'];
            $NKCT->save();
            

            //Cập nhật số lượng sản phẩm
            $sanPham = ProductModel::where('maSP', '=', $NKCT->maSP)->first();
            $sanPham->soLuong += $NKCT->soLuong;
            $sanPham->save();
        }
    }

    public function rules(): array
    {
        $listNPP = DB::table('nha_phan_phoi')->get();
        $validateNPP = '';
        foreach($listNPP as $NPP){
            $validateNPP .= $NPP->tenNPP.",".strtolower($NPP->tenNPP).",";
        }

        return [
            'nha_phan_phoi' => ['in:'.$validateNPP],
            'san_pham' => ['required'],
            'so_luong' => ['required', 'numeric', 'min:1'],
            'gia_nhap' => ['required', 'numeric', 'min:0'],
            'ma_serial' => ['required'],
        ];
    }
}
