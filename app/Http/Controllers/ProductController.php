<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;
use app\Models\Category;

class ProductController extends Controller
{
    public function create_show()
    {
        return view('admin.product.create');
    }
    public function view()
    {
        $prods = Product::all();
        foreach ($prods as $prod) {
            $cat = Category::where('id', $prod->category_id)->first();
            $prod['cat_name'] = $cat->name;
        }
        return view('admin.product.view', compact('prods'));
    }
    public function update_show($id)
    {
        return view('admin.product.update');
    }
    public function delete($id)
    {
        $prods = Product::all();
        Product::where('id',$id)->delete();
        return redirect('/admin/product/');
    }
    public function pimage()
    {
    }
    public function show_prod($id)
    {
        $prod = Product::where('id', $id)->first();
        $prods = Product::where('category_id', $prod->category_id)->get();
        return view('user.product', compact('prod', 'prods'));
    }
    public function show_prods($cat_id)
    {
        $prods = Product::where('category_id', $cat_id)->get();
        return view('user.products', compact('prods'));
    }
}
