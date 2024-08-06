<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{   

    public function all(){
        $products = Product::all();
        return view('user.admin', compact('products'));
    }

    /* Register */
    public function register(Request $request){
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('login');
    }

    /* Login */
    public function authenticate(Request $request){
        
        $crendentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        if(Auth::attempt($crendentials)){
            $request->session()->regenerate();
            return redirect()->route('index');
        }

        //The crendentials incorrects
        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.'
        ])->onlyInput('email');
    }

    //Logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
