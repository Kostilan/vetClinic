<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Product;
use App\Models\Product_special;
use App\Models\Product_type;

class ProductController extends Controller
{
    public function basket()
    {
        $products = Product::all();

        return view("basket", compact("products"));
    }
    public function catalog()
    {
        $products = Product::all();
        // $type = Product_type::findOrFail($products->product_type_id);
        // $special = Product_special::findOrFail($products->product_type_id);
        return view("catalog", ["products"=>$products]);
    }

    public function product_sale( $id)
    {
        $product = Product::findOrFail($id);
        // $type = Product_type::findOrFail($product->product_type_id);
        // $special = Product_special::findOrFail($product->product_type_id);
        // "type"=>$type, "special"=>$special
        // dd($products);
        return view("product", ["product"=>$product, ]
    );
    }

    public function create_product(Request $request)
    { 
    //  Валидация
        $request->validate([
            'title' => 'required|string|max:100',
            'photo' => 'required|string|max:200',
            'product_quantity' => 'required|numeric|min:1',
            'product_purpose' => 'required|string|max:100',
            'cost' => 'required|numeric|min:1',
            'product_type_id' => 'required',
            'product_special_id' => 'required|string|max:100'
        ]);
        
        // dd($request["photo"]);
        Product::create([
            "title" =>$request["title"],
            "photo" =>$request["photo"],
            "product_quantity" =>$request["product_quantity"],
            "product_purpose" =>$request["product_purpose"],
            "cost" =>$request["cost"],
            "product_type_id" =>$request["product_type_id"],
            "product_special_id" =>$request["product_special_id"],
        ]);
        // dd($request);
        return redirect("/admin")->with('succes', 'Рецепт успешно добавлен!');
    }

    public function delete_product(Product $product){
        $product->delete();
        return redirect('/products');
    }

    public function edit_product(Request $request){
        $product = Product::find($request->input('id'));
        // $this->authorize()
            // Валидация
            $request->validate([
                'title' => 'required|string|max:100',
                'photo' => 'required|string|max:200',
                'product_quantity' => 'required|numeric|min:1',
                'product_purpose' => 'required|string|max:100',
                'cost' => 'required|numeric|min:1',
                'product_type_id' => 'required',
                'product_special_id' => 'required|string|max:100'
            ]);
            
            // dd($product);
            $product->update([
                'title' => $request['title'],
                'photo' => $request['photo'],
                'product_quantity' => $request['product_quantity'],
                'product_purpose' => $request['product_purpose'],
                'cost' => $request['cost'],
                'product_type_id' => $request['product_type_id'],
                'product_special_id' => $request['product_special_id'],
            ]);
            return redirect('/products');
    }
}
