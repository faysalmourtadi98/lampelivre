<?php
namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\product_request;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Console\Input\Input;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['role:administrator']);
    }
    public function index()
    
    {
        return view('dashboard.products.index',['products'=>Product::get(),'categorie'=>Product::with('categorie')->get()]);
    }
    public function create()
    {
        return view('dashboard.products.create',['categorie'=>Categorie::get()]);
    }
        /**
     * Display the specified resource.
        *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit=Product::findOrFail($id);
        return view('dashboard.products.show',['product'=>$produit],['categorie'=>$produit->categorie()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(product_request $request)
    {
      $produit=new Product();
      $produit->categorie_id=$request->input('categorie_name');
      $produit->product_name=$request->input('product_name');
      $produit->product_prix=$request->input('product_prix');
      $produit->product_devise=$request->input('product_devise');
      $produit->product_description=$request->input('product_description');
      $produit->product_auteur=$request->input('product_auteur');
      $produit->product_in_stock=$request->input('product_in_stock');
      $file=$request->file('product_image');
      $product_image=$file->getClientOriginalName(); 
      $produit->product_image=$product_image;
      $produit->save();
      $file->move(public_path('/img'), $product_image);
     return Redirect(Route('dashboard.products.index',['products'=>Product::get()]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.products.edit',['categorie'=>Categorie::all(),'product'=>Product::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(product_request $request, $id)
    {
        $produit=Product::findOrFail($id);
        $produit->categorie_id=$request->input('categorie_name');
        $produit->product_name=$request->input('product_name');
        $produit->product_prix=$request->input('product_prix');
        $produit->product_devise=$request->input('product_devise');
        $produit->product_description=$request->input('product_description');
        $produit->product_auteur=$request->input('product_auteur');
        $produit->product_in_stock=$request->input('product_in_stock');
            /*$file=$request->file('product_image');
            $product_image=$file->getClientOriginalName(); 
            $produit->product_image=$product_image;
            $file->move(public_path('/img'), $product_image);*/
            $produit->save();
       return Redirect(Route('dashboard.products.index',['products'=>Product::get()]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function delete($id)
    {
        try
        {
            $produit=Product::findOrFail($id);
            $produit->delete();
            return Redirect(Route('dashboard.products.index'));   
        }
        catch(ModelNotFoundException $err)
        {
            return Redirect(Route('dashboard.products.index'));
        }
    }
}
