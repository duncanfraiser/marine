@extends('layouts.template')
@section('content')
  <div class="container-fluid rivercontainer">
    <div class="col-md-10 col-md-offset-1" style="padding: 0">
      <iframe width="100%" height="950px" style="border:none" src="http://forecast.weather.gov/product.php?site=NWS&issuedby=ORN&product=RVA&format=txt&version=1&glossary=0">
    	<p>Your browser does not support iframes.</p>
	  </iframe>
	</div>
  </div>
@stop