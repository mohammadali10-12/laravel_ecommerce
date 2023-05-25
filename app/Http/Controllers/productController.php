<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

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
        return $req->input();
    }
}
