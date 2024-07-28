<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('views_products.form_pro', ['categories'=>$category]);
    }

    //Filtro->all
    public function all(){
        $products = Product::all();
        return view('index', compact('products'));
    }


    //Create
    public function create(Request $request){
        $request->validate([
            'uri'=>['image']
        ]);

       
        $file = $request->file('uri');
        $filaName = time().'.'.$file->extension();
        $file->storeAs('public/images', $filaName);

        Product::create([
            'category_id'=>$request->category_id,
            'model'=>$request->model,
            'name'=>$request->name,
            'description'=>$request->description,
            'stock'=>$request->stock,
            'price'=>$request->price,
            'uri'=>$filaName
        ]);

        return redirect()->route('index')->with('messsage','created successfully');
    }

    //Laptos
    public function getLaptos(){
        $products = Product::where('category_id','=',1)->get();
        return view('views_products.laptos', compact('products'));
    }

    //Mouses
    public function getMouses(){
        $products = Product::where('category_id','=',2)->get();
        return view('views_products.mouses', compact('products'));
    }

    //Keyboards
    public function getKeyboards(){
        $products = Product::where('category_id','=',3)->get();
        return view('views_products.keyboards', compact('products'));
    }
}
