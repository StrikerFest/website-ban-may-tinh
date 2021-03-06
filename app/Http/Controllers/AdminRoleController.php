<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\PermissionModel;
use App\Models\RoleModel;
use App\Models\RolePermissionModel;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chucVu = RoleModel::orderBy('maCV', 'desc')->get();
        $chucVuQuyenHan = json_decode(RolePermissionModel::join('quyen_han', 'quyen_han.maQH', '=', 'chuc_vu_quyen_han.maQH')->get()->toJSON());
            // dd($chucVuQuyenHan);
        $quyenHan = PermissionModel::orderBy('maQH', 'desc')->get();
        // ->paginate();

        return view('Admin.Role.index', [
            "chucVu" => $chucVu,
            "quyenHan" => $quyenHan,
            "chucVuQuyenHan" => $chucVuQuyenHan,
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
            'ten' => 'required|unique:App\Models\RoleModel,tenCV'
        ]);

        // Tạo 1 Role mới từ role Model
        $role = new RoleModel();

        // Lấy tên chức vụ từ form
        $role->tenCV = $request->get('ten');

        // Thêm chức vụ mới vào database
        $role->save();

        // Lấy chức vụ có tên giống tên vừa lưu vào db - Để lấy mã
        $roleGetId = RoleModel::where('tenCV', $role->tenCV)->first();

        // Lấy tất cả các mã quyền hạn admin thêm từ form
        $arr = $request->get('maQH');

        // Lặp lại theo size của mảng các mã quyền hạn
        // Để thêm từng cái 1 vào bảng chức vụ quyền hạn trong DB
        for ($i = 0; $i < sizeof($arr); $i++) {

            // Tạo 1 chức vụ quyền hạn mới từ model của nó
            $rolePermission = new RolePermissionModel();

            // Lấy maQH từ từng index của mảng chứa mã quyền hạn
            $rolePermission->maQH = $arr[$i];

            // Lấy mã chức vụ từ bản ghi lấy về ở trên
            $rolePermission->maCV = $roleGetId->maCV;

            // Lưu vào DB và lặp lại
            // Từng quyền 1 sẽ được cho vào DB
            $rolePermission->save();
        }

        // Quay về danh sách Admin
        return redirect(route('role.index'));
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
        $chucVu = RoleModel::find($id);

        $quyenHan = PermissionModel::all();

        //Đưa các mã QH thuộc chức vụ hiện tại vào mảng
        $quyenHanHienTai = PermissionModel::join('chuc_vu_quyen_han', 'chuc_vu_quyen_han.maQH', '=', 'quyen_han.maQH')
            ->where('maCV', '=', $id)
            ->get('quyen_han.maQH');
        $arr = [];
        foreach($quyenHanHienTai as $QHHT){
            array_push($arr, $QHHT->maQH);
        }

        return view('Admin.Role.edit', [
            'chucVu' => $chucVu,
            'quyenHan' => $quyenHan,
            'arr' => $arr,
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
            'ten' => 'required|unique:App\Models\RoleModel,tenCV,' .$id,
        ]);
        $chucVu = RoleModel::find($id);
        $chucVu->tenCV = $request->get('ten');
        
        $chucVu->save();

        $chucVuQuyenHanCu = RolePermissionModel::where('maCV', '=', $id);
        $chucVuQuyenHanCu->delete();
        if(!is_null($request->get('maQH'))){
            for($i = 0; $i < sizeof($request->get('maQH')); $i++){
                $chucVuQuyenHan = new RolePermissionModel();
                $chucVuQuyenHan->maCV = $id;
                $chucVuQuyenHan->maQH = $request->get('maQH')[$i];
    
                $chucVuQuyenHan->save();
            }
        }

        return redirect(route('role.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nguoiDung = UserModel::where('maCV', '=', $id)->count();
        if($nguoiDung > 0){
            return back()->with('delete', "Xung đột khoá ngoại!");
        }
        $CVQH = RolePermissionModel::where('maCV', '=', $id);
        $CVQH->delete();

        $chucVu = RoleModel::find($id);
        $chucVu->delete();

        return redirect(route('role.index'));
    }
}
