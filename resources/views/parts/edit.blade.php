@extends('layouts.template')
@section('content')
  <div class="container-fluid formcontainer">
    <div class="col-md-8 col-md-offset-2">
      <div class='col-md-12 orderdiv' style="padding-bottom: 5em">
		<h2>Edit Parts Content</h2>
		{{Form::model($parts, ['method' => 'PATCH', 'files' => true, 'action' => ['PartsController@update', $parts->id]])}}
        {{Form::open(['method' => 'POST', 'action' => 'GroceryController@store'])}}
	      <div class="form-group">
	        {{Form::label('title', 'Title:')}}
	        {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	       </div>
	       <div class="form-group">
    		 {{ Form::label('img', 'Current Image:' )}} {{$parts->img}}
			 {{ Form::file('img')}}
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