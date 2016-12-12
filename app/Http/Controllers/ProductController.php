<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
    	$produk=Product::orderBy('id','desc')->get();

    	return response()->json($produk);
    }

    public function store(Request $request){
    	$produk=new Product();
    	$produk->name=$request->input('name');
    	$produk->price=$request->input('price');

    	if($produk->save()){
    		return response()->json($produk);
    	}else{
    		return response()->json("Error");
    	}
    }

    public function update(Request $request,$id){
    	$produk=Product::findOrFail($id);
    	$produk->name=$request->input('name');
    	$produk->price=$request->input('price');
    	$produk->update();

    	return response()->json($produk);
    }

    public function destroy($id){
    	$produk=Product::find($id);

    	$produk->delete();

    	return response()->json("berhasil hapus produk");
    }

    //
}
