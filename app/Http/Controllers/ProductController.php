<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // dd(request());
        return view('products.index',[
             'products' => Product::get()->all()
        ]);
    }

    public function issue(Product $product){
        return view('products.issue',[
            'product' => $product
        ]);
    }    
}
