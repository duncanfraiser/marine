@extends('layouts.template')
@section('content')

<div class="container-fluid" style="margin-bottom: 2em" >


    <div class="col-md-6 col-md-offset-3 show">

      <img width="100%"  src="{{url('/img/fueling.png')}}">
   
      <div class='col-md-12'>
      <center><h4>{{$fleet->title}}</h4></center>
      <p>{!!$fleet->body!!}</p>
      </div>


  </div>

@stop