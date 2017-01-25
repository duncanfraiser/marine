@extends('layouts.template')
@section('content')

<div class="container-fluid" style="padding-top: 5em">
{{Form::open(['method' => 'POST', 'action' => 'GroceryController@store'])}}
	<div class="form-group">
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	</div>
	<div class="form-group">
		{{Form::label('body', 'Body:')}}
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
<div class="form-group" style="float: right">
     <button class="custombtn">Cancel<a href="/"></a></button>
			{{Form::submit('Enter', ['class' => 'custombtn'])}}
</div>			

{{Form::close()}}
</div>








@stop

@section('scripts')
    @include('_includes.froala.froala-js')
@include('_includes.froala.froala-options')
@stop