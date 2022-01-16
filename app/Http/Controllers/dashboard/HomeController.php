<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:administrator']);
    }
    public function index()
    {
            return view('dashboard.dashboard',['users'=>User::all(),'products'=>Product::all(),'categories'=>Categorie::all()]);
    }

}
