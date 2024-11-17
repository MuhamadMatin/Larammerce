<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use App\Models\Thumbnail;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    private function baseQuery()
    {
        return Product::with('riview', 'shop');
    }

    public function index()
    {
        $products = $this->baseQuery()->clone()->limit(20)->orderByDesc('id')->get();
        $unders = $this->baseQuery()->clone()->where('price', '<', 50000)->limit(15)->orderByDesc('id')->get();
        $thumbnails = Thumbnail::all();
        return view('index', [
            'products' => $products,
            'unders' => $unders,
            'thumbnails' => $thumbnails,
        ]);
    }

    public function show(Shop $shop, Product $product)
    {
        $product->load('shop', 'riview', 'images');
        return view('show', [
            'product' => $product
        ]);
    }

    public function shop(Shop $shop)
    {
        $shop->load('products');
        return view('shop', [
            'shop' => $shop,
        ]);
    }

    public function shopping()
    {
        $products = $this->baseQuery();
        return view('shopping', [
            'products' => $products
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
