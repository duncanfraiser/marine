{{-- TOP NAV BAR START --}}
    <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="{{url('/img/logo3.png')}}"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">HOME</a></li>


        <li><a href="{{url('/order')}}">ORDER</a></li>
        <li><a href="{{url('/recipe')}}">RECIPES</a></li>
           <li><a href="{{url('/about')}}">ABOUT</a></li>
        <li><a href="{{url('/contact')}}">CONTACT</a></li>
                <li><a target="blank" href="http://forecast.weather.gov/product.php?site=NWS&issuedby=ORN&product=RVA&format=txt&version=1&glossary=0">RIVER STAGES</a></li>
     
  


                <!-- Right Side Of Navbar -->
           
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                        <li"><a href="{{ url('/login') }}"><img class="navimg" src="{{url('img/boatwheel.png')}}"></a></li>
{{--                         <li><a href="{{ url('/register') }}">Register</a></li> --}}
                    @else
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('/news/create')}}">Add Article</a></li>
                            <li><a href="{{'/recipe/create'}}">Add Redipe</a></li>

                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>


  </div>
 </nav>

    
{{-- TOP NAV BAR END --}}