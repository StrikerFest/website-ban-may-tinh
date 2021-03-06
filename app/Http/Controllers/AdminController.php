<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchName = $request->get('searchName');

        // Get all từ bảng chức vụ - Chỉ lấy những chức vụ có quyền hạn ( là Admin )
        $chucVu = DB::table('chuc_vu')->join('chuc_vu_quyen_han', 'chuc_vu.maCV', '=', 'chuc_vu_quyen_han.maCV')
            ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')->where('tenQH', 'Là Admin')->get();

        // Lấy bản ghi có chức vụ gồm quyền hạn ( Là Admin )
        // $admin = UserModel::join('chuc_vu_quyen_han', 'nguoi_dung.maCV', '=', 'chuc_vu_quyen_han.maCV')
        //     ->join('quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')
        //     ->join('chuc_vu', 'nguoi_dung.maCV', '=', 'chuc_vu.maCV')
        //     ->where('tenQH', 'Là Admin')
        //     ->orderBy('maND', 'desc')
        //     ->paginate(5);

        // Lấy bản ghi có chức vụ admin (ko bao gồm Super Admin)
        $admin = UserModel::join('chuc_vu', 'chuc_vu.maCV', '=' ,'nguoi_dung.maCV')
            ->where('tenND', 'like', "%$searchName%")
            ->where('tenCV', 'like', 'Admin')
            ->orderBy('maND', 'desc')
            ->paginate(5)
            ->appends(['searchName' => $searchName]);

        return view('Admin.Admin.index', [
            "admin" => $admin,
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
            'phone' => 'required',
            'address' => 'required|min:3',
            'password' => 'required|min:3',
            'maCV' => 'required'
        ]);

        $admin = new UserModel();
        $admin->tenND = $request->get('name');
        $admin->emailND = $request->get('email');
        $admin->soDienThoai = $request->get('phone');
        $admin->diaChiND = $request->get('address');
        $admin->matKhauND = Hash::make($request->get('password'));
        $matKhau = $request->get('password');
        $matKhau2 = $request->get('password2');
        $admin->maCV = $request->get('maCV');

        if($matKhau != $matKhau2){
            return back()->with("matKhau", "Nhập lại mật khẩu không trùng khớp");
        }
        $admin->save();

        // Quay về danh sách Admin
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
        $validate = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns|unique:App\Models\UserModel,emailND,'. $id,
            'phone' => 'required',
            'address' => 'required|min:3',
            'password' => 'required|min:3',
            'maCV' => 'required'
        ]);
        
        $admin = UserModel::find($id);
        $admin->tenND = $request->get('name');
        $admin->emailND = $request->get('email');
        $admin->soDienThoai = $request->get('phone');
        $admin->diaChiND = $request->Get('address');
        $admin->matKhauND = Hash::make($request->get('password'));
        $matKhau = $request->get('password');
        $matKhau2 = $request->get('password2');
        $admin->maCV = $request->get('maCV');

        if($matKhau != $matKhau2){
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
        if ($admin->maCV == 1) {
            return Redirect::route('admin.index')->with('super', "Không được phép xóa Super Admin!!");
        } else {
            try {
                $admin->delete();
                return redirect(route('admin.index'));
            } catch (Exception $e) {
                return back()->with("delete", "Xung đột khoá ngoại");
            }
        }
    }
}
