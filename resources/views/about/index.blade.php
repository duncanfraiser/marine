@extends('layouts.template')
@section('content')
   
      <picture>
          <source media="(max-width: 770px)" srcset="{{url('/sliders/mobile-about.jpg')}}" width="100%">
          <img src="{{url('/sliders/about.jpg')}}"  width="100%" alt="Ergon Marine Industrial Supply">
      </picture>
<div class="container-fluid aboutcontainer" >

     <center><h1 style="font-weight: 300; padding: 0em 0em">“A strong business, a strong neighbor, a strong resource!”</h1></center>

  <div class="row">
    <div class="col-md-6 aboutcol">
      <img class="aboutimg" src="{{url('/sliders/AboutService.png')}}">
      <div class='col-md-12 aboutdiv'>
      <h3><center><strong>SERVICE</strong></center></h3>
      <p>Ergon Marine & Industrial Supply – Vicksburg employs 61 people and a fleet of seven towboats to provide mid-river fleet servicing 24 hours a day of groceries, fuel, equipment, supplies, crew changes, etc., to commercial vessels navigating the Mississippi River. EMIS is the only mid-stream fueler and harbor service in the industry involved in strategic planning and management calls of the Lower Mississippi River.</p>
      </div>
    </div>
    <div class="col-md-6 aboutcol">
      <img class="aboutimg" src="{{url('/sliders/AboutAdvanced.png')}}">
      <div class='col-md-12 aboutdiv'>
      <h3><center><strong>ADVANCED MONITORING <br/>& COMMUNICATION SYSTEM</strong></center></h3>
      <p>Sophisticated computer systems such as AIS and VIC allow EMIS to monitor traffic and movement, and communicate with vessels on the river. Automatic Identification System (AIS) is a tracking system which supplements marine radar, providing Vehicle Traffic Services like EMIS the identification position, course, speed, destination, and other specifics of each vessel, displayed on computer screens. Vicksburg Information Center (VIC) allows EMIS to speak with boat personnel in managing their needs and services.</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 aboutcol">
      <img class="aboutimg" src="{{url('/sliders/AboutEmergency.png')}}">
      <div class='col-md-12 aboutdiv' style="min-height: 30em">
      <h3><center><strong>EMERGENCY RESPONSE<br/> & SAFETY</strong></center></h3>
      <p>Assisting the Port of Vicksburg’s U.S. Coast Guard Maintenance Operations team in human rescue, recovery and property salvage projects, EMIS personnel serve as “first responders” of the river. They help to ensure safety of passengers and recovery of commercial river vessels when navigation goes awry. Over the years, EMIS has developed good working relationships with entities including Vicksburg emergency response teams, and other city and county officials; the U.S. Army Corps of Engineers; U.S. Coast Guard; Department of Homeland Security; and even the FBI.</p>
<p>EMIS is a vital resource for pilots who need the latest river conditions. It serves as traffic manager, key information center and staging area during emergencies where the U.S. Coast Guard, towing industry, transportation and other officials strategize to keep marine commerce safely afloat. Strategic planning for possible mid-river occurrences, such as high water and low water scenarios, has allowed it to manage continued operations proficiently.</p>
      </div>
    </div>
    <div class="col-md-6 aboutcol">
      <img class="aboutimg" src="{{url('/sliders/AboutHistory.png')}}">
      <div class='col-md-12 aboutdiv' style="min-height: 30em">
      <h3><center><strong>OUR HISTORY</strong></center></h3>
      <p>Ergon Marine & Industrial Supply, Inc., was founded in 1969 as the Ergon General Store, providing support in the form of groceries and other supplies for Magnolia Marine Transport Company (MMT). In 1974, the Ergon General Store became incorporated and began the process of expanding its services to other marine transport companies. In 1975, EMIS moved its headquarters from Houma, LA, joining MMT in Vicksburg, MS. A second facility opened in Memphis, TN, in 1982. Ergon General Store officially became known as Ergon Marine & Industrial Supply in 2001, and in light of the company’s continuous expansion, EMIS purchased equipment from Patton Tully and added fleeting to its list of services.</p><p>EMIS has earned noteworthy recognition and awards for its services. These include the 2008 Outstanding Response and Assistance certificate, and the 2009 Meritorious Public Service Award, presented “in recognition of notable services that have assisted greatly in furthering the aims and functions of the U.S. Coast Guard,” for coordinating emergency responses and helping to recover drifting barges.</p>
      </div>
    </div>
   </div>

</div>





@stop