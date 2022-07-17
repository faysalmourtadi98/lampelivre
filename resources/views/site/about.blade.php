@extends('layouts.site.layout')
@section('titre')
<title>About</title>
@endsection
@section('content')
<div class="row">
  <div class="col-1">
        <h1 class="titre2">Lampe de livre</h1>
        <p class="p1">La bibliothèque électronique "lampe de livre" est un ensemble de ressources et de services en ligne de l'université <i>FSA.</i><br>
         Grâce à cette bibliothèque vous pouvez lire des livres numériques, 
         écouter des livres audio, accéder aux ressources électroniques (bases de données, 
         dictionnaires, ouvrages scolaires, documentaire, encyclopédies, répertoires...) 
         et participer aux clubs virtuels de lecture.</p><br>
        <p>Cette sitographie mise à jour régulièrement est composée de trois parties :</p><br>
        <ul class="catalogue">
         <li>
           <b>Audio-livres:</b>
           <p> enregistrements du contenu d'un livre, lus à haute voix par un narrateur, téléchargeables en un format MP3 ou à écouter en streaming</p>
         </li>
         <li>
           <b>Livres-e:</b>
          <p>Livres-e: livres en format PPTX ou PDF sur les langages de programmations, les livres éducations... Pour emprunter, téléchargez et streaming.</p>
         </li>
         <li>
           <b>Ressources-e:</b>
           <p>Ressources-e: bases de données, encyclopédies, dictionnaires et presse numérique en consultation gratuite pour les adhérents du réseau des Bibliothèques de "lampe de livre"</p>
         </li>
       </ul>
       <div class="divBtn">
         <a href="{{Route('site.products.index')}}" class="btn">Explorez maintenant &#8594;</a>
       </div>
       <p class="condition">
          Rappelez-vous que pour consulter et télécharger ces documents, il faut avoir la  
          <a href=""><b>carte de la bibliothèque.</b></a> 
          <br>Si vous ne l'avez pas encore, alors 
          <a href="{{Route('register')}}"><b>inscrivez-vous</b></a> à notre bibliothèque.

         <br>Consultez les <a href=""><b>conditions d'utilisation</b></a> et bonne lecture!
       </p>
  </div>
   <div class="col-2">
     <ul type="none">
       <li><img src="{{ asset('img/bundle-of-books-r6w.png')}}"></li>
       <li><img src="{{ asset('img/booksRead.png')}}"></li>
       <li><img src="{{ asset('img/student.png')}}"></li>
     </ul>
   </div>
 </div> 
@endsection