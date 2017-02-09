@extends('layouts.template')
@section('content')
<div class="container-fluid formcontainer">
    <div class="col-md-8 col-md-offset-2">
        <div class='col-md-12 orderdiv' style="padding-bottom: 5em">
<h1>Edit Recipe</h1>
{{Form::model($recipe, ['method' => 'PATCH', 'action' => ['RecipeController@update', $recipe->id]])}}
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
<div class="form-group" style="float: right">
     <button class="lgbtn">Cancel<a href="/"></a></button>
			{{Form::submit('Update', ['class' => 'lgbtn'])}}
</div>			

{{Form::close()}}
</div>
</div>
</div>
@stop
@section('scripts')
	@include('_includes.froala.froala-css')
    @include('_includes.froala.froala-js')
	@include('_includes.froala.froala-options')
@stop