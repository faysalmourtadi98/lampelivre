<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.home.index',['products'=>Product::inRandomOrder()->take(4)->get(),'offre'=>Product::inRandomOrder()->take(1)->get()]);
    }
}
