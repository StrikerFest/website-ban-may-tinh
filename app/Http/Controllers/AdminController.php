<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $chucVu = DB::table('chuc_vu')->get();

        $admin = UserModel::join('chuc_vu_quyen_han', 'nguoi_dung.maCV', '=', 'chuc_vu_quyen_han.maCV')
            ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')
            ->join('chuc_vu', 'nguoi_dung.maCV', '=', 'chuc_vu.maCV')
            ->where('tenQH', 'Là Admin')
            ->orderBy('maND', 'desc')
            ->paginate(5);

        return view('Admin.Admin.index', [
            "admin" => $admin,
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
        $admin = new UserModel();
        $admin->tenND = $request->get('name');
        $admin->emailND = $request->get('email');
        $admin->matKhauND = $request->get('password');
        $matKhau2 = $request->get('password2');
        $admin->maCV = $request->get('maCV');

        if($admin->matKhauND != $matKhau2){
            return back()->with("matKhau", "Nhập lại mật khẩu không trùng khớp");
        }
        $admin->save();
        return redirect(route('admin.index'));
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
        $admin = UserModel::find($id);
        
        return view('Admin.Admin.edit', [
            "admin" => $admin,
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
        $admin = UserModel::find($id);
        $admin->tenND = $request->get('name');
        $admin->emailND = $request->get('email');
        $admin->matKhauND = $request->get('password');
        $matKhau2 = $request->get('password2');
        $admin->maCV = $request->get('maCV');

        if($admin->matKhauND != $matKhau2){
            return back()->with("matKhau", "Nhập lại mật khẩu không trùng khớp");
        }
        $admin->save();
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = UserModel::find($id);
        $admin->delete();

        return redirect(route('admin.index'));
    }
}
