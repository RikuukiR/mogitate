<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('register');
    }

    public function store(ProductRequest $request)
    {

        $content = $request->validated();
        $content = $request->only(['name', 'price', 'season', 'description' ,'img']);
        Product::create($content);
        return view('register');
    }

    public function product()
    {
        return view('product');
    }
}
