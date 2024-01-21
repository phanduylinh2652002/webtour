<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Model\Category;
use Illuminate\Routing\Route;

class CategoryController extends Controller
{
    //
    public function index(){
        $query = Category::all();
        return view('admin.category.index', compact('query'));
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(CategoryRequest $request){
        Category::create($request->all());
        return redirect()->route('category.index');
    }
    public function edit(Category $category){
        return view('admin.category.edit', compact('category'));
    }
    public function update(Category $category, CategoryRequest $request){
        $category->update($request->all());
        return redirect()->route('category.index', compact('category'));
    }
    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('category.index');
    }
}
