{{--
Template Name: Donate
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="scroll-alert animate-down top-padding">
      <div class="shape1-container parallax" data-parallax-distance="500">
        <div class="shape1 parallax"></div>
      </div>
      <div class="content-full" id="give">
        <div class="shape3-container parallax" data-parallax-distance="400">
          <div class="shape3 parallax"></div>
        </div>
        <div class="introduction">
          <div class="column40 padding60 ">
            <h2>Geef een lift <i class="fa fa-car"></i></h2>
          </div>
          <!--column40-->
          <div class="column60 ">
            <p>Dit jaar willen we een extra inspanning leveren om geld in te zamelen van mensen voor mensen, en het dus niet te gebruiken voor de productie van het festival. Deze donaties zullen QTOPIA toegankelijker maken voor mensen die het zich momenteel niet kunnen veroorloven om naar Nijmegen te reizen. Er is geen minimum- of maximum voor jouw donatie, alle steun is welkom.<br><br>
              Als je 25 euro doneert, krijg je iemand met de trein naar Nijmegen. Voor 50 euro krijg je ze ook thuis!

            </p><a href="https://www.doneeractie.nl/qtopia-steun-of-krijg-een-rit-naar-nijmegen/-37805"><b>direct doneren</b></a>
          </div>
          <!--column60-->
        </div>
        <!--introduction-->

      </div>


      <div class="content-full" id="get">
        <div class="introduction">
          <div class="shape3-container parallax" data-parallax-distance="400">
            <div class="shape3 parallax"></div>
          </div>
          <div class="column40 padding60 ">
            <h2>Krijg een lift <i class="fa fa-child"></i></h2>
          </div>
          <!--column40-->
          <div class="column60 ">
            <p>Wil je naar ons festival komen? Hoewel er geen toegangsprijzen zijn voor de tentoonstellingen en een groot aandeel van de activiteiten, realiseren we ons dat mensen van buiten Nijmegen misschien niet in staat zijn om de reis van en naar Nijmegen te betalen.

              Laat het ons weten of je wilt komen door het onderstaande formulier in te vullen:


            </p><a href="https://www.doneeractie.nl/qtopia-steun-of-krijg-een-rit-naar-nijmegen/-37805"><b>Rit aanvragen</b></a>
          </div>
          <!--column60-->
        </div>
        <!--introduction-->
      </div>

    </div>

    <br>
    <div class="our-mission" id="goodtoknow">
      <div class="shape1-container parallax" data-parallax-distance="500">
        <div class="shape1 parallax"></div>
      </div>
      <div class="shape2-container parallax" data-parallax-distance="100">
        <div class="shape2 parallax"></div>
      </div>

      <div class="center900 contact-area"><br>
        <h3 class="white">Goed om te weten</h3>
        <p class="white">Als niemand deze donaties claimt, zullen we het niet gebruiken voor de productie voor ons eigen festival. In plaats daarvan zullen we dit investeren in het creëren van een betere toegankelijkheid in Nijmegen. Ofwel door te doneren aan een doel of door te investeren in materiaal dat bepaalde locaties beter toegankelijk maakt.<br><br>
          De bovenstaande getallen (25 en 50 euro) zijn gebaseerd op gemiddelde reiskosten vanuit verschillende hoeken van Nederland.
        </p>

        <a href="https://www.facebook.com/qtopiaqueerartsfestival/"><b class="white">Meer informatie</b></a>


        <div style="clear: both;"></div>
      </div><!--center800-->
    </div>
    @include('partials.content-page')
  @endwhile
@endsection
