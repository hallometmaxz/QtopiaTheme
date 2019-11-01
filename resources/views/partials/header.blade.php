<header class="has-disclaimer">
  <nav>
    <div class="logo original ">
      <a href="<?php echo home_url(); ?>">
        <img src="@asset('images/qtopia-logo-peacock.png')" alt="Qtopia" class="original">
      </a>
    </div>
    <a id="mobile-menu-button" class="mobile">
      <span></span>
    </a>
    <ul>
      <li><a href="/#about">Over ons</a></li>
      <li><a href=""><i class="fa fa-angle-down"></i>&nbsp; Programma</a></li>
      <li><a href="/locations">Locaties</a></li>
      <li><a href="/artists">Artiesten</a></li>
      <li><a href="/#contact">Contact</a></li>
    </ul>
    {{-- @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
  @endif --}}
</nav>
</header>
<div id="dropdowns" class="black-bg">
  <div class="close">
    <a href="#">
      <img src="@asset('images/close-white.svg')">
    </a>
  </div>
  <div class="programs-nav">
    <div class="wrapper">
      <h6>Filter By:</h6>
      <div class="column50 padding100">
        <ul>
          <li>
            <a href="/program">
              <h3>Programma &nbsp;
                <i class="fa fa-long-arrow-right"></i>
              </h3>

              <p>Alle evenementen, exposities en artiesten verzameld op één pagina.
              </p>
            </a>
          </li>
          <li>
            <a href="/events">
              <h3>Events &nbsp;
                <i class="fa fa-long-arrow-right">
                </i>
              </h3>
              <p>Benieuwd naar wat er zich bij jou in de buurt afspeelt? Bekijk het hier! </p>
            </a>
          </li>
          <li>
            <a href="/expositions">
              <h3>Exposities &nbsp;<i class="fa fa-long-arrow-right"></i></h3>
              <p>Bekijk alle exposities. </p>
            </a>
          </li>

        </ul>
      </div>
      <!--column50-->
      <div class="column50 padding100">
        <ul>
          <li>
            <a href="/donate">
              <h3>Get involved &nbsp;
                <i class="fa fa-long-arrow-right"></i>
              </h3>
              <p>Dit jaar willen we een extra inspanning leveren om geld in te zamelen van mensen voor mensen, en daar kun jij ons bij helpen.</p></a>
            </li>

            <li>
              <a href="/404"><h3>Vorige Edities &nbsp;<i class="fa fa-long-arrow-right"></i></h3>
                <p>Wil je nog even een kijkje nemen in ons programma van vorig jaar? <br>Klik dan hier!</p></a>
              </li>
              <li>
                <a href="/faq"><h3>FAQ &nbsp;<i class="fa fa-long-arrow-right"></i></h3>
                  <p>Vind antwoorden op alle veelgestelde vragen rondom QTOPIA en de queer communitie.</p></a>
                </li>
                <li>
                  <a href="@asset('images/progrmma2019lr.pdf')" target="_blank"><h3>Festival Guide &nbsp;<i class="fa fa-file-pdf-o"></i></h3>
                    <p>Download de PDF van het programmaboekje.</p></a>
                  </li>
                </ul>
              </div>
              <!--column50-->
            </div>
          </div>
          <!--programs-nav-->
        </div>
