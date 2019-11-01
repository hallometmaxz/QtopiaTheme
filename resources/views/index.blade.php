@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="content top-padding home">
    <div class="content1100 hero scroll-alert animate-down active">
      <img src="@asset('images/qtopia-queer-arts-festival-nijmegen.png')" alt="Qtopia Queer Arts Festival Nijmegen">
    </div>
  </div>

  <div class="content-full scroll-alert animate-down" id="about">
    <div class="introduction">
      <div class="column40 padding60 scroll-alert animate-down">
        <h2>Qtopia Queer Arts Festival 2019.</h2>
      </div>
      <!--column40-->
      <div class="column60 scroll-alert animate-down">
        <p>is een tijdelijke kunstomgeving in Nijmegen, van 4 tot 20 oktober. Het festival programmeert kunstwerken die heteronormatieve aspecten in de samenleving onderzoeken. We nodigen je uit om je eigen perspectief te ontwarren en te onderzoeken tijdens onze vele activiteiten; van beeldende kunst exposities tot workshops, performances, lezingen en feestjes.
        </p><a href="https://www.facebook.com/qtopiaqueerartsfestival/"><b>Meer over ons</b></a>
      </div>
      <!--column60-->
    </div>
    <!--introduction-->
    <div class="black-box scroll-alert animate-down">
      <h3>Geef een lift</h3>
      <div class="left">
        <p>Dit jaar willen we een extra inspanning leveren om geld in te zamelen van mensen voor mensen, en het dus niet te gebruiken voor de productie van het festival.
          <br>
          <br>Deze donaties zullen QTOPIA toegankelijker maken voor mensen die het zich momenteel niet kunnen veroorloven om naar Nijmegen te reizen.
          <br>
          <br> Er is geen minimum- of maximum voor jouw donatie, alle steun is welkom.</p>

          <a href="pages/donate.html"><b>Meer informatie</b></a>
          <br>
          <br>
        </div>

        <!---
        <h3>
        <a href="#">Discover events <br>happening soon</a>
      </h3>
      <div class="layout">
      <div class="left">
      <i class="fa fa-calendar"></i>
    </div>

    <div class="right">
    <p>Pick a week</p>
    <select name="week">
    <option value="" disabled selected>Select your option</option>
    <option value="week-one">Week one</option>
    <option value="week-two">Week two</option>
    <option value="week-three">Week three</option>
  </select>
</div>
</div>

<div class="layout">
<div class="left">
<i class="fa fa-clock-o"></i>
</div>

<div class="right">
<p>Pick a time</p>
<select name="time">
<option value="" disabled selected>Select your option</option>
<option value="week-one">Morning</option>
<option value="week-two">Noon</option>
<option value="week-three">Evening</option>
</select>
</div>
</div>

<div class="layout">
<div class="left">
<i class="fa fa-map-marker"></i>
</div>
<div class="right">
<p>Pick an event</p>
<select name="Event">
<option value="" disabled selected>Select your option</option>
<option value="week-one">Exposition</option>
<option value="week-two">Party</option>
<option value="week-three">Other</option>
</select>
</div>

</div>

<a><b>Search</b></a>
-->
</div>

</div>
<!--content-full-->
<!--
<div class="sec3" style="background-image: url('assets/img/map.png') no-repeat center; -webkit-background-size: cover; background-size: cover; ">
<div class="map-container">
<img src="assets/img/map.png">
</div>
</div>
-->
<!--sec3-->

<div class="programs">
  <div class="title">
    <h2 class="green">Current &amp; Upcoming events</h2>
    <a href="assets/pdf/progrmma2019lr.pdf" target="_blank" class="white" style="opacity: 0.7"><i class="fa fa-file-pdf-o"></i> <span>Download het programmaboekje</span><br></a>
    <a href="pages/programma.html" target="_blank" class="white" style="opacity: 0.7"> <span>of bezoek de overzichtspagina.</span></a>
  </div>
  <br><br>
  <ul>


    <li class="scroll-alert animate-down" id="queeringsansebastian">

      <a href="events.html#queeringsansebastian">
        <img src="@asset('images/queerin-san-sebastian.png')" style="width: 90%;" />
      </a>
      <h4><a href="">Queering St Sebastian </a></h4>
      <h6>13.00 - 17.00</h6>
      <p>
        Tijdens het Qtopia Queer Arts Festival zal kunstenaar Pluck zes dagen in Museum het Valkhof verblijven en de collectie onderzoeken op Queerness.
      </p>
      <a href="locations.html#hetvalkhof" style="color: #5bbe83"> Museum het Valkhof</a>
      <br>
      <a href="events.html#queeringsansebastian"><span>Lees meer</span></a>
    </li>

    <li class="scroll-alert animate-down" id="air">
      <a href="events.html#air">
        <img src="@asset('images/geowyeth.png')" style="width: 90%;" />
      </a>
      <h4><a href="events.html#openingair">Opening AIR</a></h4>
      <h6>19:30 – 22:30</h6>
      <p>
        Op vrijdag 4 oktober trapt het Qtopia Queer Arts Festival af met een opening bij POPOP.
      </p>
      <br>
      <a href="locations.html#popop" style="color: #5bbe83"> POPUP</a>
      <br>
      <a href="events.html#air"><span>Lees meer</span></a>
    </li>

  </ul>

</div>

<div class="title" id="contact">
  <h2 class="red-1">Contact</h2>
</div>

<div class="our-mission">
  <div class="shape1-container parallax" data-parallax-distance="500">
    <div class="shape1 parallax"></div>
  </div>
  <div class="shape2-container parallax" data-parallax-distance="100">
    <div class="shape2 parallax"></div>
  </div>
  <div class="shape3-container parallax" data-parallax-distance="400">
    <div class="shape3 parallax"></div>
  </div>
  <div class="center800 contact-area">
    <form method="post" action="./assets/php/contactengine.php">
      <label for="Email">E-mailadres:</label>
      <input type="text" name="Email" id="Email" required/>

      <label for="Name">Naam:</label>
      <input type="text" name="Name" id="Name" required/>

      <label for="Tel">Telefoonnummer:</label>
      <input type="text" name="Tel" id="Tel" required/>

      <label for="Message">Bericht:</label>
      <br />
      <textarea name="Message" rows="5" cols="5" id="Message" required></textarea>

      <input type="submit" name="submit" value="Submit" class="submit-button" />
    </form>

    <div style="clear: both;"></div>
  </div>
  <!--center800-->
</div>


@endsection
