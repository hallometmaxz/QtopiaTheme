{{--
Template Name: Events
--}}

@extends('layouts.appwhite')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')


    <div class="content top-padding discover">
      <div class="two-column-header scroll-alert animate-down active">
        <div class="left">
          <h1 class="green">Events</h1>
        </div>


      </div>

    </div>

    <section id="page" class="landing loaded padding-bottom">

      <div class="content-wrapper clearfix">


        <div class="hashtag-row home-row hashtag-content clearfix" id="air">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">
                <div class="icon">
                  <div class="full" style="opacity: 1;">
                    <img src="@asset('images/temp2.png')">
                  </div>
                </div>
              </div>
              <div class="hashtag-artists">
                <div class="inner-wrapper clearfix">
                  <div class="artist artist-item">
                    <div class="text-wrap">
                      <h3>Opening A I R</h3>
                      <p class="black">Op vrijdag 4 oktober trapt het Qtopia Queer Arts Festival af met een opening bij POPOP. De artists in residence (AIR) van dit jaar zullen het werk presenteren dat zij creëerden gedurende  hun werkweek. Door in een gedeelde ruimte of in onlangs ontstane paren te werken, werden de kunstenaars uitgedaagd om nieuwe vormen van expressie en presentatie te onderzoeken.<br><br>

                        Tijdens de opening zullen de air-paren het resultaat van hun werkweek presenteren en verder ingaan op hun kunstenaarspraktijk én het werk dat zij speciaal voor Qtopia realiseerden. Qtopia verwelkomt met trots Geo Wyeth en Johanna en Vanita Monk, die samen werkten aan een auditief werk in de experimentele tentoonstellingsruimte RUIS en Vita Evangelista en Astrit Ismaili; de artists in residence die gekoppeld zijn aan POPOP.<br><br>

                        Hierna is er tijd voor drankjes en muziek.

                      </p>

                    </div>
                  </div>
                  <div class="artist">
                    <div class="text-wrap">
                      <h5 class="fboldup close-artists">Close
                        <span class="icon-close"></span>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy notonemore">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Opening AIR</h2>
                    <p class="black">Op vrijdag 4 oktober trapt het Qtopia Queer Arts Festival af met een opening bij POPOP.</p>
                    <p class="grey">
                      Vrijdag 4 oktober: 19:30 - 22:00<br>
                      <a style="border-bottom: none">Entree: gratis</a><br>
                      <br>
                      <a><i class="fa fa-map-marker"></i></a><a href="locations.html#popop"> POPOP</a>
                    </p>
                    <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="queeringstsebas">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape left">
              <div class="hashtag blacklivesmatter" data-hashtag="blacklivesmatter">
                <div class="icon">
                  <img src="@asset('images/queerin-san-sebastian.png')">
                </div>
              </div>
              <div class="hashtag-artists">
                <div class="inner-wrapper clearfix">
                  <div class="artist artist-item">
                    <div class="text-wrap">
                      <h3>Queering San Sebastian</h3>
                      <p class="black">Tijdens het Qtopia Queer Arts Festival zal kunstenaar Pluck zes dagen in Museum het Valkhof verblijven en de collectie onderzoeken op Queerness. Tegen over de San Sebastian zoekt Pluck de dialoog met de collectie, bezoekers, filosofen en andere kunstenaars.<br><br>

                        Opvattingen over queerness, queerness in relatie tot het museum worden onderzocht en bevraagd. De collectie, de ruimte of een potentieel queer kunst- en/of archeologisch museum: “Hoe zou dit eruit zien?”  Ook de term “queer” zal worden onderzocht, in een doorlopende dialoog met publiek, in dialoog met Mir Marius en Welmoed Mulder.  Filosofische bagage zal worden uitgepakt. o.a. Nietzsche, Barad en Derrida.  Een spel met definiëring, zoeken naar betekenis, een spel met taal.<br><br>

                        Tegenover de sculptuur van San Sebastian zal een onderzoek groeien in beeld, tekst en geluid.

                      </p>

                    </div>
                  </div>
                  <div class="artist">
                    <div class="text-wrap">
                      <p class="grey">
                        <b>5 oktober</b> <br> samenwerking Welmoed Jonas Mulder en Mir Marinus<br>
                        <b>6 oktover</b> <br> samenwerking Welmoed Jonas Mulder<br>
                        <b>9 oktober</b> <br> performance samenwerking Mir Marinus<br>
                      </p>
                      <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="home-mod hashtag-copy right">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Queering San Sebastian</h2>

                    <p class="black">Tijdens het Qtopia Queer Arts Festival zal kunstenaar Pluck zes dagen in Museum het Valkhof verblijven en de collectie onderzoeken op Queerness.</p>
                    <p class="grey">
                      Vrijdag 4 okt. 13:00 - 17:00<br>
                      Zaterdag 5 okt. 11:00 - 17:00<br>
                      Zondag 6 okt.  11:00 - 17:00<br>
                      Woensdag 9 okt. 11:00 - 17:00<br>
                      Donderdag 10 okt 11:00 - 17:00<br>
                      <a style="border-bottom: none">Entree: gratis</a><br><br>

                      <a><i class="fa fa-map-marker"></i></a><a href="locations.html#hetvalkhof"> Museum het Valkhof</a>
                    </p>

                    <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="artistisnotpresent">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">
                <div class="icon">
                  <div class="full" style="opacity: 1;">
                    <img src="@asset('images/temp1.png')">
                  </div>
                </div>
              </div>
              <div class="hashtag-artists">
                <div class="inner-wrapper clearfix">
                  <div class="artist artist-item">
                    <div class="text-wrap">
                      <h3>The Artist is not Present</h3>
                      <p class="black">We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand. Mpingo Uhuru is een Afrikaans-Amerikaanse
                        schrijver en dichter die vastzit in een Californische mannengevangenis, als gevolg van de ‘Three Strikes Law’. Ze heeft een poëziebundel uitgebracht (‘Sentiments from a concrete age’, onder haar voormalige naam
                        Ebony Delaney) die een waaier van onderwerpen en sociale thema's beslaat, van het houden en accepteren van jezelf als transpersoon tot de dagelijkse realiteit in de gevangenis. Recentelijk verscheen haar urban
                        novel ‘Shaniqua’s world’.<br><br>

                        Mpingo Uhuru heeft al meer dan twintig romans geschreven, die nog niet zijn gepubliceerd. Omdat ze opgesloten zit, beschikt ze niet over een computer. Het omzetten van haar
                        werk naar een digitaal bestand is dan een noodzakelijke stap naar het presenteren van haar werk aan uitgeverijen. <br><br>

                        Tevens zal er ook aanvullende informatie te vinden zijn over het Amerikaanse gevangenissysteem
                        en er zullen LGBTQ+ zines te vinden zijn van een schrijverscollectief op Death Row, San Quentin State Prison (USA).

                      </p>
                    </div>
                  </div>
                  <div class="artist">
                    <div class="text-wrap">
                      <p class="grey">Open:<br>
                        do - za: 13:00 - 21:00<br>
                        zo: 13:00 - 18:00</p>
                        <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="home-mod hashtag-copy left">
                <div class="copy breaktheinternet">
                  <div class="info">
                    <div class="text-wrap">
                      <h2>The Artist is not Present </h2>
                      <p class="black">We nodigen bezoekers van het Qtopia Queer Arts Festival uit om plaats te nemen en uit solidariteit het werk van transgender kunstenaar Mpingo Uhuru om te zetten in een digitaal bestand.</p>
                      <p class="grey">
                        Vrijdag 4 oktober - Zondag 20 oktober<br>
                        Donderdag - Zaterdag: 13:00 - 21:00<br>
                        Zondag: 13:00 - 18:00
                        <br>
                        <a style="border-bottom: none">Entree: gratis</a><br>
                        <br>
                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#neus"> NEUS</a>
                      </p>
                      <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="hashtag-row home-row hashtag-content clearfix" id="kunstmagazijn">
            <div class="inner-wrapper">
              <div class="home-mod hashtag-shape left">
                <div class="hashtag">
                  <div class="icon">
                    <div class="full" style="opacity: 1;">
                      <img src="@asset('images/julius-thissen.png')">
                    </div>
                  </div>
                </div>
                <div class="hashtag-artists">
                  <div class="inner-wrapper clearfix">
                    <div class="artist artist-item">
                      <div class="text-wrap">
                        <h3>Opening Kunstmagazijn</h3>
                        <p class="black">Op de eerste officiële festivaldag van Qtopia 2019 opent         Kunstmagazijn haar deuren voor de opening van de expositie ‘What if we         fail to play by the rules of the game?’.<br><br>

                          Kunstenaars Julius Thissen en Gabriel Fontana exposeren werk waarin zij, middels verschillende invalshoeken, de hedendaagse prestatiecultuur en de genderrollen die hierin een rol spelen, kritisch bevragen en onverwachte alternatieven voorstellen. Tijdens de opening curator Luca Soudant in gesprek gaan met de kunstenaars over hun werk en proces.<br><br>

                          De opening zal plaatsvinden in galerie en kunstuitleen Kunstmagazijn in Brakkenstein.
                        </p>
                      </div>
                    </div>

                    <div class="artist">
                      <div class="text-wrap">
                        <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="home-mod hashtag-copy right">
                <div class="copy">
                  <div class="info">
                    <div class="text-wrap">
                      <h2>Opening Kunstmagazijn</h2>
                      <p class="black">Op de eerste officiële festivaldag van Qtopia 2019 opent Kunstmagazijn haar deuren voor de opening van de expositie ‘What if we fail to play by the rules of the game?’ </p>

                      <p class="grey">
                        Zaterdag 5 oktober: 15:00 - 17:00<br><a style="border-bottom: none">Entree: gratis</a><br><br>

                        <a><i class="fa fa-map-marker"></i></a><a href="locations.html#kunstmagazijn"> Kunstmagazijn</a>
                      </p>
                      <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="hashtag-row home-row hashtag-content clearfix" id="openingneus">
            <div class="inner-wrapper">
              <div class="home-mod hashtag-shape right">
                <div class="hashtag whyistayed">
                  <div class="icon">
                    <div class="full" style="opacity: 1;">
                      <img src="../assets/img/tabita-rezaire.png">
                    </div>
                  </div>
                </div>
                <div class="hashtag-artists">
                  <div class="inner-wrapper clearfix">
                    <div class="artist artist-item">
                      <div class="text-wrap">
                        <h3>Opening Neus</h3>
                        <p class="black">NEUS presenteert met trots het officiële openingsfeest van de tweede editie van het Qtopia Queer Arts festival!<br><br> In deze editie nodigt Qtopia je uit om je blikveld te verruimen, te leren van en te luisteren
                          naar uiteenlopende versies van de werkelijkheid. NEUS is dé centrale ontmoetingsplek van het festival. Hier drink je een biertje, verdiep je je in de boeken en zines op de leestafel en bekijk je werk van Tabita
                          Rezaire, Robin Ramos, Noam Youngrak Son en de artists in residence Vita Evangelista en Astrit Ismaili.<br><br> Gedurende de officiële opening kijken we naar het werk van de kunstenaars die exposeren bij NEUS
                          en vertelt curator Luca Soudant over diens kijk op de editie van dit jaar.<br><br> De officiële opening zal starten om 18:30 bij NEUS. Vervolgens vindt om 20:00 de Nacht van de Ommetjes plaats, waarbij een speciale
                          Qtopia-route langs alle expositielocaties in de binnenstad van Nijmegen zal worden gelopen. Om 22:00 eindigt de route weer bij NEUS, waar iedereen vervolgens kan aansluiten bij het openingsfeest van Qtopia Queer
                          Arts Festival 2019. </p>
                        </div>
                      </div>
                      <div class="artist">
                        <div class="text-wrap">
                          <p class="grey">Zaterdag 5 oktober: 19:00 - 03:30</p>
                          <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="home-mod hashtag-copy left">
                  <div class="copy">
                    <div class="info">
                      <div class="text-wrap">
                        <h2>Opening Neus</h2>
                        <p class="black">NEUS presenteert met trots het officiële openingsfeest van de tweede editie van het Qtopia Queer Arts festival!</p>
                        <p class="grey">
                          Zaterdag 5 oktober: 19:00 - 03:30<br><a style="border-bottom: none">Entree: gratis</a><br><br>

                          <a><i class="fa fa-map-marker"></i></a><a href="locations.html#neus"> NEUS</a>
                        </p>
                        <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="hashtag-row home-row hashtag-content clearfix" id="nachtvandeommetjes">
              <div class="inner-wrapper">
                <div class="home-mod hashtag-shape left">
                  <div class="hashtag">
                    <div class="icon">
                      <div class="full" style="opacity: 1;">
                        <img src="../assets/img/temp1.png">
                      </div>
                    </div>
                  </div>
                  <div class="hashtag-artists">
                    <div class="inner-wrapper clearfix">
                      <div class="artist artist-item">
                        <div class="text-wrap">
                          <h3>Nacht van de Ommetjes</h3>
                          <p class="black">Tijdens de nacht van de ommetjes presenteren we met trots de locaties van de tweede editie van het Qtopia Queer Arts festival!<br><br> In deze editie nodigt Qtopia je uit om je blikveld te verruimen, te leren van
                            en te luisteren naar uiteenlopende versies van de werkelijkheid. We starten bij het Roze Huis en eindigen bij NEUS, dé centrale ontmoetingsplek van het festival. Hier drink je een biertje, verdiep je je in de
                            boeken en zines op de leestafel en bekijk je werk van Tabita Rezaire, Robin Ramos, Noam Youngrak Son en de artists in residence Vita Evangelista en Astrit Ismaili.<br><br> Gedurende het ommetje bezoeken we onze
                            locaties en kijken we naar het werk van de kunstenaars die exposeren tijdens het festival. Samen met Suus te Braak vertelt curator Luca Soudant over diens kijk op de editie van dit jaar en nemen zij je mee van
                            plek naar plek terwijl je ook nog tijdens de wandeling de Queer geschiedenis van de stad Nijmegen te horen krijgt.<br><br> Om 22:00 eindigt de route bij NEUS, waar iedereen vervolgens kan aansluiten bij het
                            openingsfeest van Qtopia Queer Arts Festival 2019.<br> 20:00: start Nacht van de Ommetjes<br> 22:00: openingsfeest bij NEUS
                          </p>
                        </div>
                      </div>
                      <div class="artist">
                        <div class="text-wrap">
                          <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="home-mod hashtag-copy right">
                  <div class="copy">
                    <div class="info">
                      <div class="text-wrap">
                        <h2>Nacht van de Ommetjes</h2>
                        <p class="black">Tijdens de nacht van de ommetjes presenteren we met trots de locaties van de tweede editie van het Qtopia Queer Arts festival!</p>
                        <p class="grey">
                          Zaterdag 5 oktober: 20:00 - 22:00<br>
                          <a style="border-bottom: none">Entree: gratis</a><br><br>

                          <a><i class="fa fa-map-marker"></i></a><a href="locations.html#rozehuis"> Roze Huis</a>
                        </p>
                        <span class="fboldup artists-link black">Lees meer
                          <span class="icon-down-arrow"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="hashtag-row home-row hashtag-content clearfix" id="avondwoorden">
              <div class="inner-wrapper">
                <div class="home-mod hashtag-shape right">
                  <div class="hashtag">
                    <div class="icon">
                      <div class="full" style="opacity: 1;">
                        <img src="../assets/img/temp2.png">
                      </div>
                    </div>
                  </div>
                  <div class="hashtag-artists">
                    <div class="inner-wrapper clearfix">
                      <div class="artist artist-item">
                        <div class="text-wrap">
                          <h3>Avondwoorden</h3>
                          <p class="black">Is queerness een universeel gevoel? Wat maakt dat we ons niet deel van de incrowd voelen en is dat erg? <br><br>   Vanaf zeven uur in de Bijstand delen negen schrijvers en songwriters hun blik op anderszijn aan
                            de hand van uiteenlopende uitgangspunten. Door gevoel en ervaring om te zetten in taal brengen ze hun menselijkheid tot uitdrukking in korte verhalen van ongeveer vijf minuten. Loop met ze mee in een geschetste
                            wereld. Misschien herinneren ze je aan een stukje van jezelf. Misschien ontdek je nieuwe paden.
                            <br><br> Kom en luister. Praat en drink. Want delen leidt tot denken.
                          </p>


                        </div>
                      </div>

                      <div class="artist">
                        <div class="text-wrap">
                          <p class="grey">Tijdschema*:<br> Eerste ronde: 19:00-19:15<br> Tweede ronde: 19:30-19:45<br> Derde ronde: 20:00-20:15<br>
                            <br> *Houd rekening met uitloop</p>
                          </div>

                          <div class="text-wrap">
                            <h5 class="fboldup close-artists">X Close <span class="icon-close"></span></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="home-mod hashtag-copy left">
                    <div class="copy">
                      <div class="info">
                        <div class="text-wrap">
                          <h2>Avondwoorden</h2>
                          <p class="black">Is queerness een universeel gevoel? Wat maakt dat we ons niet deel van de incrowd voelen en is dat erg? </p>
                          <p class="grey">
                            Zondag 6 oktober: 19:00 - 22:00<br>
                            <a style="border-bottom: none">Entree: gratis</a><br>
                            <br>
                            <a><i class="fa fa-map-marker"></i></a><a href="locations.html#debijstand"> DE BIJSTAND</a>
                          </p>
                          <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="hashtag-row home-row hashtag-content clearfix" id="queerresiliance">
                <div class="inner-wrapper">
                  <div class="home-mod hashtag-shape left">
                    <div class="hashtag">
                      <div class="icon">
                        <div class="full" style="opacity: 1;">
                          <img src="../assets/img/temp2.png">
                        </div>
                      </div>
                    </div>
                    <div class="hashtag-artists">
                      <div class="inner-wrapper clearfix">
                        <div class="artist artist-item">
                          <div class="text-wrap">
                            <h3>Queer Resilience</h3>
                            <p class="black">Het ritme van de woorden dat je meedraagt, je rustig neerlegt en voor je zorgt. Woorden die je omhelzen, toedekken of juist afzetten tegen wat er is. Schrijven en spreken is ontzettend krachtig. In deze workshop
                              onderzoeken we die kracht en kijken we naar hoe woorden kunnen helpen bij het tegen de normen in leven. De focus ligt op spoken word en het proces daarvan. Wat gebeurt er als je schrijft, of als je stukken herleest?
                              Wat verandert er als je ze uitspreekt of uitdraagt? Spreek je voor jezelf of ook naar anderen toe? Aan de hand van korte oefeningen onderzoeken we hoe woorden voor ons werken en hoe spoken word bij kan dragen
                              aan veerkracht. Want self-care = activisme, en overleven is dat ook.<br><br>

                              <b>Zelf meenemen:</b><br> -          Pen en papier (waarop en waarmee jij het liefste schrijft natuurlijk)<br> -          een zin of woord dat je raakt, fascineert of dat je niet los kunt laten om bijvoorbeeld
                              haar ritme, kleur of de gevoelens die ze mee brengt.<br><br>

                              <b>Taal</b><br> Deze workshop kan zowel in het Engels als in het Nederlands plaatsvinden. Dit kan op het moment zelf door de participanten besloten worden.

                            </p>

                          </div>
                        </div>




                        <div class="artist">
                          <div class="text-wrap">
                            <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="home-mod hashtag-copy right">
                    <div class="copy">
                      <div class="info">

                        <div class="text-wrap">
                          <h2>Queer Resilience</h2>
                          <p class="black"><b>Spoken Word workshop</b></p>
                          <p class="black">Het ritme van de woorden dat je meedraagt, je rustig neerlegt en voor je zorgt. Woorden die je omhelzen, toedekken of juist afzetten tegen wat er is.</p>

                          <p class="grey">
                            zondag 6 oktober, 13:30 - 16:30<br>
                            <a style="border-bottom: none">Entree: gratis</a><br>
                            <br>
                            <a><i class="fa fa-map-marker"></i></a><a href="locations.html#neus"> NEUS</a>
                          </p>

                          <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="hashtag-row home-row hashtag-content clearfix" id="schrewher">
                <div class="inner-wrapper">
                  <div class="home-mod hashtag-shape right">
                    <div class="hashtag blacklivesmatter">
                      <div class="icon">
                        <div class="full" style="opacity: 1;">
                          <img src="../assets/img/schrew-her.png" alt="Schrew Her Cast">
                        </div>
                      </div>
                    </div>
                    <div class="hashtag-artists">
                      <div class="inner-wrapper clearfix">
                        <div class="artist artist-item">
                          <div class="text-wrap">
                            <h3>SHREW HER</h3>
                            <p class="black">Aan de vooravond van coming out day presenteert LUX in samenwerking met Schoolsout en het Qtopia Queer Arts Festival de wervelende theatervoorstelling Shrew Her. Wat is de invloed van onze gendernormen op traditionele
                              instituties als het huwelijk? We kijken naar Shrew Her en gaan in gesprek over genderrollen in de 21 ste eeuw. <br><br> OVER DE VOORSTELLING<br> Bij Shrew Her zijn we te gast bij de bruiloft van Kate &amp; Petruchio.
                              Tijdens de receptie krijgen de gasten het woord. We horen een expert vertellen over de kracht van rituelen en hoe je die zelf vorm kunt geven. Hoe zien onze moderne rituelen eruit? We luisteren naar stellen
                              die ooit voor het eerst als homoseksuelen mochten trouwen. Heeft het hen gebracht wat ze ervan verwachten? En wat zegt dit dan over het nu? Past deze exclusieve club nog steeds bij de relaties die we hebben?
                              Als we vrijdenken, welk ritueel doet recht aan de liefde?<br><br> THOU SHALL NOT FUCK WITH ME!<br> Shrew Her vertelt het verhaal van Shakespeare’s Taming of the Shrew.  Nieuwe maker Ira Kip onderzocht samen
                              met vijf queer vrouwen in het licht van deze klassieker hoe traditionele man/vrouw verhoudingen en gender rollen ons persoonlijke beeld en de maatschappij vormen. Het sterke kostuumontwerp van stylist Imruh
                              Asha die steeds nieuwe manieren vindt om gendernormen tot in het absurde aan te zetten, draagt hieraan bij. Het resultaat is een vernieuwend theatraal event waarin beeldtaal, klassiek theater, fysiek spel, dancehall,
                              ritmische teksten en publieksparticipatie één worden.<br><br> Bij dit programma hoort een nagesprek. Dit programma is een samenwerking tussen LUX, Schoolsout en Qtopia
                            </p>

                          </div>
                        </div>
                        <div class="artist">
                          <div class="text-wrap">
                            <p class="grey">aanvang: 19:30</p>
                          </div>
                        </div>
                        <div class="artist">
                          <div class="text-wrap">
                            <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="home-mod hashtag-copy left">
                    <div class="copy">
                      <div class="info">
                        <div class="text-wrap">
                          <h2>SHREW HER</h2>

                          <p class="black">Aan de vooravond van coming out day presenteert LUX in samenwerking met Schoolsout en het Qtopia Queer Arts Festival de wervelende theatervoorstelling Shrew Her. </p>

                          <p class="grey">
                            Dinsdag 8 oktober: 19:30 - 22:30<br>
                            <a style="border-bottom: none">
                              Normaal: € 9,50<br>
                              Scholieren en studenten: € 3,50 </a>
                              <br>
                              <br>
                              <a><i class="fa fa-map-marker"></i></a><a href="locations.html#lux"> Lux</a>
                            </p>

                            <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="hashtag-row home-row hashtag-content clearfix" id="artisttalk">
                  <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape left">
                      <div class="hashtag">
                        <div class="icon">
                          <div class="full" style="opacity: 1;">
                            <img src="../assets/img/temp1.png">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="home-mod hashtag-copy right">
                      <div class="copy">
                        <div class="info">
                          <div class="text-wrap">
                            <h2>Artist talk met Pluck en Mir</h2><br>
                            <p class="black"> Omschrijving niet beschikbaar.</p>
                            <p class="grey">
                              Woensdag 9 oktober: 16:00 - 17:00<br>
                              <a style="border-bottom: none">Entree: gratis</a><br>
                              <br>
                              <a><i class="fa fa-map-marker"></i></a><a href="locations.html#valkhof"> Het Valkhof Museum
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="hashtag-row home-row hashtag-content clearfix" id="latenweheteensafespacenoemen">
                  <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape right">
                      <div class="hashtag">
                        <div class="icon">
                          <div class="full" style="opacity: 1;">
                            <img src="../assets/img/temp2.png">
                          </div>
                        </div>
                      </div>
                      <div class="hashtag-artists">
                        <div class="inner-wrapper clearfix">
                          <div class="artist artist-item">
                            <div class="text-wrap">
                              <p class="black">“Laten we het een safe space noemen!” is een onderzoeksprogramma waarin twee programmamakers (Suus te Braak en Kim van Kaam) in verschillende vormen met het publiek, hun gasten en elkaar in gesprek gaan over gewetensthema’s die hen bezighouden. Ken ik mensen die op Thierry Baudet stemden en waarom praat ik daar niet met hen over? Waarom spreek ik mijn buren nooit? Kunnen emancipatie en rechts-denken samengaan? Wat kan ik doen aan mijn klimaatschaamte? Wanneer ben ik politiek-correct en wanneer activistisch? In dit programma proberen Suus en Kim buiten hun bubbel te kijken en te zien wat voor hen niet voor de hand liggend is.<br><br>

                                In deze eerste editie nemen ze de titel van het programma zelf als uitgangspunt: laten we het een safe space noemen. In navolging van de VS, wordt ook aan Nederlandse universiteiten en kunstacademies de discussie gevoerd over wat safe spaces zijn, voor wie ze zijn en of ze noodzakelijk of juist belemmerend zijn voor open en kritisch onderwijs. Voor dit programma beschouwen Suus en Kim Qtopia als platform voor het bespreekbaar maken van dit onderwerp. Ook de queer scene omschrijft zichzelf als een safe space: toegankelijk voor iedereen uit de community, en een veilige plek waar je je identiteit met trots kan dragen. Maar is dat echt zo? Is iedereen welkom in de scene of verhoudt queer zijn zich toch ook tot een bepaalde vorm van denken en leven? Bevindt de queer community zich in zijn eigen bubbel, en wat levert het op om er eens met een ander perspectief naar te kijken? Wij zijn benieuwd en gaan hier graag over in gesprek.<br><br>

                                Suus te Braak (hij/hen) is mensenrechtenactivist en werkzaam voor COC Nederland waar ze projectleider Asielzaken is. Daarnaast is Suus actief in de queer community als dragking Dan en dj HizzL.<br><br>

                                Kim van Kaam (zij) werkt als redacteur en literair agent voor De Nieuwe Oost | Wintertuin. Daarnaast schrijft ze voor haar eigen blog eenweekzonder.nl.<br><br>

                                Tijdens het programma gaan zij in gesprek met schrijver en performer Steff Geelen (Citroengeel, hen) en kunstenaar, activist en curator Richard Kofi (hij).
                              </p>
                            </div>
                          </div>
                          <div class="artist">
                            <div class="text-wrap">
                              <a href="https://forms.gle/RUrTaMA6ooCGm5ZG8" target="_blank"> Schrijf je in.</a><br>
                              <p class="grey">Disclaimer:<br> Dit programma is Nederlandstalig.</p>
                              <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="home-mod hashtag-copy left">
                      <div class="copy">
                        <div class="info">
                          <div class="text-wrap">
                            <h2>Laten we het een safe space noemen!</h2>
                            <p class="black">“Laten we het een safe space noemen!” is een onderzoeksprogramma waarin twee programmamakers (Suus te Braak en Kim van Kaam) in verschillende vormen met het publiek, hun gasten en elkaar in gesprek gaan over gewetensthema’s die hen bezighouden. </p>
                            <a href="https://forms.gle/RUrTaMA6ooCGm5ZG8" target="_blank"> Schrijf je in.</a><br><br>
                            <p class="grey">
                              Donderdag 10 oktober: 19:30 - 22:30<br>
                              <a>Entree: gratis</a><br><br>

                              <a><i class="fa fa-map-marker"></i></a><a href="locations.html#valkhof"> Het Valkhof Museum</a>
                            </p>
                            <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br>

                <div class="home-row intro break-content clearfix">
                  <div class="center-align">
                    <div class="break-text-wrap">
                      <h4 class="fboldup">Give a ride</h4>
                      <p class="black">Help iemand naar Qtopia te komen.</p>
                      <a href="donate.html" class="arrow-link" target="_blank" data-label="Partner Section - Chris Messina">Lees meer <span class="icon-link-arrow"></span></a>
                    </div>
                  </div>
                </div>

                <div class="hashtag-row home-row hashtag-content clearfix" id="vreemd">
                  <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape left">
                      <div class="hashtag">
                        <div class="icon">
                          <div class="full" style="opacity: 1;">
                            <img src="../assets/img/temp1.png">
                          </div>
                        </div>
                      </div>
                      <div class="hashtag-artists">
                        <div class="inner-wrapper clearfix">
                          <div class="artist artist-item">
                            <div class="text-wrap">
                              <h3>Vreemd!</h3>
                              <p class="black">Qtopia en de Plak slaan de handen ineen met Vreemd! Op vrijdag 11 oktober queeren we de dansvloer met een Qtopia queerparty, vanaf 23:00 uur bij collectief cafe de Plak.<br><br> De verdere invulling van Vreemd!
                                wordt spoedig bekend gemaakt. Houd onze website of de website van de Plak in de gaten voor meer informatie.
                              </p>

                            </div>
                          </div>
                          <div class="artist">
                            <div class="text-wrap">
                              <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="home-mod hashtag-copy right">
                      <div class="copy">
                        <div class="info">
                          <div class="text-wrap">
                            <h2>Vreemd!</h2>
                            <p class="black">Qtopia en de Plak slaan de handen ineen met Vreemd! Op vrijdag 11 oktober queeren we de dansvloer met een Qtopia queerparty, vanaf 23:00 uur bij collectief cafe de Plak.
                            </p>
                            <p class="grey">
                              Vrijdag 11 oktober, 23:00<br>
                              <a style="border-bottom: none">Entree: gratis</a><br>
                              <br>
                              <a><i class="fa fa-map-marker"></i></a><a href="locations.html#deplak"> DE PLAK</a>
                            </p>
                            <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="hashtag-row home-row hashtag-content clearfix" id="DissidentPedagogy">
                  <div class="inner-wrapper">
                    <div class="home-mod hashtag-shape right">
                      <div class="hashtag">
                        <div class="icon">
                          <div class="full" style="opacity: 1;">
                            <img src="../assets/img/dissident-pedagogy-visu.png" alt="Dissident Pedagogy Visu Flyer">
                          </div>
                        </div>
                      </div>
                      <div class="hashtag-artists">
                        <div class="inner-wrapper clearfix">
                          <div class="artist">
                            <div class="text-wrap">
                            </div>
                          </div>
                          <div class="artist artist-item">
                            <div class="text-wrap">
                              <h3>DISSIDENT PEDAGOGY, a symposium on queering education.</h3>
                              <p class="black">Het symposium Dissident Pedagogy brengt kunstenaars en beoefenaars van het onderwijs samen om te onderzoeken hoe school functioneert als een ruimte waar ongelijkwaardige, door gender ingegeven machtsstructuren worden
                                gereproduceerd. Voor gemarginaliseerde personen gaat het bevragen van pedagogiek over de vraag naar hoe kennis wordt geproduceerd in een bepaalde ruimte; een ruimte die constant de heteronormatieve waarden in
                                discours, praktijk en ideologie herhaalt en uitdraagt. Door dromen en verhalen van andersdenkenden te delen, tracht dit symposium te onderzoeken en een voorstelling te maken van queer pedagogiek. Hoe kan dit
                                ons helpen de totstandkoming van identiteit in de klas en daarbuiten, in een ander daglicht te zien? Welke methoden en middelen kunnen ons leren navigeren door een wereld van ervaringen die meer dan binair zijn?
                                Wat als queer pedagogiek ons in een crisis stuurt en we niet meer zeker weten welke kennis gegeven is en hoe we kennis vergaren? De sprekers van deze avond zijn: Inge Jansen, een basisschooldirecteur uit Rotterdam;
                                Claire Nì Bhrìan, docent en onderzoekers naar queer pedagogiek op een middelbare school in Eindhoven; Daan Van Beers en Geert Vermegeen, basisschooldocenten in Amsterdam en Rotterdam; Carmen José, eenn kunstenaar
                                die onderzoek doet naar kritische visualisatieprocessen door middel van belichaamde oefeningen in groepsverband en Gabriel Fontana, een kunstenaar die het Multiform project ontwikkelde: een langlopend onderzoek
                                naar het queeren van sport, waarin de reproductie van normatieve genderrollen wordt bevraagd in de context van een gymles op school. Gedurende het festival is het Multiform project tentoongesteld bij galerie
                                en kunstuitleen Kunstmagazijn.

                              </p>

                            </div>
                          </div>
                          <div class="artist">
                            <div class="text-wrap">
                              <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="home-mod hashtag-copy left">
                      <div class="copy">
                        <div class="info">
                          <div class="text-wrap">
                            <h2>DISSIDENT PEDAGOGY</h2>
                            <p class="black"><b>a symposium on queering education.</b></p>
                            <p class="black">Het symposium Dissident Pedagogy brengt kunstenaars en beoefenaars van het onderwijs samen om te onderzoeken hoe school functioneert als een ruimte waar ongelijkwaardige, door gender ingegeven machtsstructuren worden
                              gereproduceerd. </p>
                              <p class="grey">
                                Zaterdag 12 oktober: 14:00 - 17:00<br><br>
                                <a style="border-bottom: none">Entree: gratis</a><br>
                                <br>
                                <a><i class="fa fa-map-marker"></i></a><a href="locations.html#042"> O42</a>
                              </p>
                              <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hashtag-row home-row hashtag-content clearfix" id="discobal">
                    <div class="inner-wrapper">
                      <div class="home-mod hashtag-shape left">
                        <div class="hashtag">

                          <div class="icon">

                            <div class="full" style="opacity: 1;">
                              <img src="../assets/img/temp1.png">
                            </div>
                          </div>
                          <!-- </a> -->
                        </div>
                        <div class="hashtag-artists">
                          <div class="inner-wrapper clearfix">
                            <div class="artist">
                              <div class="text-wrap">
                              </div>
                            </div>
                            <div class="artist artist-item">
                              <div class="text-wrap">
                                <h3>Discobal #3 :All</h3>
                                <p class="black">Voor het performancekunstprogramma Discobal nodigen we kunstenaars uit om te reflecteren op vraagstukken uit de maatschappij. Discobal komt voort uit een totale verbazing over de moderne digitale wereld, met digitale
                                  bubbels en heel veel schermpjes. Een tijd waarin trollen en nepnieuws het publieke debat degraderen en inhoudelijke relevante discussies vervlakken.<br><br> Als reactie hierop wil Extrapool kunstenaars uitnodigen,
                                  die vanuit noodzaak of fascinatie hier een geheel eigen geluid tegenover zetten. Voor Discobal behandelen kunstenaars verschillende thema’s  die de gemoederen on- en offline hoog doen oplopen.
                                  <br><br> Kunstenaars gebruiken sinds jaar en dag fictie om maatschappelijke problemen aan de kaak te stellen en een alternatieve werkelijkheid te creëren. Welke rol kan de kunstenaar hebben in een door de media
                                  gedomineerde wereld? En hoe kunnen middelen als fictie en humor in de vorm van kunst ingezet worden om de discussies te ontstijgen en weer zicht te krijgen op dat wat ertoe doet?<br><br> In de derde sloteditie
                                  behandelen we het thema inclusiviteit, en de vanzelfsprekendheid van gelijkwaardigheid. <br><br> Homo of hetero, queer of cis, man of vrouw of iets ertussenin, blank of zwart, neurotypisch of neuro a-typisch,
                                  gelovig of atheïstisch, invalide of valide en ga zo maar door. Als we al deze hokjes wegdenken dan zijn we allemaal mensen. En sommige van deze mensen zijn toevallig ook kunstenaars. We zijn op zoek gegaan naar
                                  kunstenaars waarvoor hokjes irrelevant zijn geworden en die ze willen openbreken.
                                  <br><br> Voor deze editie gaan wij opnieuw de samenwerking aan met het queer arts festival Qtopia, dat tijdens Discobal de tweede editie viert.
                                </p>

                              </div>
                            </div>
                            <div class="artist">
                              <div class="text-wrap">
                                <h5 class="fboldup close-artists">X Close <span class="icon-close"></span></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="home-mod hashtag-copy right">
                        <div class="copy">
                          <div class="info">
                            <div class="text-wrap">
                              <h2>Discobal #3 :All</h2>
                              <p class="black">Voor het performancekunstprogramma Discobal nodigen we kunstenaars uit om te reflecteren op vraagstukken uit de maatschappij.</p>
                              <p class="grey">
                                Zaterdag 12 oktober<br>
                                <a style="border-bottom: none">Entree: gratis</a><br><br>

                                <a><i class="fa fa-map-marker"></i></a><a href="locations.html#extrapool"> Extrapool</a>
                              </p>
                              <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hashtag-row home-row hashtag-content clearfix" id="queersphere">
                    <div class="inner-wrapper">
                      <div class="home-mod hashtag-shape right">
                        <div class="hashtag">
                          <div class="icon">

                            <div class="full" style="opacity: 1;">
                              <img src="../assets/img/temp1.png">
                            </div>
                          </div>
                        </div>
                        <div class="hashtag-artists">
                          <div class="inner-wrapper clearfix">
                            <div class="artist">
                              <div class="text-wrap">

                              </div>
                            </div>
                            <div class="artist artist-item">
                              <div class="text-wrap">
                                <h3>Queer Sphere</h3>
                                <p class="black">Een dag na Coming Out Day is het tijd om neer te dalen en te landen bij Queer Sphere. Is het niet vreemd dat hetero- en cismensen nooit een maatschappelijke druk ondervinden om uit de kast te komen? We eren de heilige
                                  queer zielen op deze wereld, die altijd verwacht worden zich in hun queerness te verhouden tot de status quo, bijvoorbeeld door uit de kast te komen. We nodigen iedereen uit in de kast te komen en de cis-hetero
                                  normativiteit van zich af te dansen.<br><br> Met dit feest streven wij ernaar om een ruimte voor queermensen en hun medestanders te creëren. In Queer Sphere is geen ruimte voor racisme, transfobie, homofobie,
                                  seksisme, fatphobia en andere onderdrukkende uitingen. Het is een plaats waar niemand over de privileges beschikt om te bevragen wat iemand anders wel of niet mag dragen of hoe iemand anders zich mag uitdrukken.
                                  Als je over iemand spreekt, maar je kent diens voornaamwoorden niet, vraag het aan die persoon. Dat is beter dan het maken van aannames. Daarbij is toestemming het sleutelwoord: vraag ernaar voordat je in iemand
                                  persoonlijke ruimte komt. En als je je toch niet op je gemak voelt, weet dan dat je altijd het barpersoneel kan aanspreken.
                                  <br><br>Kinders onthoud: drink voldoende water. En je kan nooit gay genoeg zijn &lt;3

                                </p>


                              </div>
                            </div>
                            <div class="artist">
                              <div class="text-wrap">
                                <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="home-mod hashtag-copy left">
                        <div class="copy">
                          <div class="info">
                            <div class="text-wrap">
                              <h2>Queer Sphere</h2>

                              <p class="black">Een dag na Coming Out Day is het tijd om neer te dalen en te landen bij Queer Sphere.
                              </p>

                              <p class="grey">
                                Zaterdag 12 oktober: 23:00 - 03:00<br>
                                <a style="border-bottom: none">Entree: gratis</a><br>
                                <br>
                                <a><i class="fa fa-map-marker"></i></a><a href="locations.html"> De Onderbroek, Tweede Walstraat 21, 6511LN Nijmegen</a>
                              </p>
                              <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                            </div>
                            <!-- </a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hashtag-row home-row hashtag-content clearfix" id="transscreen">
                    <div class="inner-wrapper">
                      <div class="home-mod hashtag-shape left">
                        <div class="hashtag">
                          <div class="icon">

                            <div class="full" style="opacity: 1;">
                              <img src="../assets/img/temp1.png" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="hashtag-artists">
                          <div class="inner-wrapper clearfix">
                            <div class="artist artist-item">
                              <div class="text-wrap">
                                <h3>Qtopia x Transcreen</h3>
                                <p class="black">Filmscreening van Kairos Dirt &amp; the Errant Vacuum<br><br>
                                  Madsen Minax | United States | 2015 | 90’ | Comedy, Fantasy, Film-Noir &amp; Sci-Fi | Engels gesproken | Geen ondertiteling<br><br>

                                  In deze bijzondere en artistieke film ontdekt een bonte verzameling karakters hoe ze erotiek kunnen delen in collectieve droombeelden. We volgen de vreemde gebeurtenissen van een panseksuele kantinejuffrouw, haar religieuze collega, een genderqueer student en een manusje van alles astroloog/telefoonseks operator/spiritueel medium in een droomwereld. Televisie monitoren, radiofrequenties en dromen worden allemaal poorten naar deze mysterieuze, vleselijke dimensie.<br><br>

                                  PAS OP BIJ EPILEPSIE: FLITSEN

                                </p>

                              </div>
                            </div>
                            <div class="artist">
                              <div class="text-wrap">
                                <p class="grey">Zondag 13 oktober: 17:00 - 18:30</p>
                                <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="home-mod hashtag-copy right">
                        <div class="copy">
                          <div class="info">
                            <div class="text-wrap">
                              <h2>Qtopia x Transcreen</h2> <h3 class="black">Kairos Dirt &amp; the Errant Vacuum</h3>
                              <p class="black">In deze bijzondere en artistieke film ontdekt een bonte verzameling karakters hoe ze erotiek kunnen delen in collectieve droombeelden.
                              </p>
                              <p class="grey">
                                Zondag 13 oktober: 17:00 - 18:30<br>
                                <a style="border-bottom: none">Entree: gratis</a><br>
                                <br>
                                <a><i class="fa fa-map-marker"></i></a><a href="locations.html#o42" target="_blank"> Filmhuis o42</a>
                              </p>
                              <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hashtag-row home-row hashtag-content clearfix" id="toqueerornottoqueer">
                    <div class="inner-wrapper">
                      <div class="home-mod hashtag-shape right">
                        <div class="hashtag">
                          <div class="icon">
                            <div class="full" style="opacity: 1;">
                              <img src="../assets/img/temp1.png" alt="Queer Tango Workshop">
                            </div>
                          </div>
                        </div>
                        <div class="hashtag-artists">
                          <div class="inner-wrapper clearfix">
                            <div class="artist artist-item">
                              <div class="text-wrap">
                                <h3>To Queer or not to Queer</h3>
                                <p class="black">Raak je de weg nog een beetje kwijt in ons taalgebruik? En zou je het liefst gewoon een antwoord willen op wat er nou eigenlijk bedoeld wordt met queer? Daar kunnen we je geen definitief antwoord op geven, maar we kunnen je wel een stukje op weg helpen. In deze interactieve lezing gaan we op zoek naar de verschillende manier waarop het woord gebruikt wordt. Is het een identiteit, een bijvoeglijk naamwoord of toch een werkwoord? Als het een werkwoord is, wat doe je dan als je aan het ‘Queeren’ bent? <br><br>


                                  Deze interactieve lezing ‘To queer or not to queer’ is bedoeld voor mensen die niets of nog niet zo veel van queer afweten.  <br><br>
                                  Crystal Hassell is theatermaker, redacteur bij Zij aan Zij en student Gender and Diversity.

                                </p>

                              </div>
                            </div>
                            <div class="artist">
                              <div class="text-wrap">
                                <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="home-mod hashtag-copy left">
                        <div class="copy">
                          <div class="info">
                            <div class="text-wrap">
                              <h2>To Queer or not to Queer</h2>
                              <p class="black">Raak je de weg nog een beetje kwijt in ons taalgebruik? En zou je het liefst gewoon een antwoord willen op wat er nou eigenlijk bedoeld wordt met queer?
                              </p>
                              <p class="grey">
                                Maandag 14 oktober: 19:30 - 21:00<br>
                                <a style="border-bottom: none">Entree: gratis</a><br>
                                <br>
                                <a><i class="fa fa-map-marker"></i></a><a href="locations.html#o42" target="_blank"> Filmhuis o42</a>
                              </p>
                              <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hashtag-row home-row hashtag-content clearfix" id="queertango">
                    <div class="inner-wrapper">
                      <div class="home-mod hashtag-shape left">
                        <div class="hashtag">
                          <div class="icon">
                            <div class="full" style="opacity: 1;">
                              <img src="../assets/img/queer-tango.png" alt="Queer Tango Workshop">
                            </div>
                          </div>
                        </div>
                        <div class="hashtag-artists">
                          <div class="inner-wrapper clearfix">
                            <div class="artist artist-item">
                              <div class="text-wrap">
                                <h3>Queertango workshop</h3>
                                <p class="black">Als de bandoneon begint te spelen, neemt de Argentijnse tango bezit van lijf en leden. Van melancholische tango&#39;s tot vrolijke milonga&#39;s en ronde tangowalsen. Van muziek van de oude maestro&#39;s uit de
                                  gouden eeuw tot de moderne klanken van de neotango. Als je eenmaal bent gegrepen door de Argentijnse tango, laat deze je niet meer los. Queertango is een vorm van de tango waarbij gekozen wordt voor rollen op
                                  basis van interesse/ gevoel. Het gaat voorbij aan de heteronormatieve insteek (man leidt en vrouw volgt). Met deze queertango avond laten we zien dat het ook anders kan. Zowel in dansrollen als in dansparen,
                                  tegelijkertijd zijn zij die traditioneel willen dansen, ook welkom. De avond is een open muzikale uitnodiging aan iedereen waarbij we een boodschap afgeven dat ook de tango een bijdrage levert aan duurzame LHBTI-acceptatie.<br><br>                                            Claudia en Sandra geven een workshop waarin je kennis maakt met de tango in al zijn facetten. Aansluitend kun je blijven dansen of aan de bar een drankje bestellen. Je bent ook alleen welkom. We vormen ter plekke
                                  de dansparen. Schoenen met een enigszins gladde zool dansen het beste.
                                </p>

                              </div>
                            </div>
                            <div class="artist">
                              <div class="text-wrap">
                                <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="home-mod hashtag-copy right">
                        <div class="copy">
                          <div class="info">
                            <div class="text-wrap">
                              <h2>Queertango workshop</h2>
                              <p class="black">Als de bandoneon begint te spelen, neemt de Argentijnse tango bezit van lijf en leden.
                              </p>
                              <p class="grey">
                                Donderdag 17 oktober: 19:30 - 22:00<br>
                                <a style="border-bottom: none">Entree: gratis</a><br>
                                <br>
                                <a><i class="fa fa-map-marker"></i></a><a href="locations.html#elcorte" target="_blank"> El Corte</a>
                              </p>
                              <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                            </div>
                            <!-- </a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hashtag-row home-row hashtag-content clearfix" id="juicywordsbendingbodies">
                    <div class="inner-wrapper">
                      <div class="home-mod hashtag-shape right">
                        <div class="hashtag">
                          <div class="icon">
                            <div class="full" style="opacity: 1;">
                              <img src="../assets/img/temp2.png" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="hashtag-artists">
                          <div class="inner-wrapper clearfix">
                            <div class="artist artist-item">
                              <div class="text-wrap">
                                <h3>Juicy Words &amp; Bending Bodies</h3>
                                <p class="black">
                                  In Bibliotheek de Marienburg in het centrum van Nijmegen ben je vanaf 19:30 welkom voor een programma rondom de vrijheid die het luchtige, lieve en zoetsappige ons kunnen bieden. Kom dansen op woorden bij de queer Bollywood workshop en de superspeciale en laagdrempelige schrijfworkshop. Geen zin om iets te doen? Laat je meevoeren bij de verschillende voorleesrondes, en droom weg in de fantasie van een roze paradijs.<br><br>

                                  Over de Bollywood workshop<br>
                                  <b>Let op: deze workshop zal in het Engels gegeven worden.</b><br><br>

                                  “Mijn naam is Ajay Sathyan en ik ben een gender non-conforming (graag geen pronouns, mijn naam volstaat) LGBTQIA activist, gecertificeerde LGBTQIA peer counselor en artiest.
                                  Ik studeer Gender en Diversity aan de Rhine-Waal University of Applied Sciences. Indien mogelijk, vertegenwoordig ik actief queer vluchtelingen / queer mensen van kleur. Ik probeer gepolitiseerde onderwerpen zoals ras, gender en seksualiteit door middel van spoken word/dichtkunst, het geven van interactieve lezingen, workshops, discussies en kunst naar de voorgrond te halen.  <br><br>

                                  Ik heb deze workshop vorm gegeven op verzoek van veel queer vluchtelingen, die graag wilden leren Bollywood dansen. Het kwam samen met mijn besluit om iets voor vluchtelingen te maken dat prettig en licht was, naast de al bestaande intense workshops. <br><br>

                                  Bollywood dansen of Filmi dansen is voor iedereen, onafhankelijk van hun economische of culturele achtergrond. Het beste onderdeel van Bollywood dansen is dat het geen regels heeft. Je kan er bijna elke soort dans in integreren, of een dans improviseren op basis van een nummer of muziek. Het gaat er om dat je de tekst zo begrijp dat je de boodschap met je gezicht en lichaam kan communiceren. In deze workshop krijg je een stoomcursus in de gemeenschappelijke thema’s, emoties, anatomie en de paar gemeenschappelijke bewegingen die voorkomen in Bollywood dans.”<br><br>

                                  Over de schrijfworkshop<br>
                                  <b>Let op: deze workshop zal in het Nederlands gegeven worden. </b><br><br>

                                  Op zijn veertigste
                                  vloog Robert van
                                  Venus naar Mars.
                                  Man.

                                  Vandaag reist hij tijdens de schrijfworkshop naar het geheime koninginnerijk van Qtopia.Ga je mee? Schrijfervaring is niet nodig en pennen en papier zijn aanwezig.<br><br>

                                  Robert Witte is schrijver, dichter en redacteur. Hij schreef o.a. de romans 'Schijn, hoop en liefde' en 'Donor gezocht'.

                                </p>
                              </div>
                            </div>

                            <div class="artist">
                              <div class="text-wrap">
                                <a href="https://forms.gle/6P4fT2gd5ZFDL2pZ6" target="_blank"> Schrijf je in.</a>
                                <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="home-mod hashtag-copy left">
                        <div class="copy">
                          <div class="info">
                            <div class="text-wrap">
                              <h2>Juicy Words &amp; Bending Bodies</h2>
                              <p class="black">In Bibliotheek de Marienburg in het centrum van Nijmegen ben je vanaf 19:30 welkom voor een programma rondom de vrijheid die het luchtige, lieve en zoetsappige ons kunnen bieden.
                              </p>
                              <a href="https://forms.gle/6P4fT2gd5ZFDL2pZ6" target="_blank"> Dit event werkt met inschrijving.<br> Schrijf je hier in.</a><br><br>
                              <p class="grey">
                                Vrijdag 18 oktober: 19:30 - 22:00<br>
                                <a style="border-bottom: none">Entree: gratis</a><br>
                                <br>
                                <a><i class="fa fa-map-marker"></i></a><a href="locations.html#demarienburg" target="_blank"> Bibliotheek de Mariënburg</a>
                              </p>
                              <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hashtag-row home-row hashtag-content clearfix" id="dollhouse">
                    <div class="inner-wrapper">
                      <div class="home-mod hashtag-shape left">
                        <div class="hashtag">
                          <div class="icon">
                            <div class="full" style="opacity: 1;">
                              <img src="../assets/img/shape-dollhouse.png" alt="Dollhouse Queer Party">
                            </div>
                          </div>
                        </div>
                        <div class="hashtag-artists">
                          <div class="inner-wrapper clearfix">
                            <div class="artist artist-item">
                              <div class="text-wrap">
                                <h3>Dollhouse Queer Party</h3>
                                <p class="black">Come as you are Dollhouse Queerparty is een alternatief dansfeest voor freaks queers, drags, muziekliefhebbers en iedereen die zich hierdoor aangesproken voelt. We bieden een podium aan DJ’s, VJ’s en live performers
                                  in mode, make-up en kunst. Freaky fashionable in Arnhem en Dark Alternative in Nijmegen. Alles mag, niets moet en no judgements! The floor is your stage of ga lekker aan de rand staan en kijk je ogen uit. Bij
                                  ons kun je dansen op 80’s, 90’s, rock, alternatief, electro, disco en meer. Onze DJ’s houden van een rauw randje.   Dollhouse Queerparty begon in 2011 bij de OB in Nijmegen. Inmiddels is het uitgegroeid tot
                                  een pop-up feest met meerdere edities per jaar in Nijmegen en Arnhem.  Voor elke editie worden de details van tevoren bekend gemaakt.
                                </p>


                              </div>
                            </div>
                            <div class="artist">
                              <div class="text-wrap">
                                <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="home-mod hashtag-copy right">
                        <div class="copy">
                          <div class="info">
                            <div class="text-wrap">
                              <h2>Dollhouse Queer Party</h2>
                              <p class="black">Come as you are Dollhouse Queerparty is een alternatief dansfeest voor freaks queers, drags, muziekliefhebbers en iedereen die zich hierdoor aangesproken voelt.</p>
                              <p class="grey">Vrijdag 18 oktober: 23:00 - 04:00<br>
                                <a style="border-bottom: none">Entree: gratis</a><br><br>

                                <a><i class="fa fa-map-marker"></i></a>
                                <a href="locations.html#brebl"> Brebl</a>
                              </p>
                              <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hashtag-row home-row hashtag-content clearfix" id="dragup">
                    <div class="inner-wrapper">
                      <div class="home-mod hashtag-shape right">
                        <div class="hashtag">
                          <div class="icon">
                            <div class="full" style="opacity: 1;">
                              <img src="../assets/img/temp1.png">
                            </div>
                          </div>
                        </div>
                        <div class="hashtag-artists">
                          <div class="inner-wrapper clearfix">
                            <div class="artist artist-item">
                              <div class="text-wrap">
                                <h3>Workshop<br>Drag-up</h3>
                                <p class="black">Eleonora Johanna Remmen, ook wel bekend als ELLE Gazelle is        een performance artiest en drag performer. Ook is zij initiatiefnemer van     Queerucation, een queer performance kunstcollectief in Arnhem, woont ze in      Arnhem en is een vierdejaars student aan BEAR ArtEZ.<br><br>

                                  Drag is steeds meer mainstream geworden, mede door toedoen van televisieshows als RuPaul’s Dragrace. Dit kan worden gezien als een positieve ontwikkeling, maar het draagt ook een risico dat mensen vergeten wat de oorsprong is van drag. Drag heeft in de afgelopen jaren al veel transformaties ondergaan en lijkt in deze tijd meer dan ooit onderhevig te zijn aan snelle veranderingen.<br><br>

                                  Drag heeft niet altijd die vorm gehad van de sprankelende televisieshows waar nu veel mensen van genieten. Onze geschiedenis is pijnlijk; er zijn veldslagen uitgevochten en de strijd gaat door tot op de dag van vandaag. Dat mogen we niet vergeten.<br><br>

                                  De workshop draait daarom om de geschiedenis van drag; waar komt drag vandaag en hoe kunnen we ons in deze tijd kritisch daartoe verhouden? In deze workshop probeer ik inzicht te geven in wat drag kan zijn voor verschillende mensen, door je te helpen een eigen personage te creëren. Het gaat er niet dat je flitsend of gepolijst bent, maar om het vormen van een creatie die geheel bij jou past.<br><br>
                                </p>
                                <p class="grey">
                                  Programma:<br>
                                  11:00 kennismaking<br>
                                  11:30 Korte introductie<br>
                                  12:00 Presentatie: de geschiedenis van drag<br>
                                  13:00 korte lunchpauze<br>
                                  13:30 make up masterclass<br>
                                  14:30 – 17:00 omkleden en make-up<br>
                                  17:30: foto’s en performances<br>
                                  18:00 – 19:00 einde van de workshop<br>
                                  19:00 – 21:00 opruimen, feest, diner<br><br>
                                </p>
                                <p class="black">

                                  Breng alstublieft alle kleding mee die je kan gebruiken voor je creatieve proces. Mocht je al veel make-up, pruiken of accessoires hebben — dat is fantastisch! Breng het vooral mee! Voor alle basismaterialen wordt gezorgd. Vergeet niet een lunch voor jezelf mee te nemen.

                                  Let op: maximaal 15 mensen kunnen meedoen met deze workshop.
                                </p>

                              </div>
                            </div>
                            <div class="artist">
                              <div class="text-wrap">
                                <a href="https://forms.gle/6P4fT2gd5ZFDL2pZ6">Schrijf je in</a><br>
                                <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="home-mod hashtag-copy left">
                        <div class="copy">
                          <div class="info">
                            <div class="text-wrap">
                              <h2>Workshop<br>Drag-up</h2>

                              <p class="black">Eleonora Johanna Remmen, ook wel bekend als ELLE Gazelle is een performance artiest en drag performer.</p>
                              <p class="grey">
                                Zaterdag 19 oktober: 11:00 - 18:00 <br>
                                <a style="border-bottom: none">Entree: gratis</a><br><br>

                                <a><i class="fa fa-map-marker"></i></a><a href="locations.html#neus">NEUS</a>
                              </p>
                              <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="hashtag-row home-row hashtag-content clearfix" id="neverendingstory">
                    <div class="inner-wrapper">
                      <div class="home-mod hashtag-shape left">
                        <div class="hashtag">
                          <div class="icon">
                            <div class="full" style="opacity: 1;">
                              <img src="../assets/img/temp2.png">
                            </div>
                          </div>
                        </div>
                        <div class="hashtag-artists">
                          <div class="inner-wrapper clearfix">
                            <div class="artist artist-item">
                              <div class="text-wrap">
                                <h3>The never ending story</h3>
                                <p class="black">Dit is het laatste Qtopia event<br><br>

                                  Gedurende de Qtopia dagen en nachten zal Maxime de galerij Singular Art omtoveren op dramatische wijze. Op 20 oktober bereikt deze transformatie haar glorieuze eindpunt.
                                  Kom naar Maxime's  feestelijke, performatieve finale. Dit is het startpunt van een nieuw traject van presentaties.



                                </p>

                              </div>
                            </div>




                            <div class="artist">
                              <div class="text-wrap">
                                <h5 class="fboldup close-artists">Close <span class="icon-close"></span></h5>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="home-mod hashtag-copy right">
                        <div class="copy">
                          <div class="info">
                            <div class="text-wrap">
                              <h2>The never ending story</h2>

                              <p class="black">The never ending story (16:00 - 18:00) is the last event of QTOPIA Festival 2019 at singularartgallery with MC de Waal.
                                During Qtopia's last days and nights MC will transform the gallery space of Singular-Art in a continuous and dramatic fashion. On the 20th of October this transformation will reach its glorious conclusion. The artist will be present during this performative finale. You can walk in anytime.</p>

                                <p class="grey">
                                  Zondag 20 oktober: 16:00 - 18:00<br>
                                  <a style="border-bottom: none">Entree: gratis</a><br><br>
                                  <a><i class="fa fa-map-marker"></i></a><a href="locations.html#singularart">Singular art</a>

                                </p>

                                <span class="fboldup artists-link black">Lees meer <span class="icon-down-arrow"></span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <br><br><br><br><br><br>
                  </div>


                </section>
              @endwhile
            @endsection
