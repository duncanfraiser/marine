@extends('layouts.template')
@section('content')

<div class="container-fluid" style="margin-bottom: 2em" >


    <div class="col-md-6 col-md-offset-3 show">

      <img width="100%"  src="{{url('/img/parts.png')}}">
   
      <div class='col-md-12'>
      <center><h4>{{$parts->title}}</h4></center>
      <p>{!!$parts->body!!}</p>
      </div>


  </div>

@stop