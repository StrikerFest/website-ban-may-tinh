<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class AdminEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');

        //Lấy chức vụ có quyền hạn = 7 (là nhân viên)
        $chucVu = DB::table('chuc_vu')->join('chuc_vu_quyen_han', 'chuc_vu.maCV', '=', 'chuc_vu_quyen_han.maCV')
            ->where('chuc_vu_quyen_han.maQH', '=', '7')
            ->get();

        $employee = UserModel::join('chuc_vu_quyen_han', 'nguoi_dung.maCV', '=', 'chuc_vu_quyen_han.maCV')
            ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')
            ->join('chuc_vu', 'nguoi_dung.maCV', '=', 'chuc_vu.maCV')
            ->where('tenND', 'like', "%$searchName%")
            ->where('tenQH', 'Là nhân viên')
            ->orderBy('maND', 'desc')
            ->paginate(5);

        return view('Admin.Employee.index', [
            "employee" => $employee,
            "chucVu" => $chucVu,
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
        $validate = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns|unique:App\Models\UserModel,emailND',
            'address' => 'required|min:3',
            'password' => 'required|min:3',
            'maCV' => 'required'
        ]);

        $employee = new UserModel();
        $employee->tenND = $request->get('name');
        $employee->emailND = $request->get('email');
        $employee->diaChiND = $request->Get('address');
        $employee->matKhauND = $request->get('password');
        $matKhau2 = $request->get('password2');
        $employee->maCV = $request->get('maCV');

        if($employee->matKhauND != $matKhau2){
            return back()->with("matKhau", "Nhập lại mật khẩu không trùng khớp");
        }
        $employee->save();
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
        $nhanVien = UserModel::find($id);

        //Lấy chức vụ của nhân viên theo DB (id từ 3 - 5)
        $chucVu = DB::table('chuc_vu')->whereBetween('maCV', [3, 5])->get();
        
        return view('Admin.Employee.edit', [
            "nhanVien" => $nhanVien,
            "chucVu" => $chucVu,
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
        $validate = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns|unique:App\Models\UserModel,emailND,'. $id,
            'address' => 'required|min:3',
            'password' => 'required|min:3',
            'maCV' => 'required'
        ]);
        
        $nhanVien = UserModel::find($id);
        $nhanVien->tenND = $request->get('name');
        $nhanVien->emailND = $request->get('email');
        $nhanVien->diaChiND = $request->Get('address');
        $nhanVien->matKhauND = $request->get('password');
        $matKhau2 = $request->get('password2');
        $nhanVien->maCV = $request->get('maCV');

        if($nhanVien->matKhauND != $matKhau2){
            return back()->with("matKhau", "Nhập lại mật khẩu không trùng khớp");
        }
        $nhanVien->save();
        return redirect(route('employee.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = UserModel::find($id);
        try{
            $employee->delete();
            return redirect(route('employee.index'));
        }catch(Exception $e){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
    }
}
