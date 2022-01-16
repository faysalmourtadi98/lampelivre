<?php
namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use App\Http\Requests\user_request;
use App\Models\Categorie;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;



class UsersController extends Controller
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
       return view('dashboard.users.index',['users'=>User::all(),'categories'=>Product::all(),'products'=>Categorie::all()]);
   }
    public function show($id)
   {
      return view('dashboard.users.show',['user'=>User::findOrFail($id)]);
   }
   public function edit($id)
   {
      return view('dashboard.users.edit',['user'=>User::findOrFail($id)]);
   }
   public function update(user_request $request,$id)
   {
      $user=User::findOrFail($id);
      $user->first_name=$request->input('nom');
      $user->last_name=$request->input('prenom');
      $user->email=$request->input('email');
      $user->password=Hash::make($request->input('password'));
      $user->date_naissance=$request->input('date_naiss');
      $user->save();
      $request->session()->flash("statut2",' Compte Modifiée Avec Succés');
      return redirect(Route('account.show',$user->id));
   }

   public function delete(Request $request,$id)
   {
      try{
         $user=User::findOrFail($id);
         if($id!=Auth::user()->id)
         {
         $user->delete();
         $request->session()->flash("statut3",' Compte Supprimer Avec Succés');
         }
         return redirect(Route('dashboard.users.index'));
      }
      catch(ModelNotFoundException $err){
         return redirect(Route('dashboard.users.index'));
      }
   }
}