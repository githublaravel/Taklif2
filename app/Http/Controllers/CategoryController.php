<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create_show()
    {
        return view('admin.categroy.create');
    }
    public function view()
    {
        $product = Category::all();
        return view('admin.categroy.view', compact('product'));
    }
    public function update_show($id)
    {
        return view('admin.categroy.update');
    }
    public function delete($id)
    {
    }
    public function pimage()
    {
    }
    public function show_cats()
    {
        $cats = Category::all();
        return view('user.categories', compact('cats'));
    }
}
