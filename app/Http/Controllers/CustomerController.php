<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
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
        $request->session()->put('signupError', true);

        $validate = $request->validate([
            'newName' => 'required|min:3',
            'newEmail' => 'required|email:rfc,dns',
            // 'newEmail' => 'required|email:rfc,dns|unique:App\Models\UserModel,emailND',
            'newAddress' => 'required|min:3',
            'newPhone' => 'required|min:9|max:13',
            'newPassword' => 'required|min:5',
        ],
        [
            'newName.required'=>'Bạn cần nhập tên của bạn vào',
            'newName.min'=>'Tên bạn nhập quá ngắn ( Tối thiểu 3 ký tự )',
            'newAddress.required'=>'Bạn cần nhập địa chỉ của bạn vào',
            'newAddress.min'=>'Dịa chỉ bạn nhập quá ngắn ( Tối thiểu 3 ký tự )',
            'newEmail.required'=>'Bạn cần nhập email của bạn vào',
            'newEmail.email'=>'Định dạng email sai',
            'newPhone.required'=>'Bạn cần nhập số điện thoại của bạn vào',
            'newPhone.min'=>'Số điện thoại bạn nhập quá ngắn ( Tối thiểu 9 ký tự )',
            'newPhone.max'=>'Số điện thoại bạn nhập quá dài ( Tối đa 13 ký tự )',
            'newPassword.required'=>'Bạn cần nhập mật khẩu của bạn vào',
            'newPassword.min'=>'Mật khẩu của bạn quá ngắn ( Tối thiểu 5 ký tự )',
        ]);

        session()->forget('signupError');

        $customer = new UserModel();
        // Lấy các thông tin từ
        $customer->tenND = $request->get('newName');
        $customer->emailND = $request->get('newEmail');
        $customer->soDienThoai = $request->get('newPhone');
        $customer->diaChiND = $request->get('newAddress');
        $customer->matKhauND = Hash::make($request->get('newPassword'));
        $customer->maCV = DB::table('chuc_vu')->where('tenCV', 'Khách hàng')->first()->maCV;
        // dd($customer->maCV);
        $customer->save();

        // Quay về danh sách Admin
        return Redirect::route('product.index')->with(
            "success",
            "Tạo tài khoản thành công - Mời bạn đăng nhập"
        );
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
        $request->session()->put('profileError', "Thông tin nhập mới có lỗi, mời bạn thử lại");
        $validate = $request->validate([
            'updateName' => 'required|min:3',
            // 'updateEmail' => 'required|email:rfc,dns|unique:App\Models\UserModel,emailND',
            'updateEmail' => 'required|email:rfc,dns',
            'updatePhone' => 'required|min:9|max:13',
        ],
        [
            'updateName.required'=>'Bạn cần nhập tên của bạn vào',
            'updateName.min'=>'Tên bạn nhập quá ngắn ( Tối thiểu 3 ký tự )',
            'updateEmail.required'=>'Bạn cần nhập email của bạn vào',
            'updateEmail.email'=>'Định dạng email sai',
            'updatePhone.required'=>'Bạn cần nhập số điện thoại của bạn vào',
            'updatePhone.min'=>'Số điện thoại bạn nhập quá ngắn ( Tối thiểu 9 ký tự )',
            'updatePhone.max'=>'Số điện thoại bạn nhập quá dài ( Tối đa 13 ký tự )',
        ]
    );
        session()->forget('profileError');

        // $validated = $request->validate([]);
        if (!session()->has('khachHang')) {
            return Redirect::route('product.index')->with("error", "Mời khách hàng đăng nhập trước");
        }
        $request->session()->put('tenKhachHang',  $request->get(
            'updateName'
        ));
        $request->session()->put('soDienThoai', $request->get(
            'updatePhone'
        ));
        $request->session()->put('email', $request->get('updateEmail'));

        $ND = UserModel::find($id);

        $ND->tenND = $request->get(
            'updateName'
        );
        $ND->soDienThoai = $request->get(
            'updatePhone'
        );
        $ND->emailND = $request->get('updateEmail');

        $ND->save();
        $request->session()->put('displayUpdate', "1");
        return Redirect::route('product.index');
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
