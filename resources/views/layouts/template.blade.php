<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?1">

      @include('_includes.froala.froala-css')

        <title>EMIS</title>
    </head>
    <body>


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
        <li><a href="#">CONTACT</a></li>
     
  
   
{{-- TOP NAV BAR END --}}

                <!-- Right Side Of Navbar -->
           
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                        <li><a href="{{ url('/login') }}">LOGIN</a></li>
{{--                         <li><a href="{{ url('/register') }}">Register</a></li> --}}
                    @else
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li><a href="">???</a></li>

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

     @yield('content')








{{-- FOOTER START --}}
<nav class="navbar navbar-inverse navbar-fixed-bottom foots">


<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 main pull-right">
<a class="footimg navbar-brand" href="#"><img src="{{url('/img/fb.png')}}"></a>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
<div class="footscopy lefttext">
&copy; 2017 Ergon Marine & Industrial Supply, Inc. All Rights Reserved. California Transparency in Supply Chains Act
</div>
</div>
</div>

</nav>
{{-- FOOTER STop --}}



    @yield('scripts')

    </body>
</html>