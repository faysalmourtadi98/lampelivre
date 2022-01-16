<?php

namespace App\Http\Controllers\site;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\URL;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.products.index',['products'=>Product::orderBy('categorie_id','asc')->get()]);
    }
        /**
     * Display the specified resource.
        *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product_categorie_id=Product::find($id)->categorie_id;
        $random_product_categorie=Product::inRandomOrder()->get()->where('categorie_id',$product_categorie_id)->where('id','<>',$id );
        return view('site.products.show',['product'=>Product::find($id),'random_products'=>$random_product_categorie]);
    }
}
