@extends('layouts.template')
@section('content')
@include('_includes.carousel')
<div class="container-fluid homecontainer">

  <div class="row">
 @if(\Auth::check())

  @endif

    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{url('/img/groceries.png')}}">
      <div class='col-md-12 homediv'>
      <a class="homelinks" href="{{url('/grocery/'.$grocery->id)}}"><h3 class="homeh3"><center><strong>{{$grocery->title}}</strong></center></h3></a>
      <p>{!!$grocery->body!!}</p>
      <center><a href="{{url('/order')}}"><button class="smbtn">Start Shopping</button></a></center>
      </div>
    </div>

    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{url('/img/parts.png')}}">
      <div class='col-md-12 homediv'>
      <a class="homelinks" href="{{url('/parts/'.$parts->id)}}"><h3 class="homeh3"><center><strong>{{$parts->title}}</strong></center></h3></a>
      <p>{!!$parts->body!!}</p>
       <center><a href="{{url('/order')}}"><button class="smbtn">Start Shopping</button></a></center>
      </div>
    </div>


    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{url('/img/fueling.png')}}">
      <div class='col-md-12 homediv'>
      <a class="homelinks" href="{{url('/fleet/'.$fleet->id)}}"><h3 class="homeh3"><center><strong>{{$fleet->title}}</strong></center></h3></a>
      <p>{!!$fleet->body!!}</p>
      </div>
    </div>

    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{url('storage/img/'.$news->img)}}">
	    <div class='col-md-12 homediv'>
      <a class="homelinks" href="{{url('/news/'.$news->id)}}"><h3 class="homeh3"><center><strong>News</strong></center></h3></a>
       <h3 style="text-align: center; margin-top: 0"><strong><span style="font-size: 18px;">{{$news->title}}</span></strong></h3>
      {!!$news->excerpt!!}
      <center><a href="{{url('/news/'.$news->id)}}"><button class="smbtn">Read More</button></a></center>
      </div>
    </div>

  </div>

</div>
@stop