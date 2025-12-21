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
    public function product($CategoryID=null)
    {
        if ($CategoryID) {
            $products = Product::where('category_id', $CategoryID)
                ->latest()
                ->paginate(12);
        } else {
            $products = Product::latest()->paginate(12);
        }    
        return view('client.product.product', compact('products'));
    }
    public function productDetail($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('client.product.product_detail',compact('product'));
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
