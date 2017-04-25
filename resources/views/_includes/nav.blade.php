

  {{-- navbar --}}
    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
      <div class="container" style="padding: 0px">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" style="background-color: #fff; margin-top: 65px" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" style="background-color: #000"></span>
            <span class="icon-bar" style="background-color: #000"></span>
            <span class="icon-bar" style="background-color: #000"></span>
          </button>
          <a class="navbar-brand scrollTo" href="{{url('/')}}"><img src="{{url('/img/EMIS-logo.png')}}"></a>
        </div>
        <div class="navbar-collapse collapse" id="navigation">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/order')}}">Order</a></li>
            <li><a href="{{url('/recipe')}}">Recipes</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/contact')}}">Contact</a></li>
            <li><a href="{{url('/river')}}">River Stages</a></li>



            @if (Auth::guest())
            @else
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Hello, {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{url('/news/create')}}">Add Article</a></li>
                      <li><a href="{{'/recipe/create'}}">Add Recipe</a></li>
                      <li><a href="{{'/submission'}}">Recipe Submissions</a></li>

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





            <li><a target="blank" href="https://www.facebook.com/ergonmarine/"><img height='25px' src="{{url('img/FB-icon.png')}}"></a></li>
          </ul>
        </div>
      </div>
    </div>