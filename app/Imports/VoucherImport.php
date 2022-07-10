<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\VoucherModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\withValidation;
use DB;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class VoucherImport implements ToCollection, withHeadingRow, withValidation
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row){
            //Lấy mã theo tên nhập từ excel
            $tenTLV = $row['the_loai_voucher'];
            $maTLV = DB::table('the_loai_voucher')->where('tenTLV', 'like', "%$tenTLV%")->first()->maTLV;
            $tenSanPham = $row['san_pham'];
            if($tenSanPham){
                $maSP = DB::table('san_pham')->where('tenSP', 'like', "%$tenSanPham%")->first()->maSP;
                $giaTri = DB::table('san_pham')->where('maSP', $maSP)->first()->giaSP;
            }else{
                $maSP = null;
                $giaTri = $row['gia_tri'];
            }
            
            //Tạo voucher
            $V = new VoucherModel();
            $V->tenVoucher = $row['ten_voucher'];
            $V->moTa = $row['mo_ta'];
            $V->ngayHetHan = Date::excelToDateTimeObject($row['ngay_het_han']);
            $V->maTLV = $maTLV;
            $V->giaTri = $giaTri;
            $V->soLuong = $row['so_luong'];
            $V->maSP = $maSP;
            $V->save();
        }
    }

    public function rules(): array
    {
        $listTLV = DB::table('the_loai_voucher')->get();
        $validateTLV = '';
        foreach($listTLV as $TLV){
            $validateTLV .= $TLV->tenTLV.",".strtolower($TLV->tenTLV).",";
        }

        $listTP = DB::table('san_pham')
            ->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
            ->where('tenTLC', 'like', "Tặng phẩm")
            ->get();
        $validateTP = '';
        foreach($listTP as $TP){
            $validateTP .= $TP->tenSP.",".strtolower($TP->tenSP).",";
        }
        
        return [
            'ten_voucher' => ['required',' min:5', 'unique:App\Models\VoucherModel,tenVoucher'],
            'mo_ta' => ['required'],
            'ngay_het_han' => ['required'],
            'the_loai_voucher' => ['required', 'in:'.$validateTLV],
            'so_luong' => ['required','min:0', 'numeric'],
            'san_pham' => ['in:'.$validateTP],
        ];
    }
}
