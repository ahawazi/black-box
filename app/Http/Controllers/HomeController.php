<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $categories = Category::all();
        $products = Product::all();
        return view('welcome', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
