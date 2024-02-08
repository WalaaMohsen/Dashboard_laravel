<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\product as ModelsProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // index or dashboard for admin  page
    public function dashboard() {

        return view('admin.dashboard');
        
    }
    // display all products in database
    public function show_all(){
        $products = Product::all();
        return view('admin.show_all', compact('products'));
    }
    // update on any record(product)
    public function update($id){
        $product = Product::FindOrFail($id);
        return view('admin.update',compact('product'));
        
    }
    public function edit(Request $request , $id){
        $product = Product::find($id);
        $input =$request->all();
        $product->update($input);
        return redirect('show_all')->with('success' , 'product updated successfully.');
        
    }
    // delete record(product)
    public function destroy($id){
        Product::find($id)->delete();
        return redirect('show_all')->with('success' , 'product deleted successfully.');    
    }
    // add new record(product)
    public function Create() {
        return view('admin.create_product');
        
    }
    public function store( Request $request){
        /*$request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);*/
        
        Product::Create([
            'name' => $request->productName,
            'price' => $request->productPrice,
            'quantity'=>$request->productQuantity
        ]);
        return redirect('create_product')->with('success' , 'product created successfully.');
    
    }
    // search for any product
    public function search(Request $request){
        $search = $request->search;
        $products = Product::where('name','LIKE',"%$search%")->get();
        return view('admin.show_all',compact('products'));
    }
}
