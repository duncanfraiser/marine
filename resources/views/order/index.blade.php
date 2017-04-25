@extends('layouts.template')
@section('content')
<div class="container-fluid" style="background-color: #E5E5E5">

  <div id="myCarousel" class="carousel slide banners" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-groceries.jpg')}}" width="100%">
          <img src="{{url('/sliders/grocerySlider.png')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
      </div>
      <div class="item">
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-parts.jpg')}}" width="100%">
          <img src="{{url('/sliders/partsSlider.png')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid">
  <div class="container" style="margin-top: 20px; margin-bottom: 10em; padding: 0px">
    <div class="col-md-6">
       <center><h3>Groceries</h3>
      <p>Click on the button below.<br/>
      Print the form or fill it out on the screen.<br/>
      Email to <a href="mailto:{{ 'vbemisbiller@ergon.com' }}">vbemisbiller@ergon.com</a><br/>or fax to 601-636-6173.</p>
      <a href="{{url('/files/myOrder.xls')}}"><button class="formbtn">Grocery Order Form</button></a></center>
    </div>
    <div class="col-md-6">
      <center><h3>Parts</h3>
      <p>Click on the button below.<br/>
      Print the form or fill it out on the screen.<br/>
      Email to <a href="mailto:{{ 'wayne.speights@ergon.com' }}">wayne.speights@ergon.com</a><br/>or fax to 601-636-6173.</p>
      <a  href="{{url('/files/myParts.xls')}}"><button class="formbtn">Parts Order Form</button></a></center>
    </div>
  </div>
</div>
<div class="container-fluid" style="background-color: #E5E5E5; min-height: 50px">
</div>


@stop