<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="icon" href="{{url('/img/BoatWheel_black.png')}}">
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}?1">

      @include('_includes.froala.froala-css')

        <title>EMIS</title>

        <!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  // tracker methods like "setCustomDimension" should be called before "trackPageView"
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.ergon.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->


    </head>
    <body>


@include('_includes.nav')

     @yield('content')








{{-- FOOTER START --}}
<nav class="navbar navbar-inverse navbar-fixed-bottom foots">


<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 main pull-right">
<a class="footimg navbar-brand" href="#"><img src="{{url('/img/fb.png')}}"></a>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
<div class="footscopy lefttext">
&copy; 2017 Ergon Marine & Industrial Supply, Inc. All Rights Reserved. California Transparency in Supply Chains Act
</div>
</div>
</div>

</nav>
{{-- FOOTER STop --}}



    @yield('scripts')

    </body>
</html>