<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplierModel;
use App\Models\ProductModel;
use App\Models\ProductSupplierModel;
use Exception;

class AdminSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');

        $nhaPhanPhoi = SupplierModel::where('tenNPP', 'like', "%$searchName%")
            ->orderBy('maNPP', 'desc')
            ->paginate(5);
        return view('Admin.Supplier.index', [
            "nhaPhanPhoi" => $nhaPhanPhoi,
            "searchName" => $searchName,
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
            'tenNPP' => 'required|min:3|unique:App\Models\SupplierModel,tenNPP',
            'diaChiNPP' => 'required|min:3',
            'soDienThoai' => 'required',
        ]);

        $NPP = new SupplierModel();
        $NPP->tenNPP = $request->get('tenNPP');
        $NPP->diaChiNPP = $request->get('diaChiNPP');
        $NPP->soDienThoai = $request->get('soDienThoai');
        $NPP->save();

        return redirect(route('supplier.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $searchName = $request->get('searchName');

        $sanPham = SupplierModel::join('san_pham_nha_phan_phoi', 'san_pham_nha_phan_phoi.maNPP', '=', 'nha_phan_phoi.maNPP')
            ->join('san_pham', 'san_pham_nha_phan_phoi.maSP', '=', 'san_pham.maSP')
            ->where('san_pham_nha_phan_phoi.maNPP', $id)
            ->where('tenSP', 'like', "%$searchName%")
            ->orderBy('maSPNPP', 'desc')
            ->paginate(10)
            ->appends([
                'searchName' => $searchName,
            ]);
        $nhaPhanPhoi = SupplierModel::find($id);

        $listSanPham = ProductModel::join('san_pham_nha_phan_phoi', 'san_pham_nha_phan_phoi.maSP', '=', 'san_pham.maSP')
            ->whereNotIn('san_pham.maSP', ProductSupplierModel::where('maNPP', $id)->get('maSP')->toArray())
            ->groupBy('san_pham.maSP')
            ->get();
        
        return view('Admin.Supplier.show', [
            'sanPham' => $sanPham,
            'nhaPhanPhoi' => $nhaPhanPhoi,
            'searchName' => $searchName,
            'listSanPham' => $listSanPham,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhaPhanPhoi = SupplierModel::find($id);

        return view('Admin.Supplier.edit', [
            'nhaPhanPhoi' => $nhaPhanPhoi,
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
            'tenNPP' => 'required|min:3|unique:App\Models\SupplierModel,tenNPP,'.$id,
            'diaChiNPP' => 'required|min:3',
            'soDienThoai' => 'required',
        ]);

        $NPP = SupplierModel::find($id);
        $NPP->tenNPP = $request->get('tenNPP');
        $NPP->diaChiNPP = $request->get('diaChiNPP');
        $NPP->soDienThoai = $request->get('soDienThoai');
        $NPP->save();

        return redirect(route('supplier.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $NPP = SupplierModel::find($id);
        try{
            $NPP->delete();
            return redirect(route('supplier.index'));
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
    }

    public function deleteProduct($maSPNPP)
    {
        $SP = ProductSupplierModel::find($maSPNPP);
        $SP->delete();
        return back();
    }

    public function createProduct(Request $request)
    {
        $validated = $request->validate([
            'maNPP' => 'required',
            'maSP' => 'required',
            'maSP.*' => 'required|unique:App\Models\ProductSupplierModel,maSP,NULL,id,maNPP,'.$request->maNPP,
        ]);
        try{
            for($i = 0; $i < sizeof($request->get('maSP')); $i++){
                $SPNPP = new ProductSupplierModel();
                $SPNPP->maSP = $request->get('maSP')[$i];
                $SPNPP->maNPP = $request->get('maNPP');
                $SPNPP->save();
            };
        }catch(Exception $e){
            return back()->with('duplicate', "Lỗi trùng lặp");
        }
        return back();
    }
}
