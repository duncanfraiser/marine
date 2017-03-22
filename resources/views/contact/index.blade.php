@extends('layouts.template')
@section('content')
<div class="container-fluid ordercontainer" >
<div class="col-md-8 col-md-offset-2 contactcol">
  <div class='col-md-12 orderdiv' style="padding-bottom: 5em">
      <h2>Contact Us</h2>
      {{Form::open(['method' => 'POST', 'action' => 'ContactController@store'])}}
       {{ csrf_field() }}
      <div class="form-group">
        {{Form::label('name', 'Name:')}}
        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}
      </div>  
      <div class="form-group">
        {{Form::label('email', 'Email:')}}
        {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
      </div>  
      <div class="form-group">
        {{Form::label('subject', 'Subject:')}}
        {{Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Enter Subject'])}}
      </div>  
      <div class="form-group">
        {{Form::label('body', 'Message:')}}
        {{Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Message'])}}
      </div>
      <div class="form-group" style="float: right">
        <button class="formbtn">Cancel<a href="/"></a></button>
        {{Form::submit('Enter', ['class' => 'formbtn'])}}
      </div>      
      {{Form::close()}}
  </div>
</div>
</div>
@stop