<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductAddRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Product;
class ProductController extends Controller
{
   //index for products and displaying data 
    public function index(){
        $products = Product::all();
        return view('product.index')->withProducts($products);
    }
    //creating new product
    public function create(){
        return view('product.create');
    }
    //storing new product in database
    public function store(ProductAddRequest $request){
        $data = $request->all();
        Product::create($data);
        session()->flash('notif' , 'Successfully Registered');
        return redirect()->route('products.index');
    }
    //showing full details of the product
    public function show(Product $product){
        return view('product.show')->withProduct($product);
    }
    //for editing product data
    public function edit(Product $product){
        return view('product.edit')->withProduct($product);
    }
    //updating product data in database
    public function update(Product $product, ProductUpdateRequest $request){
        $data = $request->all();
        $product->update($data);  
        session()->flash('notif' , 'Updated Successfully ');
        return redirect()->route('products.index');
    }
    //deleting product data in database
    public function destroy(Product $product){
        $product->delete();
        session()->flash('notif' , 'Deleted Successfully ');
        return redirect()->route('products.index');
    }
    


    
}
