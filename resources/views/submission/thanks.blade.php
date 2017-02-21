@extends('layouts.template')
@section('content')
  <div class="container-fluid recipecontainer">
    <div class="col-md-6 col-md-offset-3 recipecol" style="margin-top: 5em">
      <div class='col-md-12 recipediv' style="border:1px solid #696969; padding-top: 1em">
      <div>
        <h3 style="margin: 0 0 10px 0; padding-top: 1em">{{$submission->title}}</h3>
        </div>
        <p>Thank you {{$submission->name}} for your recipe submission.</p>

      </div>
    </div>
  </div>
@stop