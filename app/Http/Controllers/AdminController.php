<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use App\Models\Product_type;
use App\Models\Product_special;





class AdminController extends Controller
{
    public function index(){
        return view("admin.index");
    }

    public function create_products(){
        $product_type = Product_type::all();
        $product_special = Product_special::all();
        // dd($product_type);
        return view("admin.create_product", [
            "all_product_type"=>$product_type,
            "all_product_special"=>$product_special,
        ]);
    }

    public function products(){
        $products = Product::all();
        return view("admin.products", ["products" =>$products]);
    }

    public function edit_products($product){
        $product = Product::findOrFail($product);
        $product_type = Product_type::all();
        $product_special = Product_special::all();
        return view("admin.edit_products", ["product" =>$product,
         "all_product_type"=>$product_type,
        "all_product_special"=>$product_special,]);
    }
}
