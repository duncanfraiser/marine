@extends('layouts.template')
@section('content')

<div class="container-fluid formcontainer">
    <div class="col-md-8 col-md-offset-2">

<h2>Create Order Page</h2>
{{Form::open(['method' => 'POST', 'action' => 'OrderController@store', 'files' => true])}}
      <div class='col-md-6 orderdiv' style="padding-bottom: 5em">
	<div class="form-group">	
				@if($errors->has('title'))		    	
	    		{{Form::label('title', 'Please Enter Title:', ['class' => 'errs'])}}
	    		@else
	    		{{Form::label('title', 'Title:')}}
				@endif
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	</div>
	<div class="form-group">
				@if($errors->has('grocery-file'))		    	
	    		{{Form::label('grocery-file', 'Please Upload Image:', ['class' => 'errs'])}}
				@else
				{{ Form::label('grocery-file', 'Upload Image:')}}
				@endif    	
		{{ Form::file('grocery-file')}}
  	</div>
	<div class="form-group">
				@if($errors->has('body'))		    	
	    		{{Form::label('body', 'Please Enter Body:', ['class' => 'errs'])}}
				@else
				{{Form::label('body', 'Body:')}}
				@endif		
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
	</div>

      <div class='col-md-6 orderdiv' style="padding-bottom: 5em">
	<div class="form-group">	
				@if($errors->has('title'))		    	
	    		{{Form::label('title', 'Please Enter Title:', ['class' => 'errs'])}}
	    		@else
	    		{{Form::label('title', 'Title:')}}
				@endif
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	</div>
	<div class="form-group">
				@if($errors->has('grocery-file'))		    	
	    		{{Form::label('grocery-file', 'Please Upload Image:', ['class' => 'errs'])}}
				@else
				{{ Form::label('grocery-file', 'Upload Image:')}}
				@endif    	
		{{ Form::file('grocery-file')}}
  	</div>
	<div class="form-group">
				@if($errors->has('body'))		    	
	    		{{Form::label('body', 'Please Enter Body:', ['class' => 'errs'])}}
				@else
				{{Form::label('body', 'Body:')}}
				@endif		
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
	</div>


	
	<div class="form-group" style="float: right">
	  {{Form::submit('Enter', ['class' => 'formbtn'])}}
	</div>			
{{Form::close()}}
    <a style="float: right; margin-right: .5em" href="{{ URL('/') }}"><button class="formbtn">Cancel</button></a>

</div>
</div>
@stop

@section('scripts')
	@include('_includes.froala.froala-css')
    @include('_includes.froala.froala-js')
	@include('_includes.froala.froala-options')
@stop