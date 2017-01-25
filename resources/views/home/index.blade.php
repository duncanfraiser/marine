@extends('layouts.template')
@section('content')
@include('_includes.carousel')
<div class="container-fluid homecontainer">

  <div class="row">

    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{url('/img/groceries.png')}}">
      <div class='col-md-12 homediv'>
      <h3 class="homeh3"><center><strong>{{$grocery->title}}</strong></center></h3>
      <p>{!!$grocery->body!!}</p>
      </div>
    </div>

    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{url('/img/parts.png')}}">
      <div class='col-md-12 homediv'>
      <h3 class="homeh3"><center><strong>{{$parts->title}}</strong></center></h3>
      <p>{!!$parts->body!!}</p>
      </div>
    </div>


    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{url('/img/fueling.png')}}">
      <div class='col-md-12 homediv'>
      <h3 class="homeh3"><center><strong>{{$fleet->title}}</strong></center></h3>
      <p>{!!$fleet->body!!}</p>
      </div>
    </div>

    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{url('/img/news.png')}}">
	    <div class='col-md-12 homediv'>
      <h3 class="homeh3"><center><strong>{{$news->title}}</strong></center></h3>
      <p>{!!$news->body!!}</p>
      </div>
    </div>

  </div>

</div>
@stop