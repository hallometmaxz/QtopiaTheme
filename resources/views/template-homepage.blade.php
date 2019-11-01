{{--
Template Name: Homepage
--}}

@extends('layouts.app')
@section('content')
@include('partials.page-header')

<div class="content top-padding home">
  <div class="content1100 hero">
    <img src="@asset('images/qtopia-queer-arts-festival-nijmegen.png')"/>
  </div>
</div>

<div class="content-full scroll-alert animate-down" id="about">
  <div class="introduction">
    <div class="column40 padding60 scroll-alert animate-down">
      <h2>{{ $intro["title"] }}</h2>
    </div>
    <!--column40-->
    <div class="column60 scroll-alert animate-down">
      <p>{{ $intro["text"] }}</p>
      <a href="{{ $intro["link"] }}"><b>{{ $intro["linktext"] }}</b></a>
    </div>
    <!--column60-->
  </div>
  <!--introduction-->
  <div class="black-box scroll-alert animate-down">
    <h3>{{ $intro["boxtitle"] }}</h3>
    <div class="left">
      <p> {{ $intro['boxtext'] }} </p>
      <a href="{{ $intro["boxlink"] }}"><b> {{ $intro["boxlinktext"] }}</b></a>
      <br>
      <br>
    </div>
  </div>
</div>


<div class="programs">
  <div class="title">
    <h2 class="green">{{$events['title']}}</h2>
    <a href="assets/pdf/progrmma2019lr.pdf" target="_blank" class="white" style="opacity: 0.7"><i class="fa fa-file-pdf-o"></i> <span>Download het programmaboekje</span><br></a>
    <a href="pages/programma.html" target="_blank" class="white" style="opacity: 0.7"> <span>{{$events['subtitle']}}</span></a>
  </div>
  <br><br>
  <ul>

    @foreach($artist as $artists)

      <li class="scroll-alert animate-down" id="queeringsansebastian">
        <img src="{{$artists['artistimage']}}" style="width:90%;"/>
        <a href="events.html#queeringsansebastian">
        </a>
        <h4><a href="">{{ $artists["artisttitle"] }} </a></h4>
        <h6>{{ $artists['artisttime'] }}</h6>
        <p>
          Tijdens het Qtopia Queer Arts Festival zal kunstenaar Pluck zes dagen in Museum het Valkhof verblijven en de collectie onderzoeken op Queerness.
        </p>
        <a href="locations.html#hetvalkhof" style="color: #5bbe83"> Museum het Valkhof</a>
        <br>
        <a href="events.html#queeringsansebastian"><span>Lees meer</span></a>
      </li>
    @endforeach

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
