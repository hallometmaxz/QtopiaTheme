@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="content top-padding discover">
            <div class="two-column-header scroll-alert animate-down active">
                <div class="left">

                </div><!--left-->
                <div class="right">
                </div><!--right-->
            </div><!--two-column-header-->
        </div>




        <div class="title" id="contact">
          <br><br>
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
            <div class="center900 contact-area"><br>
                <h1 class="white">Oops!</h1>
			 <h3 class="white">Deze pagina is op dit moment niet bereikbaar.</h3>
                <br>
                <p class="white">We zijn hard aan het werk om onze website af te maken, <br>tot dit zo ver is kun je terecht op onze <a href="https://www.facebook.com/qtopiaqueerartsfestival/" target="_blank" ><b class="white" style="text-decoration: underline; ">Facebook</b></a> pagina voor meer<br> informatie over het programma, artiesten en meer! <br> <br> Onze excuses voor het ongemak</p>

                <a href="../index.html" style="text-decoration: underline; ">Terug naar de startpagina</a><br><br>

                <div class="wrapperoops">
                <ul class="social2">
				<li class="two">
                    <a href="https://www.facebook.com/qtopiaqueerartsfestival/" target="_blank">
                    <i class="fa fa-facebook"></i>
                    </a>
                </li>
				<li>
                    <a href="https://www.instagram.com/qtopiaqueerartsfestival/" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
				<li class="three">
                    <a href="mailto: info@qtopiaqueerartsfestival.nl">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                </li>
			</ul>
			</div>
			<div style="clear: both;"></div>
		</div><!--center800-->
	</div><!--our-mission-->
  @endif
@endsection
