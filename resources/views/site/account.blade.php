@extends('layouts.user.layout')
@section('titre')
<title>Account</title>
@endsection
@section('content')
</div>  
<!---------Acount page----------->
<div class="acount-page"> 
    <div class="container">
        <div class="row">    
            <div class="col1">
                <img src="{{ asset('img/logoBooks.png')}}" width="100%">
            </div>
            <div class="col2">
                  <div class="form-container">
                      <div class="form-btn">
                          <span onclick="login()">Connexion</span>
                          <span onclick="register()">Inscription</span>
                          <hr id="Indicator">                                        
                     </div>
                      <form id="LoginForm">
                          <input type="email" placeholder="Email">
                          <input type="password" id="pwd" placeholder="Password">
                          <div id="eye">
                              <i class="bi bi-eye"></i>
                          </div>
                          <button type="submit" class="btn">Se connecter</button>
                          <a href="">Forgot password?</a>
                          <table  id="lignes" style="width: 0%;">
                            <tr>
                            <td><hr id="l1"></td>
                            <td><label id="ou">ou</label></td>
                            <td><hr id="l2"></td>
                            </tr>
                          </table>
                         <a href="#"><input id="fb" name="fb" type="button" value="Connectez-vous depuis Facebook"></a> 
                          <div>
                              <input type="checkbox" id="checkActive" name="active">
                              <label for="checkActive" id="garder">Garder ma session active</label>
                          </div>
                      </form>
                      <form id="RegForm" method="POST" action="{{Route('account.store')}}">
                        @csrf
                        <input type="text" id="nom" name="nom" placeholder="Nom"value="{{old('nom')}}">
                        <input type="text" id="prenom" name="prenom" placeholder="Prenom" value="{{old('prenom')}}">
                        <input type="email" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                        <input type="password"id="password" name="password" placeholder="Password">
                        <input type="date" id="date_naiss" name="date_naiss" min="1900-01-01" max="2021-12-31" value="{{old('date_naiss')}}">                 
                       <button type="submit" class="btn"">S'inscrire</button>        
                       <label id="check">Vous avez déjà un compte ?</label><br>
                       <a onclick="login()">connectez-vous</a>
                      </form>
                  </div>
            </div   >
        </div>
    </div>
</div>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    @endif
@endsection