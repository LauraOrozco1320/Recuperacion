<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $category = Category ::orderBy('id', 'desc')->get();
        return view('categories.index', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category-> IVA = $request->IVA;
        $category-> description = $request->description;
     

        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category -> delete();
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
      
        $category-> IVA = $request->IVA;
        $category-> description = $request->description;
     

        $category->save();

        return redirect()->route('categories.index');
    }
}


