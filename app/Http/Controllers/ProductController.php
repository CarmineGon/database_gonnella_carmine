<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function articoli(){
        return view('product.create');
    }

    public function store(Request $request){
        // dd($request -> all());
        $name = $request -> input('name');
        $brand = $request -> input('brand');
        $description = $request -> input('description');
        $price = $request -> input('price');
        // dd($request -> all(), $name, $brand, $description, $price);

        $product = new Product();
        $product -> name = $name;
        $product -> brand = $brand;
        $product -> description = $description;
        $product -> price = $price;
        dd($product);
        // $product -> save();

        // return redirect() -> route('home') ->with('message', 'Il tuo articolo e stato publicato');
    }
}
