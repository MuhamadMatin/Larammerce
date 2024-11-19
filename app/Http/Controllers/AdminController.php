<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Thumbnail;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::select('id')->count();
        $shops = Shop::select('id')->count();
        $users = User::select('id')->count();
        $categories = Category::select('id')->count();
        $thumbnails = Thumbnail::select('id')->count();
        return view('admin.index', [
            'products' => $products,
            'shops' => $shops,
            'users' => $users,
            'categories' => $categories,
            'thumbnails' => $thumbnails,
        ]);
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.product.index', [
            'products' => $products,
        ]);
    }

    public function shops()
    {
        $shops = Shop::all();
        return view('admin.shop.index', [
            'shops' => $shops,
        ]);
    }

    public function users()
    {
        $users = User::all();
        return view('admin.user.index', [
            'users' => $users,
        ]);
    }

    public function thumbnail()
    {
        $thumbnails = Thumbnail::all();
        return view('admin.thumbnail.index', [
            'thumbnails' => $thumbnails,
        ]);
    }
}
