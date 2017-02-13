@extends('layouts.template')
@section('content')
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-recipes.jpg')}}" width="100%">
          <img src="{{url('/sliders/recipes.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>

<div class="container-fluid recipecontainer">
<div class="row">

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



<div class="row">

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
@stop