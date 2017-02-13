@extends('layouts.template')
@section('content')
@include('_includes.carousel')
<div class="container-fluid homecontainer">

  <div class="row">
    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{asset('storage/img/'.$grocery->img)}}">
      <div class='col-md-12 homediv'>
        <div id="hometitle">
          <a class="homelinks" href="{{url('/grocery/'.$grocery->id)}}"><h3 class="homeh3"><strong>{{$grocery->title}}</strong> </h3></a>
        </div>
        @if(\Auth::check() && \Auth::user()->role == "admin")
          <div id="homeedit">
            <a href="{{url('/grocery/'.$grocery->id.'/edit')}}"><button class="editbtn">Edit</button></a>
          </div>
        @endif
        <p>{!!$grocery->body!!}</p>
        <center><a href="{{url('/order')}}"><button class="smbtn">Start Shopping</button></a></center>
      </div>
    </div>
    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{asset('storage/img/'.$parts->img)}}">
      <div class='col-md-12 homediv'>
        <div id="hometitle">
          <a class="homelinks" href="{{url('/parts/'.$parts->id)}}"><h3 class="homeh3"><center><strong>{{$parts->title}}</strong></center></h3></a>
        </div>
        @if(\Auth::check() && \Auth::user()->role == "admin")
          <div id="homeedit">
            <a href="{{url('/parts/'.$parts->id.'/edit')}}"><button class="editbtn">Edit</button></a>
          </div>
        @endif
        <p>{!!$parts->body!!}</p>
        <center><a href="{{url('/order')}}"><button class="smbtn">Start Shopping</button></a></center>
      </div>
    </div>
    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{asset('storage/img/'.$fleet->img)}}">
      <div class='col-md-12 homediv'>
        <div id="hometitle">
          <a class="homelinks" href="{{url('/fleet/'.$fleet->id)}}"><h3 class="homeh3"><center><strong>{{$fleet->title}}</strong></center></h3></a>
        </div>
        @if(\Auth::check() && \Auth::user()->role == "admin")
          <div id="homeedit">
            <a href="{{url('/fleet/'.$fleet->id.'/edit')}}"><button class="editbtn">Edit</button></a>
          </div>
        @endif
        <p>{!!$fleet->body!!}</p>
      </div>
    </div>
    <div class="col-md-3 homecol">
      <img class="homeimg" src="{{asset('storage/img/'.$news->img)}}">
      <div class='col-md-12 homediv'>
        <div id="hometitle">
           <a class="homelinks" href="{{url('/news/'.$news->id)}}"><h3 class="homeh3"><center><strong>News</strong></center></h3></a>
       <h3 style="text-align: center; margin-top: 0"><strong><span style="font-size: 18px;">{{$news->title}}</span></strong></h3>
      {!!$news->excerpt!!}
            <center><a href="{{url('/news/'.$news->id)}}"><button class="smbtn">Read More</button></a></center>
        </div>
        @if(\Auth::check() && \Auth::user()->role == "admin" || \Auth::check() && \Auth::user()->role == "user")
          <div id="homeedit">
            <a href="{{url('/news/'.$news->id.'/edit')}}"><button class="editbtn">Edit</button></a>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@stop