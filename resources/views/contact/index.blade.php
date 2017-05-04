@extends('layouts.template')
@section('content')
<div class="container-fluid" style="background-color:#E5E5E5 " >
<div class="col-md-6 col-md-offset-3 contactcol">
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
      <div class="col-md-12">
        <h4>Ergon Marine & Industrial Supply, Inc.</h4>
<p>100 Lee Street<br/>
Vicksburg MS 39180-5070<br/>
Phone 601-636-6552<br/>
Fax 601-636-6173</p>
</div>
  </div>

</div>
</div>
@stop