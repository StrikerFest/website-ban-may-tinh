<?php

namespace App\Imports;

use App\Models\ImportDetailModel;
use App\Models\ImportModel;
use App\Models\ProductModel;
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
        $listSP = DB::table('san_pham')->where('maNPP', '=', $maNPP)->get();
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
            return back()->with('sanPham', "Sản phẩm hàng ". implode(', ', $error_row) ." không thuộc nhà phân phối được chọn");
        }
        
        //Tạo phiếu nhập kho
        $nhapKho = new ImportModel();
        $nhapKho->maNPP = $maNPP;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $nhapKho->ngayNhap = date('Y-m-d H:i:s');
        $nhapKho->maNV = session()->get('admin');
        $nhapKho->save();
        
        foreach($collection as $row){
            //Tạo phiếu nhập kho chi tiết
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
        ];
    }
}
