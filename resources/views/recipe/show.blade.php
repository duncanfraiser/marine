@extends('layouts.template')
@section('content')
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-recipes.jpg')}}" width="100%">
          <img src="{{url('/sliders/recipes.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
  <div class="container-fluid recipecontainer">
    <div class="col-md-6 col-md-offset-3 recipecol">
      <div class='col-md-12 recipediv' style="border:1px solid #696969;">
        <h3 style="margin: 0 0 10px 0; padding-top: 1em">{{$recipe->title}}</h3>
        @if(\Auth::Check())
          <a  href="{{url('/recipe/'.$recipe->id.'/edit')}}"><button class="smbtn">Edit</button></a>
        @endif
        <p>{!!$recipe->body!!}</p>
        @if($recipe->img != "")
        <img style="height: 5em" src="{{asset('storage/img/'.$recipe->img)}}">
        @endif
        <p>{!!$recipe->credit!!}</p>
      </div>
    </div>
  </div>
@stop