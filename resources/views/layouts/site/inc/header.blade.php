<div class="header">
        <div class="container cont">
           <div class="navBar">
              <div class="logo">
                   <a href="{{Route('site.home.index')}}"><img id="img1" src="{{ asset('img/logoBooks.png')}}"></a>
                   <a href="{{Route('site.home.index')}}"><img id="img2" src="{{ asset('img/logoLampe4.png')}}"></a>
                   
              </div>
              <nav>
               <ul id="MenuItemes">
                   <a href="{{Route('site.home.index')}}"><li>Accueil</li></a>
                   <a href="{{Route('site.products.index')}}"><li>Produits</li></a>
                   <a href="{{Route('about')}}"><li>À propos de</li></a>
                   @guest
                   <a href="{{Route('login')}}"><li>Compte</i></li></a>
                </ul>
              </nav>
             <a href="{{Route('site.paniers.index')}}" class="bag">
               @if(App\Models\Panier::where('user_id',0)->count())<i class="bi bi-bag-fill">
               @else<i class="bi bi-bag">@endif</i></a>@endguest
                   @auth
                   @if (Auth::user()->hasRole('administrator'))
                   <a href="{{Route('Dashboard')}}">
                   @endif
                   @if (Auth::user()->hasRole('user'))
                   <a href="{{Route('site.home.index')}}">
                   @endif
                   <li>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</li></a>
                   <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right"></i></a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                </ul>
              </nav>
             <a href="{{Route('site.paniers.index')}}" class="bag">
                @if(App\Models\Panier::where('user_id',Auth::user()->id)->count()>0)<i class="bi bi-bag-fill">
                @else<i class="bi bi-bag">@endif</i></a>@endauth
             <a href="#" class="menu-icon"><i class="bi bi-list" onclick="menutoggle()"></i></a>
           </div>
         </div>