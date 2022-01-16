<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\categorie_request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoriesController extends Controller
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
        return view('dashboard.categories.index',['categories'=>Categorie::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->flash('message','Do you want to create this categorie ?');
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categorie_request $request)
    {
        $categorie=new Categorie();
        $categorie->categorie_name=$request->input('categorie_name');
        $categorie->categorie_description=$request->input('categorie_description');
        $categorie->save();
        return Redirect(Route('dashboard.categories.index',['categories'=>Categorie::get()]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie=Categorie::findOrFail($id);
        return view('dashboard.categories.show',['categorie'=>$categorie,'products'=>$categorie->product()->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.categories.edit',['categorie'=>Categorie::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(categorie_request $request, $id)
    {
        $categorie=Categorie::findOrFail($id);
        $categorie->categorie_name=$request->input('categorie_name');
        $categorie->categorie_description=$request->input('categorie_description');
        $categorie->save();
        return Redirect(Route('dashboard.categories.index',['categories'=>Categorie::get()]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try{
            $test=Categorie::whereDoesntHave('product')->findOrFail($id);
            $test->delete();
            return Redirect(Route('dashboard.categories.index',['categories'=>Categorie::get()]));
        }
        catch(ModelNotFoundException $err){
            return Redirect(Route('dashboard.categories.index',['categories'=>Categorie::get()]));
        }
    }
}
