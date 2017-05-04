@extends('layouts.template')
@section('content')
@include('_includes.carousel')

<div class="container-fluid">
  <div class="container" style="margin-top: 40px; margin-bottom: 20px; padding: 0px">
  
    <div class="col-md-4">
        @if(\Auth::check() && \Auth::user()->role == "admin")
          <div id="homeedit">
            <a href="{{url('/grocery/'.$grocery->id.'/edit')}}"><button class="editbtn">Edit</button></a>
          </div>
        @endif
  
      <img class="landimg" src="{{asset('storage/img/'.$grocery->img)}}">
      <div style="color: #fff; background-color: #312B33; margin-bottom: 2em"><center><h5 style="margin: 0px; padding: 5px 5px">{{$grocery->header}}</h5></center></div>
      <a href="{{url('/grocery/'.$grocery->id)}}"><h4>{{$grocery->title}}</h4></a>
      <p>{!!$grocery->excerpt!!}</p>
    </div>



    <div class="col-md-4">
        @if(\Auth::check() && \Auth::user()->role == "admin")
          <div id="homeedit">
            <a href="{{url('/parts/'.$parts->id.'/edit')}}"><button class="editbtn">Edits</button></a>
          </div>
        @endif
      <img class="landimg" src="{{asset('storage/img/'.$parts->img)}}">
      <div style="color: #fff; background-color: #312B33; margin-bottom: 2em"><center><h5 style="margin: 0px; padding: 5px 5px">{{$parts->header}}</h5></center></div>
      <a href="{{url('/parts/'.$parts->id)}}"><h4>{{$parts->title}}</h4></a>
      <p>{!!$parts->excerpt!!}</p>
    </div>
    






    <div class="col-md-4">
        @if(\Auth::check() && \Auth::user()->role == "admin")
          <div id="homeedit">
            <a href="{{url('/fleet/'.$fleet->id.'/edit')}}"><button class="editbtn">Edit</button></a>
          </div>
        @endif
     
      <img class="landimg" src="{{asset('storage/img/'.$fleet->img)}}">

       <div style="color: #fff; background-color: #312B33; margin-bottom: 2em"><center><h5 style="margin: 0px; padding: 5px 5px">{{$fleet->header}}</h5></center></div>


      <a href="{{url('/fleet/'.$fleet->id)}}"><h4>{{$fleet->title}}</h4></a>
      <p>{!!$fleet->excerpt!!}</p>
    </div>
  
  </div>
  


<div class="container-fluid" style="background-color: #E5E5E5;">
  <div class="container" style=" margin-top: 40px; margin-bottom: 20px; padding: 0px">
  @foreach($news as $new)
    <div class="col-md-4">
          @if(\Auth::check() && \Auth::user()->role == "admin" || \Auth::check() && \Auth::user()->role == "user")
          <div id="homeedit">
            <a href="{{url('/news/'.$new->id.'/edit')}}"><button class="editbtn">Edit</button></a>
          </div>
        @endif
      <img class="landimg" src="{{asset('storage/img/'.$new->img)}}">
      <div style="color: #fff; background-color: #312B33; margin-bottom: 2em"><center><h5 style="margin: 0px; padding: 5px 5px">{{$new->type}}</h5></center></div>
      <a href="{{url('/news/'.$new->id)}}"><h4>{{$new->title}}</h4></a>
      <p>{!!$new->excerpt!!}</p>
    </div>
@endforeach
  
  </div>
  
</div>


</div>
@stop