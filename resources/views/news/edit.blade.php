@extends('layouts.template')
@section('content')
<div class="container-fluid formcontainer">
    <div class="col-md-8 col-md-offset-2">
      <div class='col-md-12 orderdiv' style="padding-bottom: 5em">
<h2>Edit News Article</h2>
{{Form::model($news, ['method' => 'PATCH', 'files' => true, 'action' => ['NewsController@update', $news->id]])}}
	<div class="form-group">
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	</div>
	<div class="form-group">
    	{{ Form::label('img', 'Current Image:' )}} {{$news->img}}
		{{ Form::file('img')}}
  	</div>
	<div class="form-group">
		{{Form::label('excerpt', 'Excerpt:')}}
		{{Form::textarea('excerpt', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>

	<div class="form-group" style="float: right">
	  {{Form::submit('Enter', ['class' => 'lgbtn'])}}
	</div>			
{{Form::close()}}
    <a style="float: right; margin-right: .5em" href="{{ URL('/') }}"><button class="lgbtn">Cancel</button></a>		

		{{Form::close()}}
       	<div class="form-group">
        {{Form::open(['method' => 'DELETE', 'route' => ['news.destroy', $news->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'lgbtn'])}}
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