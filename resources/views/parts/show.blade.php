@extends('layouts.template')
@section('content')

<div class="container-fluid" style="margin-bottom: 2em" >


    <div class="col-md-6 col-md-offset-3 show">

      <img width="100%"  src="{{url('storage/img/'.$parts->img)}}">

      <div class='col-md-12'>
      <center><h4>{{$parts->title}}</h4></center>
      <p>{!!$parts->body!!}</p><br/>
      <a href="{{url('/files/myParts.xls')}}"><button class="formbtn">Parts Order Form</button></a>
      </div>


  </div>

@stop