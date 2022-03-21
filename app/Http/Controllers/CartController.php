<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Cart list
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('Customer.Customer.cart', compact('cartItems'));
    }

    // store
    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Sản phẩm thêm vào giỏ hàng thành công !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Số lượng sản phẩm cập nhật thành công !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Sản phẩm được loại bỏ thành công !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Tất cả sản phẩm đã được loại bỏ thành công !');

        return redirect()->route('cart.list');
    }
}
