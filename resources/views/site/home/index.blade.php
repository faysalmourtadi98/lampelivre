  @extends('layouts.site.layout')
  @section('titre')
      <title>Accueil</title>
  @endsection
  @section('content')
  <div class="row">
    <div class="col-1">
          <a href="{{Route('about')}}"><img src="{{asset('/img/logoLampe4.png')}}"></a>
      <div id="lampeLivre"> 
         <h2> Bienvenue à "Lampe de livre"</h2>
         <p class="p1"> 
           la plus grand bibliothèque électronique en ligne au Maroc.
          </p><br>
         <div class="divBtn">
           <a href="{{Route('site.products.index')}}" class="btn">Explorez maintenant &#8594;</a>
         </div>
         <p class="condition">
            Rappelez-vous que pour consulter et télécharger ces documents, il faut avoir la  
            <a href=""><b>carte de la bibliothèque.</b></a> 
            <br>Si vous ne l'avez pas encore, alors 
            <a href=""><b>inscrivez-vous</b></a> à notre bibliothèque.
           <br>Consultez les <a href=""><b>conditions d'utilisation</b></a> et bonne lecture!
         </p>
       </div>
    </div>
     <div class="col-2 colIndex2">
      <img src="{{asset('/img/logoBooks.png')}}">
     </div>
   </div>
  </div>
   <!----------------featured products------------------>
   <div class="smallcontainer">
     <h2 class="title">Produits populaires</h2>
     <div class="row">
      @foreach ($products as $product)
      <div class="col-4">
        <a href="{{Route('site.products.show',$product->id)}}"><img src="{{asset('/img/'.$product->product_image)}}" height="360"></a>
        <a href="{{Route('site.products.show',$product->id)}}">
         <div class="product_name">
           <h4>{{$product->product_name}}</h4></a>
         </div>
        <div class="rating">
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-fill"></i>
         <i class="bi bi-star-half"></i>
        </div>
        <p>{{"$product->product_prix $product->product_devise"}}</p> 
       </div> 
       @endforeach
    </div>
   </div>
   <!----------------offers------------------>
  <div class="offer">
    <div class="smallcontainer">
      @foreach ($offre as $tab)
      <div class="row">
        <div class="col-2">
          <a href="{{Route('site.products.show',$tab->id)}}"><img src="{{asset('/img/'.$tab->product_image)}}" class="offer-img" style="padding-top: 150px;"></a>
          <div class="rating"  style="margin-top: 0px;">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
            <p>${{$tab->product_prix}} <em>$30,00</em></p>
            <p class="btnn">offre limitée </p>
           </div>
        </div>
        <div class="col-1">
          <h3>Exclusivement disponible sur <i>"Lampe scientifique"</i> </h3>
          <h1>{{$tab->product_name}}</h1>
          <div class="collection">
          <small>
            {{$tab->product_description}}
          </small><br><br>
          <a href="{{Route('site.products.show',$tab->id)}}" class="btn">Acheter maintenant &#8594;</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-----Reviews Client----->
   <div class="review">
     <div class="smallcontainer">
       <div class="row">
         <div class="col-3">
          <i class="bi bi-chat-left-quote-fill"></i>
           <p>
            Tant de livres d’auto-assistance sont «tout gong et pas de dîner»,
            mais j’ai trouvé que ce livre était une exception rafraîchissante.
           </p>
           <div class="rating">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
           </div>
           <img src="{{asset('/img/user-1.png')}}">
           <h3>Noura Fathi</h3>
         </div>
       <div class="col-3">
        <i class="bi bi-chat-left-quote-fill"></i>
         <p>
          Je ne pouvais pas mettre celui-ci par terre et j'en ai tiré beaucoup de sagesse. 
          J'appellerais presque ce livre la perspicacité personnelle de Drucker sur la façon de gérer votre vie.
         </p>
         <div class="rating">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i> 
          <i class="bi bi-star-half"></i> 
         </div>
         <img src="{{asset('/img/user-2.png')}}">
         <h3>Mhand Maous</h3>
       </div>
      <div class="col-3">
        <i class="bi bi-chat-left-quote-fill"></i>
         <p>
          If you asked me to recommend to you the single best ‘success’ book I have ever read,
          my answer would be a very definite ‘Personal Growth and Wealth’.
         </p>
         <div class="rating">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i> 
          <i class="bi bi-star"></i> 
         </div>
         <img src="{{asset('/img/user-3.png')}}">
         <h3>Souad Cisse</h3>
       </div>
     </div>
     </div>
   </div>
  @endsection