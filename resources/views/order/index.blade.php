@extends('layouts.template')
@section('content')
     <img  src="{{url('/banners/order_banner.png')}}" alt="Ergon Marine Industrial Supply" width="100%">
<div class="container-fluid ordercontainer" >

  <div class="row">
    <div class="col-md-6 text-center ordercol">
      <div class='col-md-12 orderdiv'>

       <h3>Grocery Order Form</h3>
      <p>Click on the button below; it is an excel file.<br/>
      Print the form or fill it out on the screen.<br/>
      Email to <a href="mailto:{{ 'vbemisbiller@ergon.com' }}">vbemisbiller@ergon.com</a><br/>
      We will take care of your order.</p>
      <a  href="{{url('/files/myOrder.xls')}}"><button style="margin: 1em 0em" class="custombtn">Download Grocery Order Form</button></a>
      </div>
    </div>
    <div class="col-md-6 text-center ordercol">
      <div class='col-md-12 orderdiv'>
      <h3>Parts Order Form</h3>

      <p>Click on the button below; it is an excel file.<br/>
      Print the form or fill it out on the screen.<br/>
      Email to <a href="mailto:{{ 'wayne.speights@ergon.com' }}">wayne.speights@ergon.com </a><br/>
      We will take care of your order.</p>
      <a  href="{{url('/files/myParts.xls')}}"><button style="margin: 1em 0em" class="custombtn">Download Parts Order Form</button></a>
      </div>
    </div>

  </div>
 </div>
@stop