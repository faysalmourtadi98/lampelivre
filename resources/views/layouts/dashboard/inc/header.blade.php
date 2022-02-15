<header>
    <div class="header-content">
        <div class="side-head">
        <img src="{{asset('/img/logo.jpg')}}" alt="">
        </div>
        <div class="header-nav">
            <ul>
                <li><a href="{{ route('site.home.index') }}"><i class="fas fa-home"></i>&nbsp;Home</a></li>
		<li><i class="fa fa-id-badge" ></i>&nbsp;{{Auth::user()->first_name." ".Auth::user()->last_name}}</li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt" ></i>&nbsp;Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
            </ul>
        </div>
    </div>
</header>