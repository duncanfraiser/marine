@extends('layouts.template')
@section('content')
     <img  src="{{url('/banners/recipes_banner.png')}}" alt="Ergon Marine Industrial Supply" width="100%">
     <div class="container-fluid recipecontainer">

    <div class="col-md-6 col-md-offset-3 recipecol">
    
      <div class='col-md-12 recipediv' style="border-style:solid;">
      <h3 style="margin: 0 0 10px 0; padding-top: 1em">{{$recipe->title}}</h3>
      <p>{!!$recipe->body!!}</p>
      </div>
    </div>




     </div>

@stop