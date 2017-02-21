@extends('layouts.template')
@section('content')
<div class="container-fluid formcontainer">
  <div class="col-md-8 col-md-offset-2">
    <div class='col-md-12 orderdiv' style="padding-bottom: 5em">
	  <h1>Submit Recipe Form</h1>
      {{Form::open(['method' => 'POST', 'action' => 'SubmissionController@store'])}}

      <div class="form-group">
	    @if($errors->has('name'))		    	
	      {{Form::label('name', 'Please Enter Full Name:', ['class' => 'errs'])}}<br/>
	    @else
	      {{Form::label('name', 'Full Name:')}}
	    @endif
          {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}
	  </div>

      <div class="form-group">
	    @if($errors->has('email'))		    	
	      {{Form::label('email', 'Please Enter Email:', ['class' => 'errs'])}}<br/>
	    @else
	      {{Form::label('email', 'Email:')}}
	    @endif
          {{Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
	  </div>

      <div class="form-group">
        {{Form::label('phone', 'Phone Number:')}}
        {{Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
	  </div>

      <div class="form-group">
	    @if($errors->has('employer'))		    	
	      {{Form::label('employer', 'Please Enter Employer/Boat:', ['class' => 'errs'])}}<br/>
	    @else
	      {{Form::label('employer', 'Employer/Boat:')}}
	    @endif
          {{Form::text('employer', null, ['class' => 'form-control', 'placeholder' => 'Enter Employer/Boat'])}}
	  </div>

      <div class="form-group">
	    @if($errors->has('title'))		    	
	      {{Form::label('title', 'Please Enter Recipe Title:', ['class' => 'errs'])}}<br/>
	    @else
	      {{Form::label('title', 'Recipe Title:')}}
	    @endif
          {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Recipe Title'])}}
	  </div>

      <div class="form-group">
	    @if($errors->has('ingredients'))		    	
	      {{Form::label('ingredients', 'Please Enter Recipe Ingredients:', ['class' => 'errs'])}}<br/>
	    @else
	      {{Form::label('ingredients', 'Recipe Ingredients:')}}
	    @endif
          {{Form::textarea('ingredients', null, ['class' => 'form-control', 'placeholder' => 'Enter Recipe Ingredients'])}}
	  </div>

      <div class="form-group">
	    @if($errors->has('instructions'))		    	
	      {{Form::label('instructions', 'Please Enter Recipe Instructions:', ['class' => 'errs'])}}<br/>
	    @else
	      {{Form::label('instructions', 'Recipe Instructions:')}}
	    @endif
          {{Form::textarea('instructions', null, ['class' => 'form-control', 'placeholder' => 'Enter Recipe Instructions'])}}
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
