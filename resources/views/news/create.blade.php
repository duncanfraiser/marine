@extends('layouts.template')
@section('content')

<div class="container-fluid formcontainer">
    <div class="col-md-8 col-md-offset-2">
      <div class='col-md-12 orderdiv' style="padding-bottom: 5em">
<h2>Create Article</h2>
{{Form::open(['method' => 'POST', 'action' => 'NewsController@store', 'files' => true])}}
	<div class="form-group">	
				@if($errors->has('title'))		    	
	    		{{Form::label('title', 'Please Enter Title:', ['class' => 'errs'])}}
	    		@else
	    		{{Form::label('title', 'Title:')}}
				@endif
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	</div>
	<div class="form-group">		
				@if($errors->has('type'))		    	
	    		{{Form::label('type', 'Please Select Article Type:', ['class' => 'errs'])}}<br/>
	    		@else
	    		{{ Form::label('type', 'Select Article Type:')}}<br />
				@endif
    	{{ Form::radio('type', 'News') }} {{ Form::label('type', 'News')}}<br />
		{{ Form::radio('type', 'Specials') }} {{ Form::label('type', 'Specials')}}
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
				@if($errors->has('excerpt'))		    	
	    		{{Form::label('excerpt', 'Please Enter Excerpt:', ['class' => 'errs'])}}
				@else
				{{Form::label('excerpt', 'Excerpt:')}}
				@endif
		{{Form::textarea('excerpt', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
				@if($errors->has('body'))		    	
	    		{{Form::label('body', 'Please Enter Body:', ['class' => 'errs'])}}
				@else
				{{Form::label('body', 'Body:')}}
				@endif		
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
<div class="form-group" style="float: right">
     <button class="lgbtn">Cancel<a href="/"></a></button>
			{{Form::submit('Enter', ['class' => 'lgbtn'])}}
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