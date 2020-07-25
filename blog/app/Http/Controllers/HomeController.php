<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::all()->toArray();
        return view('home', ['product'] => $product]);
    }
    public function mypage()
    {
        $user = User::all()->toArray();
        return view('user', ['user' => $user]);
    }
}
