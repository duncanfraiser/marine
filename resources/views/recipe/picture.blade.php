@extends('layouts.template')
@section('content')
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-recipes.jpg')}}" width="100%">
          <img src="{{url('/sliders/recipes.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
  <div class="container-fluid recipecontainer">
    <div class="col-md-6 col-md-offset-3 recipecol">
      <div class='col-md-12 recipediv' style="border:1px solid #696969; padding-top: 1em">
      <div>

        <h3 style="margin: 0 0 10px 0; padding-top: 1em">{{$recipe->title}}</h3>
        </div>
  

 
        <img style="width: 100%" src="{{asset('storage/img/'.$recipe->img)}}">



      </div>
    </div>
  </div>
@stop