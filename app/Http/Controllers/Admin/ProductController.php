<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'              => 'required|string|max:199',
            'code'              => 'required|string|max:199',
            'image'             => 'nullable|image|max:2048',
            'status'            => 'required|boolean',
            'price'             => 'required|numeric',
            'sale_price'        => 'nullable|numeric|lt:price',
            'length'            => 'nullable|string',
            'width'             => 'nullable|string',
            'wing_eyelids'      => 'nullable|string',
            'paint_technology'  => 'nullable|string',
            'key'               => 'nullable|string',
            'hinge'             => 'nullable|string',
            'design'            => 'nullable|string',
            'description'       => 'nullable|string',
            'category_id'       => 'required|exists:categories,id',
        ]);

        // slug tự sinh
        $data['slug'] = Str::slug($data['name']);

        // upload ảnh
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Thêm sản phẩm thành công');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name'              => 'required|string|max:199',
            'code'              => 'required|string|max:199|unique:product,code,' . $product->id,
            'image'             => 'nullable|image|max:2048',
            'status'            => 'required|boolean',
            'price'             => 'required|numeric',
            'sale_price'        => 'nullable|numeric|lt:price',
            'length'            => 'nullable|string',
            'width'             => 'nullable|string',
            'wing_eyelids'      => 'nullable|string',
            'paint_technology'  => 'nullable|string',
            'key'               => 'nullable|string',
            'hinge'             => 'nullable|string',
            'design'            => 'nullable|string',
            'description'       => 'nullable|string',
            'category_id'       => 'required|exists:categories,id',
        ]);

        $data['slug'] = Str::slug($data['name']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Cập nhật sản phẩm thành công');
    }
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Xóa sản phẩm thành công');
    }
  
}
