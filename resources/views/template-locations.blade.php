{{--
Template Name: Locations
--}}

@extends('layouts.appwhite')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <div class="content top-padding discover">
      <div class="two-column-header scroll-alert animate-down">
        <div class="left">
          <h1>Locaties</h1>
        </div>
        <!--left-->
        <div class="right">
        </div>
        <!--right-->
      </div>
      <!--two-column-header-->
    </div>

    <section id="page" class="landing locations loaded padding-bottom">

      <div class="content-wrapper clearfix">

        <div class="home-row hashtag-content clearfix" id="ruis">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">

                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <!-- </a> -->
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">

                  <div class="text-wrap">
                    <h2>Ruis</h2>

                    <p class="black"> Donderdag t/m zondag: 12:00-17:00</p>
                    <a href="http://maps.google.com/?q= Hertogstraat 119, 6511 RX Nijmegen" target="_blank" class="black"><h5 class="fboldup">Hertogstraat 119, 6511 RX Nijmegen</h5> </a>
                    <p>
                      <a href="www.ruisnijmegen.nl" target="_blank" data-label="Artist">www.ruisnijmegen.nl
                      </a>
                    </p>
                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-coffee"></i></a>
                  </div>
                  <!-- </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="singularart">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">
                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <!-- </a> -->
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy ">
                <div class="info">

                  <div class="text-wrap">
                    <h2>Singular Art</h2>

                    <p class="black"> Donderdag t/m zondag: 10:00-18:00<br> en op afspraak. </p>

                    <a href="http://maps.google.com/?q= Waalkade 72, 6511 XR Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Waalkade 72, 6511 XR Nijmegen</h5>
                    </a>
                    <p>
                      <a href="www.singular-art.com" target="_blank" data-label="Artist">www.singular-art.com
                      </a>
                    </p>

                    <a><i class="fa fa-wheelchair"></i></a>

                  </div>
                  <!-- </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="kunstmagazijn">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag" >
                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <!-- </a> -->
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy ">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Kunstmagazijn</h2>
                    <p class="black"> Woensdag t/m zondag: 12:00–17:00</p>
                    <a href="http://maps.google.com/?q= Kanunnik Mijllinckstraat 1 /3, 6525 WS Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Kanunnik Mijllinckstraat 1/3, <br><br> 6525 WS Nijmegen</h5>
                    </a>
                    <p>
                      <a href="www.kunstmagazijn.nl" target="_blank" data-label="Artist">www.kunstmagazijn.nl
                      </a>
                    </p>

                    <a><i class="fa fa-wheelchair"></i></a>

                  </div>
                  <!-- </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="neus">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag ">

                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <!-- </a> -->
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Neus</h2>
                    <p class="black"> </p>
                    <a href="http://maps.google.com/?q= Tweede Walstraat 106, 6511 LS Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Tweede Walstraat 106, <br><br>6511 LS Nijmegen</h5>
                    </a>
                    <p>
                      <a href="www.neusneus.nl" target="_blank" data-label="Artist">www.neusneus.nl
                      </a>
                    </p>

                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-coffee"></i></a>

                  </div>
                  <!-- </a> -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="cafedeplak">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">
                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>De plak</h2>
                    <p class="black">Maandag t/m zondag: 12:00-23:00</p>
                    <a href="http://maps.google.com/?q= Bloemerstraat 90, 6511 EM Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Bloemerstraat 90, 6511 EM Nijmegen</h5>
                    </a>
                    <p>
                      <a href="www.cafedeplak.nl" target="_blank" data-label="Artist">cafedeplak.nl
                      </a>
                    </p>

                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-coffee"></i></a>
                    <a><i class="fa fa-cutlery"></i></a>
                    <a><i class="fa fa-leaf"></i></a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="rozehuis">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">
                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Roze huis</h2>
                    <p class="black">
                      Opening Expo 05-10: 20.00<br>
                      10-10 t/m 12-10: 14.00-18.00<br>
                      17-10 t/m 19-10: 14.00-18.00
                    </p>
                    <a href="http://maps.google.com/?q= Sint Anthoniusplaats 1, 6511 TR Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Sint Anthoniusplaats 1, 6511 TR Nijmegen</h5>
                    </a>
                    <p>
                      <a href="www.rozehuisnijmegen.nl" target="_blank">www.rozehuisnijmegen.nl
                      </a>
                    </p>

                    <a><i class="fa fa-coffee"></i></a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="klinker">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">
                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <!-- </a> -->
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>De Klinker</h2>
                    <p class="black">
                      woensdag &amp; donderdag: 18:00-21:00<br>
                      zaterdag: 12:00-21:00<br>
                      zondag: 18:00-21:00<br>

                    </p>
                    <a href="http://maps.google.com/?q=  Van Broeckhuysenstraat 46, 6511 PK Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup"> Van Broeckhuysenstraat 46,<br><br> 6511 PK Nijmegen</h5>
                    </a>
                    <p>
                      <a href="https://grotebroek.nl/groepen/de-klinker/" target="_blank" data-label="Artist">grotebroek.nl
                      </a>
                    </p>

                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-toilet"></i></a>
                    <a><i class="fa fa-coffee"></i></a>
                    <a><i class="fa fa-cutlery"></i></a>
                    <a><i class="fa fa-leaf"></i></a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="valkhofmuseum">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">
                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <!-- </a> -->
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Valkhof Museum</h2>
                    <p class="black">
                      Dinsdag t/m zondag: 11:00-17:00
                    </p>
                    <a href="http://maps.google.com/?q=  Kelfkensbos 59, 6511 TB Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">  Kelfkensbos 59,<br><br> 6511 TB Nijmegen</h5>
                    </a>
                    <p>
                      <a href="www.museumhetvalkhof.nl" target="_blank" data-label="Artist">www.museumhetvalkhof.nl
                      </a>
                    </p>

                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-toilet"></i></a>
                    <a><i class="fa fa-coffee"></i></a>
                    <a><i class="fa fa-cutlery"></i></a>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="lux">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">
                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <!-- </a> -->
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Lux</h2>
                    <p class="black">
                      Zondag t/m donderdag: 09.00–01.00<br>
                      vrijdag t/m zaterdag: 09.00–02.00

                    </p>
                    <a href="http://maps.google.com/?q=  Mariënburg 38-39, 6511 PS Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Mariënburg 38-39, 6511 PS Nijmegen</h5>
                    </a>
                    <p>
                      <a href="www.lux-nijmegen.nl" target="_blank" data-label="Artist">www.lux-nijmegen.nl
                      </a>
                    </p>

                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-toilet"></i></a>
                    <a><i class="fa fa-coffee"></i></a>
                    <a><i class="fa fa-cutlery"></i></a>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="o42">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">
                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>O42</h2>
                    <p class="black">
                      Maandag t/m zondag: 11:45-22:30

                    </p>
                    <a href="http://maps.google.com/?q=  Oranjesingel 42, 6511 NW Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Oranjesingel 42, 6511 NW Nijmegen</h5>
                    </a>
                    <p>
                      <a href="https://filmhuiso42.nl/" target="_blank" data-label="Artist">https://filmhuiso42.nl/</a>
                    </p>

                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-toilet"></i></a>
                    <a><i class="fa fa-coffee"></i></a>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="debijstand">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag ">

                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Bijstand</h2>
                    <p class="black">
                      Woensdag t/m zaterdag: 15:00-03:00
                      Zondag t/m dinsdag 15:00-02:00
                    </p>
                    <a href="http://maps.google.com/?q= Van Welderenstraat 104, 6511 MS Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Van Welderenstraat 104,<br><br> 6511 MS Nijmegen</h5>
                    </a>
                    <p>
                      <a href="http://www.debijstand.nl/" target="_blank" data-label="Artist">http://www.debijstand.nl/</a>
                    </p>

                    <a><i class="fa fa-coffee"></i></a>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="extrapool">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">

                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Extrapool</h2>
                    <p class="black">
                      Zaterdag 12 oktober: 20:30-23:30
                    </p>
                    <a href="http://maps.google.com/?q= Tweede Walstraat 5, 6511 LN Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Tweede Walstraat 5,<br><br> 6511 LN Nijmegen</h5>
                    </a>
                    <p>
                      <a href="www.extrapool.nl" target="_blank" data-label="Artist">www.extrapool.nl</a>
                    </p>
                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-coffee"></i></a>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="brebl">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">

                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <!-- </a> -->
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Brebl</h2>
                    <p class="black">
                      Vrijdag 18 oktober : 23.00-04.00 uur
                    </p>
                    <a href="http://maps.google.com/?q= Waalbandijk 14 E/F, 6541 AJ Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Waalbandijk 14 E/F, 6541 AJ Nijmegen</h5>
                    </a>
                    <p>
                      <a href="www.facebook.com/dollhousequeerparty/
                      " target="_blank" data-label="Artist">Facebook</a>
                    </p>
                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-toilet"></i></a>
                    <a><i class="fa fa-coffee"></i></a>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="poppop">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">

                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Popop</h2>
                    <p class="black">

                      Vrijdag 4 oktober: vanaf 19.30

                    </p>
                    <a href="http://maps.google.com/?q= Elzenstraat 4b, 6523 EV Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Elzenstraat 4b, 6523 EV Nijmegen</h5>
                    </a>
                    <p>
                      <a href="https://www.popop.art/" target="_blank" data-label="Artist">www.popop.art</a>
                    </p>

                    <a><i class="fa fa-coffee"></i></a>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="demarienburg">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">

                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>Bibliotheek de Mariënburg</h2>
                    <p class="black">

                      Zaterdag 12 oktober: 23:00 - 03:00

                    </p>
                    <a href="http://maps.google.com/?q= Mariënburg 29, 6511 PS Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Mariënburg 29, 6511 PS Nijmegen </h5>
                    </a>
                    <p>
                      <a href="https://www.obgz.nl/" target="_blank" data-label="Artist">www.obgz.nl</a>
                    </p>
                    <a><i class="fa fa-wheelchair"></i></a>
                    <a><i class="fa fa-toilet"></i></a>
                    <a><i class="fa fa-coffee"></i></a>
                    <a><i class="fa fa-cutlery"></i></a>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="elcorte">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">

                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>El Corte Tango</h2>
                    <p class="black">

                      Donderdag 17 oktober: 19:30 - 22:00


                    </p>
                    <a href="http://maps.google.com/?q= Graafseweg 108, Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Graafseweg 108, Nijmegen </h5>
                    </a>
                    <p>
                      <a href="https://www.elcorte.com/" target="_blank" data-label="Artist">www.elcorte.com</a>
                    </p>




                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hashtag-row home-row hashtag-content clearfix" id="deonderbroek">
          <div class="inner-wrapper">
            <div class="home-mod hashtag-shape right">
              <div class="hashtag">

                <div class="icon">

                  <div class="full" style="opacity: 1;">
                    <svg viewBox="0 0 651 408" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                      <defs></defs>
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Artboard-1" sketch:type="MSArtboardGroup" transform="translate(-175.000000, -296.000000)">
                          <g id="lovewins" sketch:type="MSLayerGroup" transform="translate(175.000000, 296.000000)">
                            <g id="Group-6" sketch:type="MSShapeGroup">
                              <path d="M0,66.7919799 L16.2907268,358.39599 L105.889724,364.912281 L91.2280702,55.3884712 L0,66.7919799 Z" id="Path-197" fill="#E10000"></path>
                              <path d="M91.2280702,55.3884712 L104.260652,364.912281 L200.37594,374.686717 L195.488722,45.6140351 L91.2280702,55.3884712 Z" id="Path-198" fill="#F58100"></path>
                              <path d="M307.894737,34.2105263 L299.749373,381.203008 L394.235589,389.348371 L420.300752,22.8070175 L307.894737,34.2105263 Z" id="Path-199" fill="#179305"></path>
                              <path d="M420.300752,22.8070175 L394.235589,389.348371 L505.012531,399.122807 L547.368421,9.77443609 L420.300752,22.8070175 Z" id="Path-200" fill="#1D41F5"></path>
                              <path d="M546.739348,9.77443609 L504.383459,399.122807 L600.498747,407.26817 L651,0 L546.739348,9.77443609 Z" id="Path-201" fill="#9400E9"></path>
                              <path d="M195.488722,45.6140351 L200.37594,374.686717 L299.749373,381.203008 L307.894737,34.2105263 L195.488722,45.6140351 Z" id="Path-1067" fill="#E9BF00"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <!-- </a> -->
              </div>

            </div>
            <div class="home-mod hashtag-copy left">
              <div class="copy">
                <div class="info">
                  <div class="text-wrap">
                    <h2>De Onderbroek</h2>
                    <p class="black">

                      Zaterdag 12 oktober: 23:00 - 03:00

                    </p>
                    <a href="http://maps.google.com/?q= Tweede Walstraat 21, 6511LN Nijmegen" target="_blank" class="black">
                      <h5 class="fboldup">Tweede Walstraat 21, 6511LN Nijmegen </h5>
                    </a>
                    <p>
                      <a href="https://www.grotebroek.nl/lokatie/deonderbroek/" target="_blank" data-label="Artist">www.grotebroek.nl</a>
                    </p>
                    <a><i class="fa fa-coffee"></i></a>



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
