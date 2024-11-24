<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SavedProductUser;
use App\Models\Shop;
use App\Models\Thumbnail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function saved()
    {
        $products = Auth::user()->savedProducts()->with('shop')->get();
        return view('saved-product', [
            'products' => $products,
        ]);
    }

    public function shopping()
    {
        $products = $this->baseQuery();
        $shops = Shop::all();
        return view('shopping', [
            'products' => $products,
            'shops' => $shops,
        ]);
    }

    public function cart()
    {
        $products = auth()->user()->toCart()->with('shop')->get();
        return view('cart', [
            'products' => $products,
        ]);
    }
}
