<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // Load data for homepage
        $categories = Category::all();
        $products = Product::orderBy('created_at', 'desc')->take(8)->get();
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();

        return view('client.home', compact('categories', 'products', 'posts'));
    }
    public function about()
    {
        return view('client.about');
    }
    public function product()
    {
        return view('client.product.product');
    }
    public function productDetail()
    {
        return view('client.product.product_detail');
    }
    public function post()
    {
        return view('client.post.post');
    }
    public function postDetail()
    {
        return view('client.post.postDetail');
    }
}
