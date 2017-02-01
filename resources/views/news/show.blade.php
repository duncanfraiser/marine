@extends('layouts.template')
@section('content')
<div class="container-fluid recipecontainer" >
    <div class="col-md-10 col-md-offset-1 show">
      <div class='col-md-8' style="padding: 0">
      <div>
      <img width="100%"  src="{{url('storage/img/'.$news->img)}}">
      </div>
      <div style="padding: 1em">
      <h4>{{$news->title}}</h4>
      @if(\Auth::Check())
      <a  href="{{url('/news/'.$news->id.'/edit')}}"><button class="smbtn">Edit</button></a>
      @endif
      <p>{!!$news->body!!}</p>
      </div>
      </div>
      <div class='col-md-4' style="padding-bottom: 2em">
      <div>
       <h4>News</h4>   
       @foreach($newses as $new)
       <p><a href="{{url('/news/'.$new->id)}}">{{$new->title}}</a></p>
       @endforeach 
       </div>
       <div style="margin-top: 3em">
        <h4>Specials</h4>
       @foreach($specials as $special)
       <p><a href="{{url('/news/'.$special->id)}}">{{$special->title}}</a></p>
       @endforeach    
      </div>
      </div>
  </div>
</div>

@stop