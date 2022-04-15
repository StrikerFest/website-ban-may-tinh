<?php

namespace App\Http\Controllers;

use App\Models\ProductCommentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
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
        if (!session()->has('khachHang')) {
            return redirect(url()->previous() . '#comment')->with("error", "Mời khách hàng đăng nhập trước");
        }
        $comment = new ProductCommentModel();
        if ($request->get('binhLuan') == !null) {
            if($request->get('maBLC') == null){
                $comment->maSP = $request->get('maSPBinhLuan');
                $comment->maND = $request->get('maNDBinhLuan');
                $comment->noiDung = $request->get('binhLuan');
                $comment->ngayTao = date('Y/m/d h:i:s', time());
                $comment->maBLC = null;
                // dd($comment);
                $comment->save();
            }
            else{
                $comment->maSP = $request->get('maSPBinhLuan');
                $comment->maND = $request->get('maNDBinhLuan');
                $comment->noiDung = $request->get('binhLuan');
                $comment->ngayTao = date('Y/m/d h:i:s', time());
                $comment->maBLC = $request->get('maBLC');
                // dd($comment);
                $comment->save();
            }
        }

        // Quay về danh sách Admin
        // return Redirect::route('product.show',$request->get('maSPBinhLuan'))->with(
        //     "success",
        //     "Tạo tài khoản thành công - Mời bạn đăng nhập"
        // );
        return redirect(url()->previous() . '#comment')->with("commentAdd", "Thêm bình luận thành công ");
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
