<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!auth()->check()) {
            return redirect('/login');
        }
        $categories = Category::all();
        $tags = Tag::all();
        return view('product.create', ['categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('public/images');
            $product->image = env('APP_URL').str_replace('public/', '/upload/', $product->image);
        }
        
        $product->year = $request->year;
        $product->category_id = $request->category_id;
        $product->save();
        $product->tags()->attach($request->tags);
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('product.edit', ['product'=>$product, 'categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('public/images');
        }
        $product->year = $request->year;
        $product->tags()->sync($request->tags);
        $product->save();
        return redirect('/products');
    }

    // public function delete(string $id)
    // {
    //     $product = Product::find($id);
    //     return view('product.delete', ['product' => $product]);
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
