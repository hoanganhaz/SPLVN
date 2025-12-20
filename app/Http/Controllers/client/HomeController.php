<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home');
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