@extends('layouts.template')
@section('content')

<div class="container-fluid formcontainer">
    <div class="col-md-8 col-md-offset-2">
      <div class='col-md-12 orderdiv' style="padding-bottom: 5em">
<h1>Submit Recipe</h1>
{{Form::open(['method' => 'POST', 'action' => 'RecipeController@store', 'files' => true])}}
	<div class="form-group">
			@if($errors->has('title'))		    	
	          {{Form::label('title', 'Please Enter Title:', ['class' => 'errs'])}}<br/>
	        @else
	    	  {{Form::label('title', 'Recipe Title:')}}
		   	@endif
		   	  {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	</div>	
	 <div class="form-group">	
			@if($errors->has('category'))		    	
	          {{Form::label('type', 'Please Select Recipe Category:', ['class' => 'errs'])}}<br/>
	    	@else
	      {{Form::label('category', 'Recipe Category:')}}<br />
	  @endif
        {{Form::radio('category', 'Appetizers')}} {{Form::label('category', 'Appetizers')}}<br/>
        {{Form::radio('category', 'SoupsSalads')}} {{Form::label('category', 'Soups/Salads')}}<br/>
        {{Form::radio('category', 'Entrees')}} {{Form::label('category', 'Entrees')}}<br/>
        {{Form::radio('category', 'Sides')}} {{Form::label('category', 'Sides')}}<br/>
        {{Form::radio('category', 'Desserts')}} {{Form::label('category', 'Desserts')}}<br/>
        {{Form::radio('category', 'PartyFoods')}} {{Form::label('category', 'Party Foods')}}
	</div>
	<div class="form-group">
	  @if($errors->has('body'))		    	
	    {{Form::label('body', 'Please Enter Recipe:', ['class' => 'errs'])}}<br/>
	  @else
	    {{Form::label('body', 'Recipe:')}}
	  @endif
        {{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
	  @if($errors->has('img'))		    	
	  	{{Form::label('img', 'Please Upload Image:', ['class' => 'errs'])}}
	  @else
	 	{{ Form::label('img', 'Upload Image:')}}
		@endif    	
	    {{ Form::file('img')}}
  	</div>
	<div class="form-group">
	  @if($errors->has('credit'))		    	
	    {{Form::label('credit', 'Please Enter Recipe Credit:', ['class' => 'errs'])}}<br/>
	  @else
	    {{Form::label('credit', 'Recipe Credit:')}}
	  @endif
        {{Form::textarea('credit', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group" style="float: right">
	  {{Form::submit('Enter', ['class' => 'formbtn'])}}
	</div>			
{{Form::close()}}
    <a style="float: right; margin-right: .5em" href="{{ URL('/recipe') }}"><button class="formbtn">Cancel</button></a>
</div>
</div>
</div>
@stop
@section('scripts')
	@include('_includes.froala.froala-css')
	@include('_includes.froala.froala-js')
	@include('_includes.froala.froala-options')
@stop