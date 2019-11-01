{{--
Template Name: Program
--}}

@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <div class="programs">

            <!--- VRIJDAG 4/10 --->
            @foreach($program as $date)
            <div id="vrijdag410">
                <div class="column40 padding60 ">
                    <h2 class="white">{{$date['date']}}</h2>
                </div>
@dump($date)

                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down" id="air">
                            <a href="events.html#air">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="events.html#openingair">{{$eventsblock['eventtitle']}}</a></h4>
                            <h6>19:30 – 22:30</h6>
                            <p>
                                Op vrijdag 4 oktober trapt het Qtopia Queer Arts Festival af met een opening bij POPOP.
                            </p>
                            <a href="locations.html#popop" style="color: #5bbe83"> POPUP</a>
                            <br>
                            <a href="events.html#air"><span>Lees meer</span></a>
                        </li>

                        <li class="scroll-alert animate-down" id="queeringsansebastian">

                            <a href="events.html#queeringsansebastian">
                                <img src="../assets/img/queerin-san-sebastian.png" style="width: 90%;" />
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
                    </ul>
                </div>

            </div>
          @endforeach


            <!--- ZATERDAG 5/10 --->
            <div id="zaterdag510">
                <div class="column40 padding60 ">
                    <h2 class="white">Zaterdag 5 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#queeringstsebas">
                                <img src="../assets/img/queerin-san-sebastian.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Queering St Sebastian</a></h4>
                            <h6>13.00 - 17.00</h6>
                            <p>
                                Tijdens het Qtopia Queer Arts Festival zal kunstenaar Pluck zes dagen in Museum het Valkhof verblijven en de collectie onderzoeken op Queerness.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#hetvalkhof"> Museum het Valkhof</a>
                            <br>
                            <a href="events.html#queeringstsebas">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p>
                                We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#artisnotpresent">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#kunstmagazijn">
                                <img src="../assets/img/julius-thissen.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Opening Kunstmagazijn
                        <br>Gabriel Fontana en Julius Thissen</a></h4>
                            <h6>15:00 – 17:00</h6>
                            <p>
                                Op de eerste officiële festivaldag van Qtopia 2019 opent Kunstmagazijn haar deuren voor de opening van de expositie ‘What if we fail to play by the rules of the game?’
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"> Kunstmagazijn</a>
                            <br>
                            <a href="events.html#kunstmagazijn">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#openingneus">
                                <img src="../assets/img/tabita-rezaire.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Opening NEUS</a></h4>
                            <h6>19:00 - 03:30</h6>
                            <p>
                                NEUS presenteert met trots het officiële openingsfeest van de tweede editie van het Qtopia Queer Arts festival!
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#openingneus">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#nachtvandeommetjes">
                                <img src="../assets/img/temp2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Nacht van de Ommetjes</a></h4>
                            <h6>20:00 - 22:00</h6>
                            <p>
                                Tijdens de nacht van de ommetjes presenteren we met trots de locaties van de tweede editie van het Qtopia Queer Arts festival!
                            </p>
                            <a href="events.html#nachtvandeommetjes">Lees meer</a>
                        </li>

                    </ul>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exposingularart">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">MC de Waal @ Singular Art</a></h4>
                            <h6>10:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoo42">
                                <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                            <h6>11:45 – 22:30</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporuis">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ RUIS</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoklinker">
                                <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                            <h6>12.00 - 21:00</h6>
                            <p class="white">
                                <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exponeus">
                                <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ NEUS</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                        </li>

                    </ul>
                </div>

            </div>

            <!--- ZONDAG 6/10 --->
            <div id="zondag610">
                <div class="column40 padding60 ">
                    <h2 class="white">Zondag 6 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p>
                                We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#artisnotpresent">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#queerresiliance">
                                <img src="../assets/img/temp2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Queer resilience - Spoken word workshop</a></h4>
                            <h6>13:30 - 16:30</h6>
                            <p>
                                Het ritme van de woorden dat je meedraagt, je rustig neerlegt en voor je zorgt. Woorden die je omhelzen, toedekken of juist afzetten tegen wat er is.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus">NEUS</a>
                            <br>
                            <a href="events.html#queerresiliance">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#avondwoorden">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Avondwoorden</a></h4>
                            <h6>19:00 - 22:00</h6>
                            <p>
                                Is queerness een universeel gevoel? Wat maakt dat we ons niet deel van de incrowd voelen en is dat erg?
                            </p>
                            <a style="color: #5bbe83" href="locations.html#debijstand"> DE BIJSTAND</a>
                            <br>
                            <a href="events.html#avondwoorden">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#queeringstsebas">
                                <img src="../assets/img/queerin-san-sebastian.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Queering St Sebastian</a></h4>
                            <h6>13.00 - 17.00</h6>
                            <p>
                                Tijdens het Qtopia Queer Arts Festival zal kunstenaar Pluck zes dagen in Museum het Valkhof verblijven en de collectie onderzoeken op Queerness.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#hetvalkhof"> Museum het Valkhof</a>
                            <br>
                            <a href="events.html#queeringstsebas">Lees meer</a>
                        </li>

                    </ul>

                </div>

                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exposingularart">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">MC de Waal @ Singular Art</a></h4>
                            <h6>10:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoo42">
                                <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                            <h6>11:45 – 22:30</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporuis">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ RUIS</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoklinker">
                                <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                            <h6>12.00 - 21:00</h6>
                            <p class="white">
                                <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exponeus">
                                <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ NEUS</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!--- MAANDAG 7/10 --->
            <div id="maandag710">

                <div class="column40 padding60 ">
                    <h2 class="white">Maandag 7 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!--- DINSDAG 8/10 --->
            <div id="dinsdag810">
                <div class="column40 padding60 ">
                    <h2 class="white">Dinsdag 8 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#schrewher">
                                <img src="../assets/img/schrew-her.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">SHREW HER</a></h4>
                            <h6>19:30</h6>
                            <p>
                                Aan de vooravond van coming out day presenteert LUX in samenwerking met Schoolsout en het Qtopia Queer Arts Festival de wervelende theatervoorstelling Shrew Her.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#lux"> Lux</a>
                            <br>
                            <a href="events.html#schrewher">Lees meer</a>
                        </li>

                    </ul>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>

                </button>
                <div class="content-program">
                    <ul>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!--- WOENSDAG 9/10 --->
            <div id="woensdag910">
                <div class="column40 padding60 ">
                    <h2 class="white">Woensdag 9 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="#">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Artist Talk met Pluk en Mir</a></h4>
                            <h6>16:00 - 17:00</h6>
                            <p>

                            </p>
                            <a style="color: #5bbe83" href="locations.html#hetvalkhof"> Museum het Valkhof</a>
                            <br>

                        </li>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#queeringstsebas">
                                <img src="../assets/img/queerin-san-sebastian.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Queering St Sebastian</a></h4>
                            <h6>13.00 - 17.00</h6>
                            <p>
                                Tijdens het Qtopia Queer Arts Festival zal kunstenaar Pluck zes dagen in Museum het Valkhof verblijven en de collectie onderzoeken op Queerness.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#hetvalkhof"> Museum het Valkhof</a>
                            <br>
                            <a href="events.html#queeringstsebas">Lees meer</a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>

                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!--- DONDERDAG 10/10 --->
            <div id="donderdag1010">
                <div class="column40 padding60 ">
                    <h2 class="white">Donderdag 10 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p>
                                We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#artisnotpresent">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#latenweheteensafespacenoemen">
                                <img src="../assets/img/temp2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">"Laten we het een safe space noemen!"</a></h4>
                            <h6>19:30 - 22:00</h6>
                            <p>
                                “Laten we het een safe space noemen!” is een onderzoeksprogramma waarin vier programmamakers (Suus te Braak, Steff Geelen, Richard Kofi en Kim van Kaam) in verschillende vor men met het publiek, hun gasten en elkaar in gesprek gaan over gewetensthema’s die hen bezighouden."
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"> o42</a>
                            <br>
                            <a href="events.html#latenweheteensafespacenoemen">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#queeringstsebas">
                                <img src="../assets/img/queerin-san-sebastian.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Queering St Sebastian</a></h4>
                            <h6>13.00 - 17.00</h6>
                            <p>
                                Tijdens het Qtopia Queer Arts Festival zal kunstenaar Pluck zes dagen in Museum het Valkhof verblijven en de collectie onderzoeken op Queerness.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#hetvalkhof"> Museum het Valkhof</a>
                            <br>
                            <a href="events.html#queeringstsebas">Lees meer</a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exposingularart">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">MC de Waal @ Singular Art</a></h4>
                            <h6>10:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoo42">
                                <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                            <h6>11:45 – 22:30</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporuis">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ RUIS</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoklinker">
                                <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                            <h6>12.00 - 21:00</h6>
                            <p class="white">
                                <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exponeus">
                                <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ NEUS</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporozehuis">
                                <img src="../assets/img/jane-jack-p-bucket.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jack/Jane P. Bucket @ ROZE HUIS</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p class="white">
                                <a href="artists.html#janejackpbucket" class="black" style="border-bottom: 1px solid white">Jack/Jane P. Bucket</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#rozehuis"><i class="fa fa-map-marker"></i> Roze Huis</a>
                        </li>



                    </ul>
                </div>
            </div>

            <!--- VRIJDAG 11/10 --->
            <div id="vrijdag1110">
                <div class="column40 padding60 ">
                    <h2 class="white">Vrijdag 11 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p>
                                We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#artisnotpresent">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Feestje in de Plak</a></h4>
                            <h6>22:00 – 03:00</h6>
                            <p>

                            </p>
                            <a style="color: #5bbe83" href="locations.html#deplak"> Café de Plak</a>
                            <br>

                        </li>
                    </ul>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exposingularart">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">MC de Waal @ Singular Art</a></h4>
                            <h6>10:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoo42">
                                <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                            <h6>11:45 – 22:30</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporuis">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ RUIS</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoklinker">
                                <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                            <h6>12.00 - 21:00</h6>
                            <p class="white">
                                <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporozehuis">
                                <img src="../assets/img/jane-jack-p-bucket.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jack/Jane P. Bucket @ ROZE HUIS</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p class="white">
                                <a href="artists.html#janejackpbucket" class="black" style="border-bottom: 1px solid white">Jack/Jane P. Bucket</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#rozehuis"><i class="fa fa-map-marker"></i> Roze Huis</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exponeus">
                                <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ NEUS</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!--- ZATERDAG 12/10 --->
            <div id="zaterdag1210">
                <div class="column40 padding60 ">
                    <h2 class="white">Zaterdag 12 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#DissidentPedagogy">
                                <img src="../assets/img/dissident-pedagogy-visu.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Dissident Pedagogy - symposium door Gabriel Fontana Uhuru</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p>
                                Het symposium Dissident Pedagogy brengt kunstenaars en beoefenaars van het onderwijs samen om te onderzoeken hoe school functioneert als een ruimte waar ongelijkwaardige, door gender ingegeven machtsstructuren worden gereproduceerd
                            </p>
                            <a style="color: #5bbe83" href="locations.html#042"> 042</a>
                            <br>
                            <a href="events.html#DissidentPedagogy">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                            <h6>14:00 – 17:00</h6>
                            <p>
                                We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#artisnotpresent">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#discobal">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Discobal #3 :All</a></h4>
                            <h6>20:30 - 23:30</h6>
                            <p>
                                Voor het performancekunstprogramma Discobal nodigen we kunstenaars uit om te reflecteren op vraagstukken uit de maatschappij.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#extrapool"> Extrapool</a>
                            <br>
                            <a href="events.html#discobal">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#queersphere">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Queer Sphere - feestje in de Onderbroek</a></h4>
                            <h6>23:00 - 03:00 </h6>
                            <p>
                                Een dag na Coming Out Day is het tijd om neer te dalen en te landen bij Queer Sphere.
                            </p>
                            <a style="color: #5bbe83" href="#"> De Onderbroek, Tweede Walstraat 21, 6511LN Nijmegen</a>
                            <br>
                            <a href="events.html#queersphere">Lees meer</a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exposingularart">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">MC de Waal @ Singular Art</a></h4>
                            <h6>10:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoo42">
                                <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                            <h6>11:45 – 22:30</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporuis">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ RUIS</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoklinker">
                                <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                            <h6>12.00 - 21:00</h6>
                            <p class="white">
                                <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#rozehuis">
                                <img src="../assets/img/jane-jack-p-bucket.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jack/Jane P. Bucket @ ROZE HUIS</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p class="white">
                                <a href="artists.html#janejackpbucket" class="black" style="border-bottom: 1px solid white">Jack/Jane P. Bucket</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#rozehuis"><i class="fa fa-map-marker"></i> Roze Huis</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exponeus">
                                <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ NEUS</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!--- ZONDAG 13/10 --->
            <div id="zondag1310">
                <div class="column40 padding60 ">
                    <h2 class="white">Zondag 13 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">

                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="">
                                <img src="../assets/img/transscreen.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Kairos Dirt &amp; the Errant Vacuum - film curated by Transcreen</a></h4>
                            <h6>17:00 - 18:30</h6>
                            <p>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#042"> O42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p>
                                We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#artisnotpresent">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">To Queer or not to Queer - lezing door Crystal Hassel</a></h4>
                            <h6>19:30 - 21:30</h6>
                            <p>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#042"> O42</a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exposingularart">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">MC de Waal @ Singular Art</a></h4>
                            <h6>10:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoo42">
                                <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                            <h6>11:45 – 22:30</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporuis">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ RUIS</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoklinker">
                                <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                            <h6>12.00 - 21:00</h6>
                            <p class="white">
                                <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exponeus">
                                <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ NEUS</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!--- MAANDAG 14/10 --->
            <div id="maandag1410">
                <div class="column40 padding60 ">
                    <h2 class="white">Maandag 14 oktober</h2>
                </div>
                  <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                    </ul>
                </div>
            </div>

            <!--- DINSDAG 15/10 --->
            <div id="dinsdag1510">
                <div class="column40 padding60 ">
                    <h2 class="white">Dinsdag 15 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>



                    </ul>
                </div>
            </div>

            <!--- WOENSDAG 16/10 --->
            <div id="woensdag1610">
                <div class="column40 padding60 ">
                    <h2 class="white">Woensdag 16 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>


                    </ul>
                </div>
            </div>

            <!--- DONDERDAG 17/10 --->
            <div id="donderdag1710">
                <div class="column40 padding60 ">
                    <h2 class="white">Donderdag 17 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="events.html#artisnotpresent">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p>
                                We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#artisnotpresent">Lees meer</a>
                        </li>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#queertango">
                                <img src="../assets/img/queer-tango.png" style="width: 90%;" />
                            </a>
                            <h4><a href="events.html#queertango">Dansavond Queer Tango</a></h4>
                            <h6>20:00 – 22:00</h6>
                            <p>
                                Als de bandoneon begint te spelen, neemt de Argentijnse tango bezit van lijf en leden.
                            </p>
                            <a style="color: #5bbe83"> El Corte Tango, Graafseweg 108, Nijmegen</a>
                            <a href="events.html#queertango">Lees meer</a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exposingularart">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">MC de Waal @ Singular Art</a></h4>
                            <h6>10:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoo42">
                                <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                            <h6>11:45 – 22:30</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporuis">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ RUIS</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoklinker">
                                <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                            <h6>12.00 - 21:00</h6>
                            <p class="white">
                                <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exponeus">
                                <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ NEUS</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#rozehuis">
                                <img src="../assets/img/jane-jack-p-bucket.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jack/Jane P. Bucket @ ROZE HUIS</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p class="white">
                                <a href="artists.html#janejackpbucket" class="black" style="border-bottom: 1px solid white">Jack/Jane P. Bucket</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#rozehuis"><i class="fa fa-map-marker"></i> Roze Huis</a>
                        </li>



                    </ul>
                </div>
            </div>

            <!--- VRIJDAG 18/10 --->
            <div id="vrijdag1810">
                <div class="column40 padding60 ">
                    <h2 class="white">Vrijdag 18 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="events.html#artisnotpresent">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p>
                                We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#artisnotpresent">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="">
                                <img src="../assets/img/temp2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Juicy words &amp; bending bodies</a></h4>
                            <h6>19:30 – 22:00</h6>

                            <a style="color: #5bbe83"> Bibliotheek de Cinemariënburg</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#dollhouse">
                                <img src="../assets/img/shape-dollhouse.png" style="width: 90%;" />
                            </a>
                            <h4><a href="events.html#dollhouse">Dollhouse Queer Party</a></h4>
                            <h6>23:00 - 03:00</h6>
                            <p>
                                Come as you are Dollhouse Queerparty is een alternatief dansfeest voor freaks queers, drags, muziekliefhebbers en iedereen die zich hierdoor aangesproken voelt.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#brebl"> Brebl</a>
                            <br>
                            <a href="events.html#dollhouse">Lees meer</a>
                        </li>

                    </ul>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exposingularart">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">MC de Waal @ Singular Art</a></h4>
                            <h6>10:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoo42">
                                <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                            <h6>11:45 – 22:30</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporuis">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ RUIS</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoklinker">
                                <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                            <h6>12.00 - 21:00</h6>
                            <p class="white">
                                <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exponeus">
                                <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ NEUS</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#rozehuis">
                                <img src="../assets/img/jane-jack-p-bucket.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jack/Jane P. Bucket @ ROZE HUIS</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p class="white">
                                <a href="artists.html#janejackpbucket" class="black" style="border-bottom: 1px solid white">Jack/Jane P. Bucket</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#rozehuis"><i class="fa fa-map-marker"></i> Roze Huis</a>
                        </li>



                    </ul>
                </div>
            </div>

            <!--- ZATERDAG 19/10 --->
            <div id="zaterdag1910">
                <div class="column40 padding60 ">
                    <h2 class="white">Zaterdag 19 oktober</h2>
                </div>
                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="events.html#dragup">
                                <img src="../assets/img/temp2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="events.html#dragup">Workshop Drag-up</a></h4>
                            <h6>11:00 - 19:00</h6>
                            <p>
                                Eleonora Johanna Remmen, ook wel bekend als ELLE Gazelle is een performance artiest en drag performer.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#dragup">Lees meer</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="events.html#artisnotpresent">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="events.html#artisnotpresent">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p>
                                We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                            <br>
                            <a href="events.html#artisnotpresent">Lees meer</a>
                        </li>
                    </ul>
                </div>

                <button type="button" class="collapsible">
                    <div class="title">
                        <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>

                    </div>
                </button>
                <div class="content-program">
                    <ul>
                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exposingularart">
                                <img src="../assets/img/temp1.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">MC de Waal @ Singular Art</a></h4>
                            <h6>10:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoo42">
                                <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                            <h6>11:45 – 22:30</h6>
                            <p class="white">
                                <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exporuis">
                                <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ RUIS</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expokunstmagazijn">
                                <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                            <h6>12:00 – 17:00</h6>
                            <p class="white">
                                <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoklinker">
                                <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                            <h6>12.00 - 21:00</h6>
                            <p class="white">
                                <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#expoplak">
                                <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                            <h6>12.00 - 23:00</h6>
                            <p class="white">
                                <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#exponeus">
                                <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">EXPO @ NEUS</a></h4>
                            <h6>13:00 – 18:00</h6>
                            <p class="white">
                                <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                        </li>

                        <li class="scroll-alert animate-down">
                            <a href="exposities.html#rozehuis">
                                <img src="../assets/img/jane-jack-p-bucket.png" style="width: 90%;" />
                            </a>
                            <h4><a href="">Jack/Jane P. Bucket @ ROZE HUIS</a></h4>
                            <h6>13:00 – 21:00</h6>
                            <p class="white">
                                <a href="artists.html#janejackpbucket" class="black" style="border-bottom: 1px solid white">Jack/Jane P. Bucket</a>
                            </p>
                            <a style="color: #5bbe83" href="locations.html#rozehuis"><i class="fa fa-map-marker"></i> Roze Huis</a>
                        </li>



                    </ul>
                </div>
                </div>

                <!--- ZONDAG 20/10 --->
            <div id="zondag2010">
                    <div class="column40 padding60 ">
                        <h2 class="white">Zondag 20 oktober</h2>
                    </div>
                    <button type="button" class="collapsible">
                        <div class="title">
                            <h4 class="green angle">Evenementen <i class="fa fa-angle-down"></i></h4>
                        </div>
                    </button>
                    <div class="content-program">
                        <ul>
                            <li class="scroll-alert animate-down">
                                <a href="events.html#artisnotpresent">
                                    <img src="../assets/img/temp1.png" style="width: 90%;" />
                                </a>
                                <h4><a href="events.html#artisnotpresent">The Artist is Not Present - Mpingo Waridi Uhuru</a></h4>
                                <h6>13:00 – 21:00</h6>
                                <p>
                                    We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.
                                </p>
                                <a style="color: #5bbe83" href="locations.html#neus"> NEUS</a>
                                <br>
                                <a href="events.html#artisnotpresent">Lees meer</a>
                            </li>

                            <li class="scroll-alert animate-down">
                                <a href="">
                                    <img src="../assets/img/temp2.png" style="width: 90%;" />
                                </a>
                                <h4><a href="">Artist Talk M.C De Waal</a></h4>
                                <h6>16:00 - 18:00</h6>
                                <p>

                                </p>
                                <a style="color: #5bbe83"> Singular Art</a>
                            </li>

                            <li class="scroll-alert animate-down">
                                <a href="">
                                    <img src="../assets/img/temp1.png" style="width: 90%;" />
                                </a>
                                <h4><a href="">Finissage (feest voor alle deelnemers)</a></h4>
                                <h6>17:00 - 21:00</h6>
                                <p>

                                </p>
                                <a style="color: #5bbe83"> NEUS</a>
                            </li>
                        </ul>

                    </div>
                    <button type="button" class="collapsible">
                        <div class="title">
                            <h4 class="green angle">Exposities <i class="fa fa-angle-down"></i></h4>
                        </div>
                    </button>
                    <div class="content-program">
                        <ul>
                            <li class="scroll-alert animate-down">
                                <a href="exposities.html#exposingularart">
                                    <img src="../assets/img/temp1.png" style="width: 90%;" />
                                </a>
                                <h4><a href="">MC de Waal @ Singular Art</a></h4>
                                <h6>10:00 – 18:00</h6>
                                <p class="white">
                                    <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">MC de Waal</a>
                                </p>
                                <a style="color: #5bbe83" href="locations.html#singularart"><i class="fa fa-map-marker"></i> Singular Art</a>
                            </li>

                            <li class="scroll-alert animate-down">
                                <a href="exposities.html#expoo42">
                                    <img src="../assets/img/sorjon-azouz.png" style="width: 90%;" />
                                </a>
                                <h4><a href="">Sarjon Azouz @ FILMHUIS O42</a></h4>
                                <h6>11:45 – 22:30</h6>
                                <p class="white">
                                    <a href="artists.html#sarjonazouz" class="black" style="border-bottom: 1px solid white">Sarjon Azouz</a>
                                </p>
                                <a style="color: #5bbe83" href="locations.html#o42"><i class="fa fa-map-marker"></i> Filmhuis o42</a>
                            </li>

                            <li class="scroll-alert animate-down">
                                <a href="exposities.html#exporuis">
                                    <img src="../assets/img/geowyeth.png" style="width: 90%;" />
                                </a>
                                <h4><a href="">EXPO @ RUIS</a></h4>
                                <h6>12:00 – 17:00</h6>
                                <p class="white">
                                    <a href="artists.html#geowyeth" class="black" style="border-bottom: 1px solid white">Geo Wyeth</a> -
                                    <a href="artists.html#johannavanitamonk" class="black" style="border-bottom: 1px solid white">Johanna + Vanita Monk</a>
                                </p>
                                <a style="color: #5bbe83" href="locations.html#ruis"><i class="fa fa-map-marker"></i> RUIS</a>
                            </li>

                            <li class="scroll-alert animate-down">
                                <a href="exposities.html#expokunstmagazijn">
                                    <img src="../assets/img/gabriel-frontana-2.png" style="width: 90%;" />
                                </a>
                                <h4><a href="">EXPO @ KUNSTMAGAZIJN</a></h4>
                                <h6>12:00 – 17:00</h6>
                                <p class="white">
                                    <a href="artists.html#gabrielfontana" class="black" style="border-bottom: 1px solid white">Gabriel Fontana</a> -
                                    <a href="artists.html#juliusthissen" class="black" style="border-bottom: 1px solid white">Julius Thissen</a>
                                </p>
                                <a style="color: #5bbe83" href="locations.html#kunstmagazijn"><i class="fa fa-map-marker"></i> KUNSTMAGAZIJN</a>
                            </li>

                            <li class="scroll-alert animate-down">
                                <a href="exposities.html#expoklinker">
                                    <img src="../assets/img/jayn-bagdoonis.png" style="width: 90%;" />
                                </a>
                                <h4><a href="">Jayn Bagdoonis @ De Klinker</a></h4>
                                <h6>12.00 - 21:00</h6>
                                <p class="white">
                                    <a href="artists.html#jaynbagdoonis" class="black" style="border-bottom: 1px solid white">Jayn Bagdoonis</a>
                                </p>
                                <a style="color: #5bbe83" href="locations.html#klinker"><i class="fa fa-map-marker"></i> De Klinker</a>
                            </li>

                            <li class="scroll-alert animate-down">
                                <a href="exposities.html#expoplak">
                                    <img src="../assets/img/rowena-buur.png" style="width: 90%;" />
                                </a>
                                <h4><a href="">Rowena Buur @ CAFE DE PLAK</a></h4>
                                <h6>12.00 - 23:00</h6>
                                <p class="white">
                                    <a href="artists.html#rowenabuur" class="black" style="border-bottom: 1px solid white">Rowena Buur</a>
                                </p>
                                <a style="color: #5bbe83" href="locations.html#cafedeplak"><i class="fa fa-map-marker"></i> Café de Plak</a>
                            </li>

                            <li class="scroll-alert animate-down">
                                <a href="exposities.html#exponeus">
                                    <img src="../assets/img/robin-ramos.png" style="width: 90%;" />
                                </a>
                                <h4><a href="">EXPO @ NEUS</a></h4>
                                <h6>13:00 – 18:00</h6>
                                <p class="white">
                                    <a href="artists.html#robinramos" class="black" style="border-bottom: 1px solid white">Robin Ramos</a> -
                                    <a href="artists.html#tabitarezaire" class="black"  style="border-bottom: 1px solid white">Tabita Rezaire</a> –
                                    <a href="artists.html#noamyoungrakson" class="black" style="border-bottom: 1px solid white">Noam Youngrak Son</a> -
                                    <a href="artists.html#vitaevangelista" class="black" style="border-bottom: 1px solid white">Vita Evangelista</a> -
                                    <a href="artists.html#mpingowaridiuhuru" class="black" style="border-bottom: 1px solid white">Mpingo Waridi Uhuru</a>
                                </p>
                                <a style="color: #5bbe83" href="locations.html#neus"><i class="fa fa-map-marker"></i> NEUS</a>
                            </li>


                        </ul>
                    </div>
                </div>

               </div>

            <br><br><br><br><br><br>

            <div class="our-mission">
               <div class="shape1-container parallax" data-parallax-distance="500">
                   <div class="shape1 parallax"></div>
                </div>
                <div class="shape2-container parallax" data-parallax-distance="100">
                    <div class="shape2 parallax"></div>
                </div>

                <div class="center800 contact-area"><br>
                    <h3 class="white">Meer zien van ons programma?</h3>
    			 <p class="white">Download ons programmaboekje voor een volledig overzicht van alle evenementen, exposities en artiesten. Het programmaboekje is alleen beschikbaar in het Engels.</p>
                    <a href="../assets/pdf/progrmma2019lr.pdf"><b class="white">Download </b><i class="fa fa-file-pdf-o"></i></a>

                    <br><br>
    			<div style="clear: both;"></div>
    		</div><!--center800-->
    	</div>

    @include('partials.content-page')

@endsection
