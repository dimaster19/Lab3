<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return $categories;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Category::create($request->all());

        return true;
    }

    public function update(Request $request)
    {
        Log::debug($request);
        $request->validate([
            'name' => 'required',
            'id' => 'required'
        ]);
        $category = Category::find($request->id);
        $category->update($request->all());
        return true;
    }


    public function destroy(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        return true;
    }
}
