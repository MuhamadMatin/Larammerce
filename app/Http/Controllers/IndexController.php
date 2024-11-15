<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Thumbnail;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $baseQuery = Product::with('riview', 'shop');
        $products = $baseQuery->clone()->limit(20)->orderByDesc('id')->get();
        $unders = $baseQuery->clone()->where('price', '<', 50000)->limit(15)->orderByDesc('id')->get();
        $thumbnails = Thumbnail::all();
        return view('index', [
            'products' => $products,
            'unders' => $unders,
            'thumbnails' => $thumbnails,
        ]);
    }

    public function show($shop, Product $product)
    {
        $product->load('shop', 'riview', 'images');
        return view('show', [
            'product' => $product
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
