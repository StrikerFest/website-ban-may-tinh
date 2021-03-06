<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SerialModel;
use App\Models\ProductModel;
use Exception;

class AdminSerialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $maSP)
    {
        $searchName = $request->get('searchName');
        $searchStatus = $request->get('searchStatus');
        $searchReceipt = $request->get('searchReceipt');

        if($searchReceipt){
            switch($searchStatus){
                case 1:
                    //Đã bán
                    $Serial = SerialModel::select(['serial.*', 'hoa_don.maHD'])
                        ->leftJoin('hoa_don_chi_tiet', 'hoa_don_chi_tiet.maHDCT', '=', 'serial.maHDCT')
                        ->leftJoin('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
                        ->where('serial.maSP', $maSP)
                        ->where('serial', 'like', "%$searchName%")
                        ->where('hoa_don.maHD', 'like', "%$searchReceipt%")
                        ->whereNotNull('serial.maHDCT')
                        ->orderBy('maHDCT', 'ASC')
                        ->orderBy('maSerial', 'ASC')
                        ->paginate(10)
                        ->appends([
                            'searchName' => $searchName,
                            'searchStatus' => $searchStatus,
                            'searchReceipt' => $searchReceipt,
                        ]);
                    break;
                case 2:
                    //Chưa bán
                    $Serial = SerialModel::select(['serial.*', 'hoa_don.maHD'])
                        ->leftJoin('hoa_don_chi_tiet', 'hoa_don_chi_tiet.maHDCT', '=', 'serial.maHDCT')
                        ->leftJoin('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
                        ->where('serial.maSP', $maSP)
                        ->where('serial', 'like', "%$searchName%")
                        ->where('hoa_don.maHD', 'like', "%$searchReceipt%")
                        ->whereNull('serial.maHDCT')
                        ->orderBy('maHDCT', 'ASC')
                        ->orderBy('maSerial', 'ASC')
                        ->paginate(10)
                        ->appends([
                            'searchName' => $searchName,
                            'searchStatus' => $searchStatus,
                            'searchReceipt' => $searchReceipt,
                        ]);
                    break;
                default:
                    //Mặc định
                    $Serial = SerialModel::select(['serial.*', 'hoa_don.maHD'])
                        ->leftJoin('hoa_don_chi_tiet', 'hoa_don_chi_tiet.maHDCT', '=', 'serial.maHDCT')
                        ->leftJoin('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
                        ->where('serial.maSP', $maSP)
                        ->where('serial', 'like', "%$searchName%")
                        ->where('hoa_don.maHD', 'like', "%$searchReceipt%")
                        ->orderBy('maHDCT', 'ASC')
                        ->orderBy('maSerial', 'ASC')
                        ->paginate(10)
                        ->appends([
                            'searchName' => $searchName,
                            'searchStatus' => $searchStatus,
                            'searchReceipt' => $searchReceipt,
                        ]);
                    break;
            }
        }else{
            switch($searchStatus){
                case 1:
                    //Đã bán
                    $Serial = SerialModel::select(['serial.*', 'hoa_don.maHD'])
                        ->leftJoin('hoa_don_chi_tiet', 'hoa_don_chi_tiet.maHDCT', '=', 'serial.maHDCT')
                        ->leftJoin('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
                        ->where('serial.maSP', $maSP)
                        ->where('serial', 'like', "%$searchName%")
                        ->whereNotNull('serial.maHDCT')
                        ->orderBy('maHDCT', 'ASC')
                        ->orderBy('maSerial', 'ASC')
                        ->paginate(10)
                        ->appends([
                            'searchName' => $searchName,
                            'searchStatus' => $searchStatus,
                            'searchReceipt' => $searchReceipt,
                        ]);
                    break;
                case 2:
                    //Chưa bán
                    $Serial = SerialModel::select(['serial.*', 'hoa_don.maHD'])
                        ->leftJoin('hoa_don_chi_tiet', 'hoa_don_chi_tiet.maHDCT', '=', 'serial.maHDCT')
                        ->leftJoin('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
                        ->where('serial.maSP', $maSP)
                        ->where('serial', 'like', "%$searchName%")
                        ->whereNull('serial.maHDCT')
                        ->orderBy('maHDCT', 'ASC')
                        ->orderBy('maSerial', 'ASC')
                        ->paginate(10)
                        ->appends([
                            'searchName' => $searchName,
                            'searchStatus' => $searchStatus,
                            'searchReceipt' => $searchReceipt,
                        ]);
                    break;
                default:
                    //Mặc định
                    $Serial = SerialModel::select(['serial.*', 'hoa_don.maHD'])
                        ->leftJoin('hoa_don_chi_tiet', 'hoa_don_chi_tiet.maHDCT', '=', 'serial.maHDCT')
                        ->leftJoin('hoa_don', 'hoa_don.maHD', '=', 'hoa_don_chi_tiet.maHD')
                        ->where('serial.maSP', $maSP)
                        ->where('serial', 'like', "%$searchName%")
                        ->orderBy('maHDCT', 'ASC')
                        ->orderBy('maSerial', 'ASC')
                        ->paginate(10)
                        ->appends([
                            'searchName' => $searchName,
                            'searchStatus' => $searchStatus,
                            'searchReceipt' => $searchReceipt,
                        ]);
                    break;
            }
        }
        
        $tenSP = ProductModel::find($maSP)->tenSP;
        // dd($Serial);
        return view('Admin.Serial.index', [
            'Serial' => $Serial,
            'tenSP' => $tenSP,
            'searchName' => $searchName,
            'searchStatus' => $searchStatus,
            'searchReceipt' => $searchReceipt,
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
        $serial = SerialModel::find($id);

        return view('Admin.Serial.edit', [
            'serial' => $serial,
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
            'serial' => 'required|unique:App\Models\SerialModel,serial,'.$id,
        ]);

        $serial = SerialModel::find($id);
        $serial->serial = $request->get('serial');
        $serial->save();

        return redirect(route('serial.show', $serial->maSP));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serial = SerialModel::find($id);
        $sanPham = ProductModel::where('maSP', $serial->maSP)->first();
        $sanPham->soLuong = $sanPham->soLuong-1;
        $sanPham->save();
        try{
            $serial->delete();
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }

        return redirect(route('serial.show', $serial->maSP));
    }
}
