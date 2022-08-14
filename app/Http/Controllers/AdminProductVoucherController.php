<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoucherModel;
use App\Models\ProductVoucherModel;
use DB;
use Exception;


class AdminProductVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($maVoucher)
    {
        $V = VoucherModel::join('the_loai_voucher', 'the_loai_voucher.maTLV', '=', 'voucher.maTLV')->find($maVoucher);

        $SPV = ProductVoucherModel::join('san_pham', 'san_pham.maSP', '=', 'san_pham_voucher.maSP')->where('maVoucher', $maVoucher)->get();
        
        $TangPham = DB::table('san_pham')->join('the_loai_con', 'san_pham.maTLC', '=', 'the_loai_con.maTLC')
            ->where('the_loai_con.tenTLC', 'like', 'Tặng phẩm')
            ->get();
        
            $getGiftValue = function () use ($V, $TangPham) {
            if ($V->maSP) {
                foreach ($TangPham as $SP) {
                    if (($SP->maSP) == ($V->maSP)) {
                        return $SP->giaSP;
                    }
                }
            }
            return 0;
        };
        
        $giaTriVoucher = $V->getVoucherValue($getGiftValue());

        //maTLC 21 = Tặng phẩm
        $SanPham = DB::table('san_pham')->where('maTLC', '!=', 21)->get();

        return view('Admin.Voucher.show', [
            'V' => $V,
            'SPV' => $SPV,
            'giaTriVoucher' => $giaTriVoucher,
            'SanPham' => $SanPham,
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
            'maSP' => 'required|unique:App\Models\ProductVoucherModel,maSP,NULL,id,maVoucher,'.$request->maVoucher,
            'maSP.*' => 'distinct',
        ]);
        $listMaSP = $request->get('maSP');
        $maVoucher = $request->get('maVoucher');
        $arr = [];
        foreach($listMaSP as $maSP){
            $SPV = new ProductVoucherModel();
            $SPV->maSP = $maSP;
            $SPV->maVoucher = $maVoucher;
            $SPV->kichHoat = 1;
            $SPV->save();
        }
        return redirect()->route('productVoucher.index', $maVoucher);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $redirect = $request->get('redirect');
        try{
            $SPV = ProductVoucherModel::find($id);
            $maVoucher = $SPV->maVoucher;
            $maSP = $SPV->maSP;

            $SPV->delete();
            if($redirect == 'toProduct'){
                return redirect()->route('admin.product.createController', $maSP);
            }
            return redirect()->route('productVoucher.index', $maVoucher);
        }catch(Exception $e){
            return redirect()->back()->with('delete', 'Xung đột khoá ngoại');
        }
    }
}
