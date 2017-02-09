@extends('layouts.template')
@section('content')
{{-- <div class="container-fluid" style="padding: 0; margin: 0px"> --}}
  <div id="myCarousel" class="carousel slide banners" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-groceries.jpg')}}" width="100%">
          <img src="{{url('/sliders/groceries.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
      </div>
      <div class="item">
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-parts.jpg')}}" width="100%">
          <img src="{{url('/sliders/parts.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
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

<div class="container-fluid ordercontainer" >

  <div class="row">
    <div class="col-md-6 text-center ordercol">
      <div class='col-md-12 orderdiv'>

       <h3>Groceries</h3>
      <p>Click on the button below.<br/>
      Print the form or fill it out on the screen.<br/>
      Email to <a href="mailto:{{ 'vbemisbiller@ergon.com' }}">vbemisbiller@ergon.com</a><br/>or fax to 601-636-6173.</p>
      <a  href="{{url('/files/myOrder.xls')}}"><button class="lgbtn">Grocery Order Form</button></a>
      </div>
    </div>
    <div class="col-md-6 text-center ordercol">
      <div class='col-md-12 orderdiv'>
      <h3>Parts</h3>

      <p>Click on the button below.<br/>
      Print the form or fill it out on the screen.<br/>
      Email to <a href="mailto:{{ 'wayne.speights@ergon.com' }}">wayne.speights@ergon.com</a><br/>or fax to 601-636-6173.</p>
      <a  href="{{url('/files/myParts.xls')}}"><button class="lgbtn">Parts Order Form</button></a>
      </div>
    </div>

  </div>
 </div>
@stop