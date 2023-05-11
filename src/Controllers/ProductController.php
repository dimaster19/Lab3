<?php

namespace Lab3\Controllers;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'count' => 'required',
            'desc' => 'required',
            'category_id'=> 'required',
            'delivery_id' => 'required',
        ]);

        Product::create($request->all());

        return true;
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'count' => 'required',
            'desc' => 'required',
            'category_id'=> 'required',
            'delivery_id' => 'required',

        ]);
        $product = Product::find($request->id);
        $product->update($request->all());
        return true;

    }


    public function destroy(Request $request)
    {
       $product = Product::find($request->id);
       $product->delete();
       return true;

    }
}
