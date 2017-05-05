@extends('layouts.template')
@section('content')

<div class="container-fluid" style="margin-bottom: 2em" >


    <div class="col-md-6 col-md-offset-3 show">
	<img width="100%"  src="{{url('storage/img/'.$grocery->img)}}">
         
      <div class='col-md-12'>
      <center><h4>{{$grocery->title}}</h4></center>
      <p>{!!$grocery->body!!}</p><br/>
      <a href="{{url('/files/myOrder.xls')}}"><button class="formbtn">Grocery Order Form</button></a>

      </div>


  </div>

@stop