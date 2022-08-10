<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\ProductModel;
use App\Models\PromotionModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\withValidation;
use DB;

class ProductImport implements ToCollection, withHeadingRow, withValidation
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $row){
            //Lấy mã theo tên nhập từ excel
            $tenNSX = $row['nha_san_xuat'];
            $maNSX = DB::table('nha_san_xuat')->where('tenNSX', 'like', "%$tenNSX%")->first()->maNSX;
            $tenTLC = $row['danh_muc'];
            $maTLC = DB::table('the_loai_con')->where('tenTLC', 'like', "%$tenTLC%")->first()->maTLC;
            $tenTTSP = "Đang bán";
            $maTTSP = DB::table('tinh_trang_san_pham')->where('tenTTSP', 'like', "%$tenTTSP%")->first()->maTTSP;
            $tenBH = $row['bao_hanh'];
            $maBH = DB::table('bao_hanh')->where('tenBH', 'like', "%$tenBH%")->first()->maBH;
            //Tạo sản phẩm
            $sanPham = new ProductModel();
            $sanPham->tenSP = $row['ten_san_pham'];
            $sanPham->giaSP = $row['gia'];
            $sanPham->moTa = $row['mo_ta'];
            $sanPham->giamGia = $row['giam_gia'];
            $sanPham->maNSX = $maNSX;
            $sanPham->maTLC = $maTLC;
            $sanPham->maBH = $maBH;
            $sanPham->maTTSP = $maTTSP;
            $sanPham->save();
        }
    }

    public function rules(): array
    {
        $listNSX = DB::table('nha_san_xuat')->get();
        $validateNSX = '';
        foreach($listNSX as $NSX){
            $validateNSX .= $NSX->tenNSX.",".strtolower($NSX->tenNSX).",";
        }

        $listTLC = DB::table('the_loai_con')->get();
        $validateTLC = '';
        foreach($listTLC as $TLC){
            $validateTLC .= $TLC->tenTLC.",".strtolower($TLC->tenTLC).",";
        }

        $listBH = DB::table('bao_hanh')->get();
        $validateBH = '';
        foreach($listBH as $BH){
            $validateBH .= $BH->tenBH.",".strtolower($BH->tenBH).",";
        }

        return [
            'ten_san_pham' => ['required', 'min:3', 'unique:App\Models\ProductModel,tenSP'],
            'gia' => ['required', 'numeric', 'min:0'],
            'mo_ta' => ['required'],
            'giam_gia' => ['required', 'numeric', 'min:0', 'max:100'],
            'nha_san_xuat' => ['in:'.$validateNSX],
            'danh_muc' => ['in:'.$validateTLC],
            'bao_hanh' => ['in:'.$validateBH],
        ];
    }
}
