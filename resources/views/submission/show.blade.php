@extends('layouts.template')
@section('content')
  <div class="container-fluid recipecontainer">
    <div class="col-md-6 col-md-offset-3 recipecol" style="margin-top: 5em">
      <div class='col-md-12 recipediv' style="border:1px solid #696969; padding-top: 1em">
              @if(\Auth::Check() && \Auth::user()->role == 'user' || \Auth::Check() && \Auth::user()->role == 'admin')

        {{Form::open(['method' => 'DELETE', 'route' => ['submission.destroy', $submission->id], 'class' => 'delete'])}}
        {{Form::submit('Delete', ['class' => 'editbtn'])}}
        {{Form::close()}}
        @endif
      <div>
        <h3 style="margin: 0 0 10px 0; padding-top: 1em">{{$submission->title}}</h3>
        </div>
        <p><strong>Submitted By: </strong>{{$submission->name}}</p>
        <p><strong>Email Address: </strong>{{$submission->email}}</p>
        <p><strong>Phone Number: </strong>{{$submission->phone}}</p>
        <p><strong>Employer/Boat: </strong>{{$submission->employer}}</p>
        <p><strong>Recipe Ingredients: </strong>{{$submission->ingredients}}</p>
        <p><strong>Recipe Instructions: </strong>{{$submission->instructions}}</p>
      </div>
    </div>
  </div>
@stop
@section('scripts')
  <script>
  $(".delete").on("submit", function(){
    return confirm("Do you want to delete this item?");
  });
  </script>
@stop