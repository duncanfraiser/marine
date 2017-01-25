@extends('layouts.template')
@section('content')
     <img  src="{{url('/banners/recipes_banner.png')}}" alt="Ergon Marine Industrial Supply" width="100%">

<div class="container-fluid recipecontainer">
<div class="row">

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/banners/Appetizers.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em">Appetizers</h3>
      @foreach($Appetizers as $appetizer)
    	<a href="{{url('/recipe/'.$appetizer->id)}}">{{$appetizer->title}}</a><br/>
      @endforeach
      </div>
    </div>

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/banners/SoupsSalads.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Soups/Salads</center></h3>
      @foreach($SoupsSalads as $soupsalad)
    	<a href="{{url('/recipe/'.$soupsalad->id)}}">{{$soupsalad->title}}</a>
      @endforeach
      </div>
    </div>

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/banners/Entrees.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Entrees</center></h3>
      @foreach($Entrees as $entree)
    	<a href="{{url('/recipe/'.$entree->id)}}">{{$entree->title}}</a>
      @endforeach
      </div>
    </div>



</div>



<div class="row">

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/banners/sides.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Sides</center></h3>
      @foreach($Sides as $side)
    	<a href="{{url('/recipe/'.$side->id)}}">{{$side->title}}</a>
      @endforeach
      </div>
    </div>

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/banners/Desserts.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Desserts</center></h3>
      @foreach($Desserts as $dessert)
    	<a href="{{url('/recipe/'.$dessert->id)}}">{{$dessert->title}}</a>
      @endforeach
      </div>
    </div>

    <div class="col-md-4 text-center recipecol">
      <img class="recipeimg" src="{{url('/banners/PartyFoods.png')}}">
      <div class='col-md-12 recipediv'>
      <h3 style="margin: 0 0 10px 0; padding-top: 1em"><center>Party Foods</center></h3>
      @foreach($PartyFoods as $partyfood)
    	<a href="{{url('/recipe/'.$partyfood->id)}}">{{$partyfood->title}}</a>
      @endforeach
      </div>
    </div>



</div>




</div>
@stop