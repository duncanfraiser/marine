@extends('layouts.template')
@section('content')
<div class="container-fluid formcontainer">
    <div class="col-md-8 col-md-offset-2">
        <div class='col-md-12 orderdiv' style="padding-bottom: 5em">
<h1>Edit Recipe</h1>
{{Form::model($recipe, ['method' => 'PATCH', 'action' => ['RecipeController@update', $recipe->id], 'files' => true])}}
	<div class="form-group">
		{{Form::label('title', 'Recipe Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	</div>	
	 <div class="form-group">
		{{ Form::label('category', 'Recipe Category:')}}<br />
				@if($errors->has('category'))
		    	<ul class="err">
	    		<li class="err">Please Select Recipe Catigory</li>
				</ul>
				@endif
    	{{Form::radio('category', 'Appetizers')}} {{Form::label('category', 'Appetizers')}}<br/>
    	{{Form::radio('category', 'SoupsSalads')}} {{Form::label('category', 'Soups/Salads')}}<br/>
    	{{Form::radio('category', 'Entrees')}} {{Form::label('category', 'Entrees')}}<br/>
    	{{Form::radio('category', 'Sides')}} {{Form::label('category', 'Sides')}}<br/>
    	{{Form::radio('category', 'Desserts')}} {{Form::label('category', 'Desserts')}}<br/>
    	{{Form::radio('category', 'PartyFoods')}} {{Form::label('category', 'Party Foods')}}
	
 	</div>
	<div class="form-group">
		{{Form::label('body', 'Recipe:')}}
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
		<div class="form-group">
    	{{ Form::label('img', 'Current Image:' )}} {{$recipe->img}}
		{{ Form::file('img')}}
  	</div>
  	<div class="form-group">
        {{Form::label('credit', 'Recipe Credit:')}}
        {{Form::textarea('credit', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group" style="float: right">
	  {{Form::submit('Enter', ['class' => 'formbtn'])}}
	</div>			
{{Form::close()}}
    <a style="float: right; margin-right: .5em" href="{{ URL('/recipe') }}"><button class="formbtn">Cancel</button></a>

       	<div class="form-group">
        {{Form::open(['method' => 'DELETE', 'route' => ['recipe.destroy', $recipe->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'formbtn'])}}
        {{Form::close()}}
    	</div>
</div>
</div>
</div>
@stop
@section('scripts')
	@include('_includes.froala.froala-css')
    @include('_includes.froala.froala-js')
	@include('_includes.froala.froala-options')
	<script>
	$(".delete").on("submit", function(){
		return confirm("Do you want to delete this item?");
	});
	</script>
@stop