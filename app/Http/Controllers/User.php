<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    <?php

    namespace App\Http\Controllers;
    use App\Models\Category;
    use Illuminate\Http\Request;

    class CategoryController extends Controller
    {
        public function create_show()
        {
            return view('admin.user.create');
        }
        public function view()
        {
            $product = Category::all();
            return view('admin.user.view', compact('product'));
        }
        public function update_show($id)
        {
            return view('admin.user.update');
        }
        public function delete($id)
        {
        }
        public function pimage()
        {
        }


    }
