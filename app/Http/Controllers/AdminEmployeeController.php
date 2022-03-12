<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all từ bảng chức vụ - Chỉ lấy những chức vụ có quyền hạn ( là Admin )
        $chucVu = DB::table('chuc_vu')->join('chuc_vu_quyen_han', 'chuc_vu.maCV', '=', 'chuc_vu_quyen_han.maCV')
            ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')->where('tenQH', 'Là nhân viên')->get();

        //
        $employee = UserModel::join('chuc_vu_quyen_han', 'nguoi_dung.maCV', '=', 'chuc_vu_quyen_han.maCV')
            ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')
            ->where('tenQH', 'Là nhân viên')
            ->orderBy('maND', 'desc')->get();
        // ->paginate();

        return view('Admin.Employee.index', [
            "employee" => $employee,
            "chucVu" => $chucVu,
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
        //
        $nhanVien = new UserModel();

        // Request biến từ form
        $nhanVien->tenND = $request->get('ten');
        $nhanVien->emailND = $request->get('email');
        $nhanVien->matKhauND = $request->get('password');
        $nhanVien->maCV = $request->get('maCV');

        // Lưu vào bảng
        $nhanVien->save();

        // Quay về danh sách Admin
        return redirect(route('employee.index'));
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
    public function destroy($id)
    {
        //
    }
}
