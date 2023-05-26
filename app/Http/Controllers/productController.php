<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //
    function index()
    {
        $product = product::all()->toArray();
        // dd($product);
        // return view('product', ['product' => $data]);
        return view('product', compact('product'));
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
}
