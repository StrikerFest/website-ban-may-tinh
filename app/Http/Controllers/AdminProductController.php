<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\ProductImageModel;
use App\Models\ManufacturerModel;
use App\Models\SubCategoryModel;
use App\Models\ProductStatusModel;
use App\Models\SupplierModel;
use App\Models\VoucherModel;
use App\Models\ProductVoucherModel;
use App\Models\WarrantyModel;
use App\Models\BlogModel;
use Illuminate\Http\Request;
use App\Imports\ProductImport;
use Exception;
use Excel;
use File;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');
        $searchManufacturer = $request->get('searchManufacturer');
        $searchSubCategory = $request->get('searchSubCategory');
        // $searchSupplier = $request->get('searchSupplier');

        $nhaSanXuat = ManufacturerModel::get();

        $theLoaiCon = SubCategoryModel::get();

        $nhaPhanPhoi = SupplierModel::get();

        $baoHanh = WarrantyModel::get();

        $baiViet = BlogModel::where('theLoai', 1)->get();

        $tinhTrangSanPham = ProductStatusModel::get();
        // dd($searchName, $searchManufacturer, $searchSubCategory, $searchSupplier);
        $sanPham = ProductModel::select(['san_pham.*', 'nha_san_xuat.tenNSX', 'the_loai_con.tenTLC'])
            ->join('nha_san_xuat', 'nha_san_xuat.maNSX', '=', 'san_pham.maNSX')
            ->join('the_loai_con', 'the_loai_con.maTLC', '=', 'san_pham.maTLC')
            // ->leftJoin('san_pham_nha_phan_phoi', 'san_pham_nha_phan_phoi.maSP', '=', 'san_pham.maSP')
            // ->leftJoin('nha_phan_phoi', 'san_pham_nha_phan_phoi.maNPP', '=', 'nha_phan_phoi.maNPP')
            ->where('tenSP', 'like', "%$searchName%")
            ->where('tenNSX', 'like', "%$searchManufacturer%")
            ->where('tenTLC', 'like', "%$searchSubCategory%")
            // ->where('tenNPP', 'like', "%$searchSupplier%")
            // ->orWhereNull('tenNPP')
            ->groupBy('san_pham.maSP')
            ->orderBy('san_pham.maSP', 'desc')
            ->paginate(5)
            ->appends([
                'searchName' => $searchName,
                'searchManufacturer' => $searchManufacturer,
                'searchSubCategory' => $searchSubCategory,
                // 'searchSupplier' => $searchSupplier,
            ]);
        // dd($sanPham);
        return view('Admin.Product.index', [
            "nhaSanXuat" => $nhaSanXuat,
            "theLoaiCon" => $theLoaiCon,
            "tinhTrangSanPham" => $tinhTrangSanPham,
            "nhaPhanPhoi" => $nhaPhanPhoi,
            "baoHanh" => $baoHanh,
            "baiViet" => $baiViet,
            "sanPham" => $sanPham,
            "searchName" => $searchName,
            "searchManufacturer" => $searchManufacturer,
            "searchSubCategory" => $searchSubCategory,
            // "searchSupplier" => $searchSupplier,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tenSP' => 'required|min:3|unique:App\Models\ProductModel,tenSP',
            'giaSP' => 'required|numeric|min:0',
            'giamGia' => 'required|numeric|min:0|max:100',
            'maNSX' => 'required',
            'maTLC' => 'required',
            'maTTSP' => 'required',
            'maBH' => 'required',
            'anh.*' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp',
        ]);

        $sanPham = new ProductModel();
        $sanPham->tenSP = $request->get('tenSP');
        $sanPham->giaSP = $request->get('giaSP');
        $sanPham->giamGia = $request->get('giamGia');
        $sanPham->maNSX = $request->get('maNSX');
        $sanPham->maTLC = $request->get('maTLC');
        $sanPham->maBH = $request->get('maBH');
        $sanPham->maBV = $request->get('maBV');
        $sanPham->maTTSP = $request->get('maTTSP');
        // dd($sanPham);
        $sanPham->save();
        
        for($i = 0; $i < sizeof($request->file('anh')); $i++){
            $path = $request->file('anh')[$i]->store('img');
            $ASP = new ProductImageModel();
            $ASP->maSP = $sanPham->maSP;
            $ASP->anh = explode("/", $path)[1];
            $ASP->save();
        }

        return redirect(route('admin.product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhaSanXuat = ManufacturerModel::get();

        $theLoaiCon = SubCategoryModel::get();

        $tinhTrangSanPham = ProductStatusModel::get();

        $baoHanh = WarrantyModel::get();

        $baiViet = BlogModel::get();

        $SP = ProductModel::find($id);
        
        return view('Admin.Product.edit', [
            "nhaSanXuat" => $nhaSanXuat,
            "theLoaiCon" => $theLoaiCon,
            "tinhTrangSanPham" => $tinhTrangSanPham,
            "baoHanh" => $baoHanh,
            "baiViet" => $baiViet,
            "SP" => $SP,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tenSP' => 'required|min:3|unique:App\Models\ProductModel,tenSP,'. $id,
            'giaSP' => 'required|numeric|min:0',
            'giamGia' => 'required|numeric|min:0|max:100',
            'maNSX' => 'required',
            'maTLC' => 'required',
            'maBH' => 'required',
            'maTTSP' => 'required',
        ]);
        
        $SP = ProductModel::find($id);
        $SP->tenSP = $request->get('tenSP');
        $SP->giaSP = $request->get('giaSP');
        $SP->giamGia = $request->get('giamGia');
        $SP->maNSX = $request->get('maNSX');
        $SP->maTLC = $request->get('maTLC');
        $SP->maBH = $request->get('maBH');
        $SP->maBV = $request->get('maBV');
        $SP->maTTSP = $request->get('maTTSP');
        $SP->save();
        
        return redirect(route('admin.product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanPham = ProductModel::find($id);
        try{
            $ASP = ProductImageModel::where('maSP', $id)->get();
            
            for($i = 0; $i < sizeof($ASP); $i++){
                $path = public_path('assets/img/'.$ASP[$i]->anh);
                if(File::exists($path)){
                    File::delete($path);
                }  
                $ASP[$i]->delete();
            }

            $sanPham->delete();
            return redirect(route('admin.product.index'));
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
    }

    public function updateSpecial(Request $request, $id)
    {
        $sanPham = ProductModel::find($id);
        $sanPham->dacBiet = $request->get('dacBiet');
        $sanPham->save();

        return back();
    }

    public function excel(Request $request){
        $this->validate($request, [
            'file-excel' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('file-excel');
        Excel::import(new ProductImport, $file);
        return back()->with('success', "File imported successfully");
    }

    public function sample(){
        $path = public_path('excel_sample\product-sample.xlsx');
        return response()->download($path);
    }

    public function createVoucher($id){
        $Voucher = VoucherModel::all();
        $SanPham = ProductModel::find($id);
        $SPV = ProductVoucherModel::join('voucher', 'voucher.maVoucher', '=', 'san_pham_voucher.maVoucher')->where('san_pham_voucher.maSP', $id)->get();
        // dd($SPV);
        return view('Admin.Product.voucher', [
            'Voucher' => $Voucher,
            'SanPham' => $SanPham,
            'SPV' => $SPV,
        ]);
    }

    public function storeVoucher(Request $request){
        $validated = $request->validate([
            'maSP' => 'required',
            'maVoucher' => 'required|unique:App\Models\ProductVoucherModel,maVoucher,NULL,id,maSP,'.$request->maSP,
        ]);

        $SPV = new ProductVoucherModel();
        $SPV->maSP = $request->get('maSP');
        $SPV->maVoucher = $request->get('maVoucher');
        $SPV->kichHoat = 1;
        $SPV->save();
        
        return redirect()->back()->with('added', 'Thêm thành công');
    }
}
