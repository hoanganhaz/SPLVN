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
        $categories = Category::withCount('products')->take(5)
            ->get();
        $products = Product::orderBy('created_at', 'desc')->take(8)->get();
       
           $saleProducts = Product::where('status', 1)
            ->whereNotNull('sale_price')
            ->where('sale_price', '>', 0)
            ->whereColumn('sale_price', '<', 'price')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

            // Bài viết - Lấy bài featured (mới nhất) và 2 bài khác
        $featuredPost = Post::orderBy('created_at', 'desc')->first();
        
        $posts = Post::when($featuredPost, function($query) use ($featuredPost) {
                return $query->where('id', '!=', $featuredPost->id);
            })
            ->orderBy('created_at', 'desc')
            ->take(2)
            ->get();

        return view('client.home', compact('categories', 'products', 'posts','saleProducts','featuredPost'));
    }
    public function about()
    {
        return view('client.about');
    }
    public function product($CategoryID = null)
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
    public function randomProducts()
    {
        // Lấy 8 sản phẩm ngẫu nhiên từ database
        $products = Product::inRandomOrder()
                          ->limit(8)
                          ->get();
        
        return view('client.product.product', compact('products'));
    }
    public function productDetail($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('client.product.product_detail', compact('product'));
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
