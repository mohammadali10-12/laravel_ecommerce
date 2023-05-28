<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\order;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //
    function index()
    {
        $product = product::all();
        // dd($product);
        return view('product', ['product' => $product]);
        // return view('product', compact('product'));
    }

    function detail($id)
    {
        $data = product::find($id);
        return view('detail', compact('data'));
    }
    function search(Request $req)
    {
        $data = product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        // dd($data);
        return  view('search', compact('data'));
    }
    function AddToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('login');
        }
    }
    public static function cartItem()
    {
        $user_id = session()->get('user')['id'];
        $items = Cart::where('user_id', $user_id)->get();
        return count($items);
    }
    function cartlist()
    {
        $user_id = session()->get('user')['id'];
        $data =  DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $user_id)
            ->get();
        return view('cartlist', compact('data'));
    }
    function removeCart($id)
    {
        echo Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $user_id = session()->get('user')['id'];
        $data = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $user_id)
            ->sum('products.price');
        return view('order', compact('data'));
    }
    function orderPlace(Request $req)
    {
        $user_id = session()->get('user')['id'];
        $allCart = Cart::where('user_id', $user_id)->get();
        foreach ($allCart as $cart) {
            $order = new order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->address = $req->address;
            $order->payment_method = $req->payment;
            $order->payment_status = 'pending';
            $order->save();
        }
        Cart::where('user_id', $user_id)->delete();
        return redirect('/');
    }
    function myOrder()
    {
        $user_id = session()->get('user')['id'];
        $data = DB::table('orders')
            ->join('products', 'orders.product_id', 'products.id')
            ->where('orders.user_id', $user_id)
            ->get();

        return view('myorder', compact('data'));
    }
}
