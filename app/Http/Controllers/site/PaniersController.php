<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Panier;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaniersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()) $id=Auth::user()->id;
        else $id=0;
        return view("site.cart.index",['panier'=>Panier::with('product')->where('user_id',$id)->get(),'panier_prix_total'=>Panier::where('user_id',$id)->sum('product_prix_total'),'panier_id'=>Panier::where('user_id',$id)->take(1)->get()]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        if(Auth::user()) {$user_id=Auth::user()->id;}
        else {$user_id=0;}
            $product_existe_panier=Panier::with('product')->where('user_id',$user_id)->where('product_id',$id);
            $product_prix=Product::findOrFail($id)->product_prix;
            if($product_existe_panier->count()==1)
            {
                $nb_products=$product_existe_panier->first()->nb_products+$request->input('product_number');
                $product_prix_total=$nb_products*$product_prix;
                $product_existe_panier->update(['nb_products'=>$nb_products]);
                $product_existe_panier->update(['product_prix_total'=>$product_prix_total]);
            }
            else
            {
                $id_panier_count=Panier::where('user_id',$user_id)->count();
                $panier= new Panier();
                if($id_panier_count==0)
                {
                    $panier->product_id=$id;
                    $panier->user_id=$user_id;
                    $panier->nb_products=$request->input('product_number');
                    $panier->product_prix_total=$panier->nb_products*$product_prix;
                    $panier->save();
                }
                else{
                    $id_panier=Panier::where('user_id',$user_id)->first()->id;
                    $panier->id=$id_panier;
                    $panier->product_id=$id;
                    $panier->user_id=$user_id;
                    $panier->nb_products=$request->input('product_number');
                    $panier->product_prix_total=$panier->nb_products*$product_prix;
                    $panier->save();
                }

            }
            return Redirect(Route("site.paniers.index"));
            $request->session()->flash('message','Do you want to create this categorie ?');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,$user,$product)
    {
        $panier=Panier::where('id',$id)->where('user_id',$user)->where('product_id',$product);
        $panier->delete();
        return redirect(Route('site.paniers.index'));
    }
}