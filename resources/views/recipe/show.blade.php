@extends('layouts.template')
@section('content')
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-recipes.jpg')}}" width="100%">
          <img src="{{url('/sliders/recipes.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
  <div class="container-fluid recipecontainer">
    <div class="col-md-6 col-md-offset-3 recipecol">
      <div class='col-md-12 recipediv' padding-top: 1em">
      <div>
        @if(\Auth::Check() && \Auth::user()->role == 'user' || \Auth::Check() && \Auth::user()->role == 'admin')
          <a  href="{{url('/recipe/'.$recipe->id.'/edit')}}"><button class="editbtn">Edit</button></a>
        @endif
        <h3 style="margin: 0 0 10px 0; padding-top: 1em">{{$recipe->title}}</h3>
        </div>
        <p>{!!$recipe->body!!}</p>
        <div style="background-color: #000; height: 1px; width:50%; margin-bottom: 1em"></div>
        @if($recipe->img != "")
        <a href="{{url('/recipe/'.$recipe->id.'/picture')}}"><img style="height: 5em" src="{{asset('storage/img/'.$recipe->img)}}"></a>
        @endif

        <p>{!!$recipe->credit!!}</p>
      </div>
    </div>
  </div>
@stop