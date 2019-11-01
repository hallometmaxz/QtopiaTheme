{{--
Template Name: Expositions
--}}

@extends('layouts.appwhite')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="content top-padding discover">
        <div class="two-column-header scroll-alert animate-down active">
            <div class="left">
                <h1 class="red">Exposities</h1>
            </div>


        </div>

    </div>

    <section id="page" class="landing expo loaded padding-bottom">

        <div class="content-wrapper clearfix">


            <div class="hashtag-row home-row hashtag-content clearfix" id="exponeus">
                <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape right">
                        <div class="hashtag">
                            <div class="icon">
                                <div class="full" style="opacity: 1;">
                                    <img src="../assets/img/naom-youngrak-son.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-mod hashtag-copy left">
                        <div class="copy">
                            <div class="info">
                                <div class="text-wrap">
                                    <h2>EXPO @ NEUS </h2>
                                    <p class="black">
                                        <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid black">Robin Ramos</a> -
                                        <a href="artists.html#tabitarezaire" class="black" style="border-bottom: 1px solid black">Tabita Rezaire</a> –
                                        <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid black">Noam Youngrak Son</a> -
                                        <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid black">Vita Evangelista</a> -
                                        <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid black">Mpingo Waridi Uhuru</a>
                                    </p>
                                    <p class="grey">
                                        Donderdag - zaterdag: 13:00 - 21:00<br>
                                        Zondag: 13:00 - 18:00 <br>

                                        <a style="border-bottom: none">Entree: gratis</a><br>
                                        <br>
                                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#neus"> NEUS</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hashtag-row home-row hashtag-content clearfix" id="exporuis">
                <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape left">
                        <div class="hashtag">
                            <div class="icon">
                                <div class="full" style="opacity: 1;">
                                    <img src="../assets/img/johanna-vanita-monk.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-mod hashtag-copy right">
                        <div class="copy">
                            <div class="info">
                                <div class="text-wrap">
                                    <h2>EXPO @ RUIS </h2>
                                    <p class="black">
                                        <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid black">Geo Wyeth</a> -
                                        <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid black">Johanna + Vanita Monk</a>
                                    </p>
                                    <p class="grey">
                                        Donderdag - zondag: 12:00 - 17:00<br>

                                        <a style="border-bottom: none">Entree: gratis</a><br>
                                        <br>
                                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#ruis"> Ruis</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hashtag-row home-row hashtag-content clearfix" id="expoklinker">
                <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape right">
                        <div class="hashtag">
                            <div class="icon">
                                <div class="full" style="opacity: 1;">
                                    <img src="../assets/img/jayn-bagdoonis.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-mod hashtag-copy left">
                        <div class="copy">
                            <div class="info">
                                <div class="text-wrap">
                                    <h2>Jayn Bagdoonis @ De Klinker</h2>
                                    <p class="black">
                                        <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid black">Jayn Bagdoonis</a>
                                    </p>
                                    <p class="grey">
                                        Woensdag - Donderdag: 18:00 - 21:00<br>
                                        Zaterdag: 12:00 - 21:00<br>
                                        Zondag: 18:00 - 21:00<br>


                                        <a style="border-bottom: none">Entree: gratis</a><br>
                                        <br>
                                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#klinker"> De Klinker</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hashtag-row home-row hashtag-content clearfix" id="exporozehuis">
                <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape left">
                        <div class="hashtag">
                            <div class="icon">
                                <div class="full" style="opacity: 1;">
                                    <img src="../assets/img/jane-jack-p-bucket.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-mod hashtag-copy right">
                        <div class="copy">
                            <div class="info">
                                <div class="text-wrap">
                                    <h2>Jack/Jane P. Bucket @ ROZE HUIS</h2>
                                    <p class="black">
                                        <a href="artists.html#janejackpbucket" class="black" style="border-bottom: 1px solid black">Jack/Jane P. Bucket</a>
                                    </p>
                                    <p class="grey">
                                        Opening: Zaterdag 5 oktober: 20.00<br>
                                        Donderdag - zaterdag: 14.00- 18.00<br>

                                        <a style="border-bottom: none">Entree: gratis</a><br>
                                        <br>
                                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#rozehuis"> Roze Huis </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hashtag-row home-row hashtag-content clearfix" id="expoplak">
                <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape right">
                        <div class="hashtag">
                            <div class="icon">
                                <div class="full" style="opacity: 1;">
                                    <img src="../assets/img/rowena-buur.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-mod hashtag-copy left">
                        <div class="copy">
                            <div class="info">
                                <div class="text-wrap">
                                    <h2>Rowena Buur @ CAFE DE PLAK</h2>
                                    <p class="black">
                                        <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid black">Rowena Buur</a>
                                    </p>
                                    <p class="grey">
                                        Maandag - Zondag: 12:00  - 23:00<br>


                                        <a style="border-bottom: none">Entree: gratis</a><br>
                                        <br>
                                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#cafedeplak"> Café de Plak</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hashtag-row home-row hashtag-content clearfix" id="expokunstmagazijn">
                <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape right">
                        <div class="hashtag">
                            <div class="icon">
                                <div class="full" style="opacity: 1;">
                                    <img src="../assets/img/julius-thissen.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-mod hashtag-copy left">
                        <div class="copy">
                            <div class="info">
                                <div class="text-wrap">
                                    <h2>Gabriel Fontana - Julius Thissen @ Kunstmagazijn </h2>
                                    <p class="black">
                                        <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid black">Gabriel Fontana</a> -
                                        <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid black">Julius Thissen</a>
                                    </p>
                                    <p class="grey">
                                        Woensdag - Zondag: 12:00 – 17:00<br>


                                        <a style="border-bottom: none">Entree: gratis</a><br>
                                        <br>
                                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#kunstmagazijn"> Kunstmagazijn</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hashtag-row home-row hashtag-content clearfix" id="expoo42">
                <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape left">
                        <div class="hashtag">
                            <div class="icon">
                                <div class="full" style="opacity: 1;">
                                    <img src="../assets/img/sorjon-azouz.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-mod hashtag-copy right">
                        <div class="copy">
                            <div class="info">
                                <div class="text-wrap">
                                    <h2>Sarjon Azouz @ FILMHUIS O42 </h2>
                                    <p class="black">
                                        <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid black">Sarjon Azouz</a>
                                    </p>
                                    <p class="grey">
                                        Maandag - Zondag: 11:45 - 22:30<br>

                                        <a style="border-bottom: none">Entree: gratis</a><br>
                                        <br>
                                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#o42"> Filmhuis o42</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hashtag-row home-row hashtag-content clearfix" id="exposingularart">
                <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape right">
                        <div class="hashtag">
                            <div class="icon">
                                <div class="full" style="opacity: 1;">
                                    <img src="../assets/img/temp1.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-mod hashtag-copy left">
                        <div class="copy">
                            <div class="info">
                                <div class="text-wrap">
                                    <h2>MC de Waal @ Singular Art</h2>
                                    <p class="black">
                                        <a href="artists.html#mcdewaal" class="black" style="border-bottom: 1px solid black">MC de Waal</a>
                                    </p>
                                    <p class="grey">
                                        Maandag - Zondag: 12:00  - 23:00<br>


                                        <a style="border-bottom: none">Entree: gratis</a><br>
                                        <br>
                                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#singularart"> Singular Art</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br><br><br><br><br><br>
        </div>
    </section>

    @include('partials.content-page')
  @endwhile
@endsection
