<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('Product/index', compact('products'));

    }

    public function create()
    {
        return view('Product/create');
    }

    public function store(Request $request)
    {
        $product = new product();
        $product->namabarang = $request->namabarang;
        $product->kategori = $request->kategori;
        $product->deskripsi = $request->deskripsi;
        $product->created_at = Carbon::now();
        $product->updated_at = Carbon::now();

        $product->save();
        return redirect('/product');
    }

    public function edit($id)
    {
        $product = product::find($id);
        return view('Product/edit', compact('id','product'));
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $product->namabarang =$request->namabarang;
        $product->kategori = $request->kategori;
        $product->deskripsi = $request->deskripsi;
        $product->updated_at = Carbon::now();

        $product->save();
        return redirect('/product');

    }
}
