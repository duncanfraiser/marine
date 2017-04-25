@extends('layouts.template')
@section('content')
<div class="container-fluid" style="background-color: #E5E5E5">
  <div id="myCarousel" class="carousel slide banners" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-recipes.jpg')}}" width="100%">
          <img src="{{url('/sliders/recipes.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
      </div>
    </div>
  </div>
<div class="container-fluid" style="background-color: #E5E5E5">
  <div class="container" style="margin-top: 20px; margin-bottom: 20px; padding: 0px">

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/img/Appetizers.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em">Appetizers</h3>
      @foreach($Appetizers as $appetizer)
    	<a href="{{url('/recipe/'.$appetizer->id)}}">{{$appetizer->title}}</a><br/>
      @endforeach
      </div>
    </div>

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/img/SoupsSalads.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Soups/Salads</center></h3>
      @foreach($SoupsSalads as $soupsalad)
    	<a href="{{url('/recipe/'.$soupsalad->id)}}">{{$soupsalad->title}}</a><br/>
      @endforeach
      </div>
    </div>

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/img/Entrees.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Entrees</center></h3>
      @foreach($Entrees as $entree)
    	<a href="{{url('/recipe/'.$entree->id)}}">{{$entree->title}}</a><br/>
      @endforeach
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" style="background-color: #E5E5E5">
  <div class="container" style="margin-top: 20px; margin-bottom: 20px; padding: 0px">

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/img/Sides.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Sides</center></h3>
      @foreach($Sides as $side)
      <a href="{{url('/recipe/'.$side->id)}}">{{$side->title}}</a><br/>
      @endforeach
      </div>
    </div>

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/img/Desserts.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Desserts</center></h3>
      @foreach($Desserts as $dessert)
      <a href="{{url('/recipe/'.$dessert->id)}}">{{$dessert->title}}</a><br/>
      @endforeach
      </div>
    </div>

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/img/PartyFoods.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Party Foods</center></h3>
      @foreach($PartyFoods as $partyfood)
      <a href="{{url('/recipe/'.$partyfood->id)}}">{{$partyfood->title}}</a><br/>
      @endforeach
      </div>
    </div>
  </div>
</div>



<div class="submissiondiv text-center"> <p style="padding: .5em; margin-bottom:0px; font-size: 1.25em" ><a href="{{ URL('/submission/create') }}"><button class="subbtn">Click here</button></a> to submit your favorite recipe to be featured on our site.</p></div>




</div>
@stop