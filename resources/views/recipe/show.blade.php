@extends('layouts.template')
@section('content')
  <img  src="{{url('/banners/recipes_banner.png')}}" alt="Ergon Marine Industrial Supply" width="100%">
  <div class="container-fluid recipecontainer">
    <div class="col-md-6 col-md-offset-3 recipecol">
      <div class='col-md-12 recipediv' style="border:1px solid #696969;">
      <h3 style="margin: 0 0 10px 0; padding-top: 1em">{{$recipe->title}}</h3>
            @if(\Auth::Check())
      <a  href="{{url('/recipe/'.$recipe->id.'/edit')}}"><button class="smbtn">Edit</button></a>
      @endif
      <p>{!!$recipe->body!!}</p>
      </div>
    </div>
  </div>
@stop