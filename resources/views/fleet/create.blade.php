@extends('layouts.template')
@section('content')
  <div class="container-fluid formcontainer">
    <div class="col-md-8 col-md-offset-2">
      <div class='col-md-12 orderdiv' style="padding-bottom: 5em">
		<h2>Create Fueling/Fleeting Content</h2>
        {{Form::open(['method' => 'POST', 'action' => 'FleetController@store'])}}
	      <div class="form-group">
	        {{Form::label('header', 'Header:')}}
	        {{Form::text('header', null, ['class' => 'form-control', 'placeholder' => 'Enter Header'])}}
	      </div>
	      <div class="form-group">
	        {{Form::label('title', 'Title:')}}
	        {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	      </div>
	      <div class="form-group">		
		    @if($errors->has('excerpt'))		    	
	    	{{Form::label('excerpt', 'Please Enter Excerpt:', ['class' => 'errs'])}}
			@else
			{{Form::label('excerpt', 'Excerpt:')}}
			@endif
		    {{Form::textarea('excerpt', null, ['class' => 'form-control'])}}
		  </div>
	      <div class="form-group">
	        {{Form::label('body', 'Body:')}}
	        {{Form::textarea('body', null, ['class' => 'form-control'])}}
	       </div>
	<div class="form-group" style="float: right">
	  {{Form::submit('Enter', ['class' => 'formbtn'])}}
	</div>			
{{Form::close()}}
    <a style="float: right; margin-right: .5em" href="{{ URL('/') }}"><button class="formbtn">Cancel</button></a>
      </div>
    </div>
  </div>    
@stop
@section('scripts')
  @include('_includes.froala.froala-css')
  @include('_includes.froala.froala-js')
  @include('_includes.froala.froala-options')
@stop