{{-- <div class="container-fluid" style="padding: 0; margin: 0px"> --}}
  <div id="myCarousel" class="carousel slide banners" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-always-ready.jpg')}}" width="100%">
          <img src="{{url('/sliders/always-ready.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
      </div>
      <div class="item">
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-crew-changes.jpg')}}" width="100%">
          <img src="{{url('/sliders/crew-changes.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
      </div>
      <div class="item">
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-delivers.jpg')}}" width="100%">
          <img src="{{url('/sliders/delivers.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
      </div>
      <div class="item">
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-meat.jpg')}}" width="100%">
          <img src="{{url('/sliders/meat.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
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