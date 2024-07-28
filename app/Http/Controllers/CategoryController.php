<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('views_products.form_catego');
    }

    public function register(Request $request){
        Category::create([
            'id'=>$request->id,
            'name'=>$request->name
        ]);

        return redirect()->route('index')->with('msg', 'Created successfully');
    }
}
