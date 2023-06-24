<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('dashboard.category.index', compact('categories'));
    }
    
    public function create() {
        return view('dashboard.category.create');
    }

    public function store(Request $request) {
        // dd($request->name);
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index');
    }

    public function edit($id) {
        $category = Category::where('id', $id)->first();
        return view('dashboard.category.edit', compact('category'));
    }

    public function update($id, Request $request) {
        $category = Category::where('id', $id)->first();

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index');
    }

    public function destroy($id) {
        $category = Category::where('id', $id)->first();
        $category->delete();

        return redirect()->route('category.index');
    }
}
