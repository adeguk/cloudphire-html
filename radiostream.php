﻿<?php
$extraCss = [
  '<link href="https://cdn.rankon.co.uk/css/magnific-popup.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/flickity.min.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/aos.min.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/animate.min.css" rel="stylesheet">'
];
include_once('inc/_header.php');
?>

<!-- ***** SLIDER ***** -->
<div class="main-container slider">
  <div class="silder-container">
    <div class="carousel header-main-slider">
      <!-- 1 Slider -->
      <div class="carousel-cell overlay">
        <div class="slider-content">
          <div class="container">
            <div class="col-sm-12 col-md-8 px-0">
              <h1 data-aos="fade-up" data-aos-duration="800">Start Your RADIO Station Today</h1>
              <p data-aos="fade-up" data-aos-duration="1200">Broadcast worry-free with unlimited internet radio hosting. We provide premium streaming services with <b class="c-pink">unbeatable pricing and quality support.</b></p>
              <a href="contact.php" class="btn btn-default-yellow-fill me-2 mb-2">Start Free Trial</a>
              <a href="#radioplans" class="btn btn-default-pink-fill mb-2">View Pricing</a>
            </div>
          </div>
        </div>
        <div class="carousel full-slider">
          <img src="assets/img/topbanner18.jpg" alt="Radio Station">
        </div>
      </div>
      <!-- 2 Slider -->
      <div class="carousel-cell overlay">
        <div class="slider-content">
          <div class="container">
            <div class="col-sm-12 col-md-9 px-0">
              <h1 data-aos="fade-up" data-aos-duration="800">Start Your Own Stream Hosting Business</h1>
              <p data-aos="fade-up" data-aos-duration="1200">Start your own profitable business reselling Shoutcast & Icecast service. <br><b class="c-pink">Start earning money today!</b></p>
              <a href="contact.php" class="btn btn-default-yellow-fill me-2 mb-2">Learn More</a>
              <a href="#radioplans" class="btn btn-default-pink-fill mb-2">View Pricing</a>
            </div>
          </div>
        </div>
        <div class="carousel full-slider">
          <img src="assets/img/topbanner19.jpg" alt="Stream Hosting Business">
        </div>
      </div>

    </div>
  </div>
</div>
<!-- ***** FEATURES ***** -->
<section class="services bg-colorstyle sec-up-slider toppadding bottompadding">
  <div class="container">
    <div class="sec-main mb-0 sec-bg1 bg-colorstyle nomargin nopadding noshadow service-wrap">
      <div class="randomline hideelement">
        <div class="bigline"></div>
        <div class="smallline"></div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="service-section rounded-0 p-0 m-0 entrychange border-end shadow-none bg-colorstyle noshadow">
            <div class="plans badge feat bg-red">shoutcast</div>
            <img class="svg" src="assets/fonts/svg/sinal.svg" alt="">
            <div class="title mergecolor">High Quality</div>
            <p class="subtitle seccolor">
              <b>Stream at any bitrate</b> with our wide range of the ICEcast & SHOUTcast hosting plans.
            </p>
            <a href="" class="btn btn-default-yellow-fill">Read more</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="service-section rounded-0 p-0 m-0 entrychange border-end  shadow-none bg-colorstyle noshadow">
            <div class="plans badge feat bg-red">automation</div>
            <img class="svg" src="assets/fonts/svg/headphones.svg" alt="">
            <div class="title mergecolor">Auto DJ</div>
            <p class="subtitle seccolor">
              <b>Easily start broadcasting</b> with our complete automation platform. No software required.
            </p>
            <a href="" class="btn btn-default-yellow-fill">Read more</a>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="service-section rounded-0 p-0 m-0 shadow-none bg-colorstyle noshadow">
            <img class="svg" src="assets/fonts/svg/stream.svg" alt="">
            <div class="title mergecolor">Unlimited</div>
            <p class="subtitle seccolor">
              <b>All plans include unlimited</b> listeners and bandwidth, allowing broadcast worry-free.
            </p>
            <a href="" class="btn btn-default-yellow-fill">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** PRICING TABLES ***** -->
<section id="radioplans" class="tabs pricing special sec-normal sec-bg3 bottompadding bg-seccolorstyle">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="section-heading text-white mergecolor">Get <b class="c-pink">ON AIR</b> in 60 seconds</h2>
        <p class="section-subheading text-white mergecolor">All of our radio hosting plans include unlimited listeners and bandwidth, allowing you to grow your station without worrying about listener caps.</p>
      </div>
    </div>
    <div class="text-center mt-3">
      <div class="tabs-header">
        <ul class="btn-group">
          <li class="btn btn-secondary active mb-2 me-3">Radio Stream Hosting</li>
          <li class="btn btn-secondary">Radio Stream Reseller</li>
        </ul>
      </div>
      <div id="run-switch" class="run-switch">
        <div class="mo">Monthly Price</div>
        <div class="switch"></div>
        <div class="an active">Anually Price</div>
      </div>
    </div>
    <div class="tabs-content">
      <div class="tabs-item active">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="price-container wrapper first text-start noshadow">
              <div class="price-content top-content bg-colorstyle topradius">
                <div class="pricing-heading">
                  <img class="svg mb-3" src="https://cdn.rankon.co.uk/fonts/svg/cloudfiber.svg" alt="Radio Starter Hosting from £62.00">
                  <h3 class="title">Starter Hosting <br>
                    <span class="subtitle">Great for hobbycasting</span>
                  </h3>
                </div>
                <div class="fromer seccolor"></div>
                <div class="price seccolor"><sup class="coin">$</sup><span class="value">32.00</span> <span class="period annually">/year</span></div>
                <a href="" class="btn btn-default-yellow-fill">Place Your Order</a>
              </div>
              <ul class="list-info">
                <li><i class="icon-stream"></i> <span class="c-yellow">STORAGE</span><br> <span>4GB Auto DJ</span></li>
                <li><i class="icon-speed"></i> <span class="c-yellow">BANDWIDTH</span><br> <span>10GB Monthly</span></li>
                <li><i class="icon-headphones"></i> <span class="c-yellow">SLOTS</span><br> <span>120 Listener</span></li>
                <li><i class="icon-router"></i> <span class="c-yellow">BROADCAST</span><br> <span>128kb/s Quality</span></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="price-container wrapper text-start noshadow">
              <div class="plans badge feat bg-red">recommended</div>
              <div class="price-content top-content bg-colorstyle topradius">
                <div class="pricing-heading">
                  <img class="svg mb-3" src="https://cdn.rankon.co.uk/fonts/svg/dedicated.svg" alt="Radio Starter Hosting from £62.00">
                  <h3 class="title">Gold Hosting<br>
                    <span class="subtitle">Great for medium broadcasters</span>
                  </h3>
                </div>
                <div class="price seccolor"><sup class="coin">$</sup><span class="value">49.00</span> <span class="period annually">/year</span></div>
                <a href="" class="btn btn-default-yellow-fill">Place Your Order</a>
              </div>
              <ul class="list-info">
                <li><i class="icon-stream"></i> <span class="c-yellow">STORAGE</span><br> <span>6GB Auto DJ</span></li>
                <li><i class="icon-speed"></i> <span class="c-yellow">BANDWIDTH</span><br> <span>30GB Monthly</span></li>
                <li><i class="icon-headphones"></i> <span class="c-yellow">SLOTS</span><br> <span>350 Listener</span></li>
                <li><i class="icon-router"></i> <span class="c-yellow">BROADCAST</span><br> <span>320kb/s Quality</span></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="price-container wrapper third text-start noshadow">
              <div class="price-content top-content bg-colorstyle topradius">
                <div class="pricing-heading">
                  <img class="svg mb-3" src="https://cdn.rankon.co.uk/fonts/svg/vps.svg" alt="Radio Starter Hosting from £62.00">
                  <h3 class="title">Pro Hosting<br>
                    <span class="subtitle">Great for pro broadcasters</span>
                  </h3>
                </div>
                <div class="price seccolor"><sup class="coin">$</sup><span class="value">80.00</span> <span class="period annually">/year</span></div>
                <a href="" class="btn btn-default-yellow-fill">Place Your Order</a>
              </div>
              <ul class="list-info">
                <li><i class="icon-stream"></i> <span class="c-yellow">STORAGE</span><br> <span>16GB Auto DJ</span></li>
                <li><i class="icon-speed"></i> <span class="c-yellow">BANDWIDTH</span><br> <span>Unlimited</span></li>
                <li><i class="icon-headphones"></i> <span class="c-yellow">SLOTS</span><br> <span>Unlimited</span></li>
                <li><i class="icon-router"></i> <span class="c-yellow">BROADCAST</span><br> <span>568kb/s Quality</span></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="tabs-item">
        <div class="row ">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="price-container wrapper first text-start noshadow">
              <div class="plans badge feat bg-red">best seller</div>
              <div class="price-content top-content bg-colorstyle topradius">
                <div class="pricing-heading">
                  <img class="svg mb-3" src="https://cdn.rankon.co.uk/fonts/svg/cloudfiber.svg" alt="Starter Hosting from £62.00">
                  <h3 class="title">Starter Reseller<br>
                    <span class="subtitle">Great for pro broadcasters</span>
                  </h3>
                </div>
                <div class="price seccolor"><sup class="coin">$</sup><span class="value">130.00</span> <span class="period annually">/month</span></div>
                <a href="" class="btn btn-default-yellow-fill">Order Now</a>
              </div>
              <ul class="list-info">
                <li><i class="icon-layers"></i> <span class="c-yellow">ACCOUNTS</span><br> <span>60 Accounts</span></li>
                <li><i class="icon-stream"></i> <span class="c-yellow">STORAGE</span><br> <span>120GB Auto DJ</span></li>
                <li><i class="icon-speed"></i> <span class="c-yellow">BANDWIDTH</span><br> <span>Unlimited</span></li>
                <li><i class="icon-headphones"></i> <span class="c-yellow">SLOTS</span><br> <span>2500 Listener</span></li>
                <li><i class="icon-router"></i> <span class="c-yellow">BROADCAST</span><br> <span>128kb/s Quality</span></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="price-container wrapper text-start noshadow">
              <div class="price-content top-content bg-colorstyle topradius">
                <div class="pricing-heading">
                  <img class="svg mb-3" src="https://cdn.rankon.co.uk/fonts/svg/dedicated.svg" alt="Gold Hosting from £62.00">
                  <h3 class="title">Gold Reseller<br>
                    <span class="subtitle">Great for pro broadcasters</span>
                  </h3>
                </div>
                <div class="price seccolor"><sup class="coin">$</sup><span class="value">250.00</span> <span class="period annually">/month</span></div>
                <a href="" class="btn btn-default-yellow-fill">Order Now</a>
              </div>
              <ul class="list-info bg-purple">
                <li><i class="icon-layers"></i> <span class="c-yellow">ACCOUNTS</span><br> <span>90 Accounts</span></li>
                <li><i class="icon-stream"></i> <span class="c-yellow">STORAGE</span><br> <span>520GB Auto DJ</span></li>
                <li><i class="icon-speed"></i> <span class="c-yellow">BANDWIDTH</span><br> <span>Unlimited</span></li>
                <li><i class="icon-headphones"></i> <span class="c-yellow">SLOTS</span><br> <span>8000 Listener</span></li>
                <li><i class="icon-router"></i> <span class="c-yellow">BROADCAST</span><br> <span>320kb/s Quality</span></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="price-container wrapper third text-start noshadow">
              <div class="price-content top-content bg-colorstyle topradius">
                <div class="pricing-heading">
                  <img class="svg mb-3" src="https://cdn.rankon.co.uk/fonts/svg/vps.svg" alt="Pro Hosting from £62.00">
                  <h3 class="title">Pro Reseller<br>
                    <span class="subtitle">Great for pro broadcasters</span>
                  </h3>
                </div>                
                <div class="price seccolor"><sup class="coin">$</sup><span class="value">390.00</span> <span class="period annually">/month</span></div>
                <a href="" class="btn btn-default-yellow-fill">Order Now</a>
              </div>
              <ul class="list-info">
                <li><i class="icon-layers"></i> <span class="c-yellow">ACCOUNTS</span><br> <span>150 Accounts</span></li>
                <li><i class="icon-stream"></i> <span class="c-yellow">STORAGE</span><br> <span>1TB Auto DJ</span></li>
                <li><i class="icon-speed"></i> <span class="c-yellow">BANDWIDTH</span><br> <span>Unlimited</span></li>
                <li><i class="icon-headphones"></i> <span class="c-yellow">SLOTS</span><br> <span>Unlimited</span></li>
                <li><i class="icon-router"></i> <span class="c-yellow">BROADCAST</span><br> <span>568kb/s Quality</span></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** FEATURES ***** -->
<section id="scroll" class="history-section feat01 sec-normal bg-colorstyle">
  <div class="container">
    <div class="randomline">
      <div class="bigline"></div>
      <div class="smallline"></div>
    </div>
    <div class="sec-main sec-bg1 bg-colorstyle noshadow nopadding">
      <div class="row">
        <div class="col-md-12 col-lg-5 wow animated fadeInUp fast">
          <img class="svg first" src="assets/patterns/worldstream.svg" alt="Broadcast">
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1">
          <div class="info-content">
            <h1 class="fw-bold mb-3 mergecolor">You Can Broadcast Anywhere, Anytime</h1>
            <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
          </div>
          <a href="" class="btn btn-default-pink-fill mt-4 mb-5 me-3">Listen Now <i class="far fa-play-circle"></i></a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <div class="info-content">
            <h1 class="fw-bold mb-3 mergecolor">Radio Programming From The Cloud</h1>
            <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
          </div>
          <a href="" class="btn btn-default-yellow-fill mt-3">Learn more</a>
        </div>
        <div class="col-md-12 col-lg-5 offset-lg-1 wow animated fadeInUp fast">
          <img class="svg second" src="assets/patterns/radiostream.svg" alt="Radio Programming">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** WHY CHOOSE ANTLER ***** -->
<section class="services sec-normal scrollme motpath toppadding bg-colorstyle">
  <div class="container">
    <div class="service-wrap">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="section-heading mergecolor">Streamline your broadcasting workflow</h2>
          <p class="section-subheading mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
        <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatex="-60" data-easeinout="0">
          <div class="service-section bg-seccolorstyle noshadow">
            <div class="plans badge feat bg-purple">online</div>
            <img class="svg" src="assets/fonts/svg/clock.svg" alt="">
            <div class="title mergecolor">24/7/365 Automation</div>
            <p class="subtitle seccolor">
              Excepteur sint occaecat cupidatat non proident voluptate. Lorem ipsum dolor sit amet, consectetur.
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatey="60" data-easeinout="0">
          <div class="service-section bg-seccolorstyle noshadow">
            <img class="svg" src="assets/fonts/svg/analytics.svg" alt="">
            <div class="title mergecolor">Listener Analytics</div>
            <p class="subtitle seccolor">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatex="60" data-easeinout="0">
          <div class="service-section bg-seccolorstyle noshadow">
            <div class="plans badge feat bg-red">software</div>
            <img class="svg" src="assets/fonts/svg/display.svg" alt="">
            <div class="title mergecolor">Icecast & SHOUTcast</div>
            <p class="subtitle seccolor">
              Excepteur sint occaecat cupidatat non proident voluptate. Lorem ipsum dolor sit amet, consectetur.
            </p>
          </div>
        </div>

        <div class="col-sm-12 col-md-4">
          <div class="service-section bg-seccolorstyle noshadow">
            <img class="svg" src="assets/fonts/svg/twitter.svg" alt="">
            <div class="title mergecolor">Social Media Integration</div>
            <p class="subtitle seccolor">
              Excepteur sint occaecat cupidatat non proident voluptate. Lorem ipsum dolor sit amet, consectetur.
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="service-section bg-seccolorstyle noshadow">
            <div class="plans badge feat bg-grey">auto DJ</div>
            <img class="svg" src="assets/fonts/svg/router.svg" alt="">
            <div class="title mergecolor">Broadcast Live</div>
            <p class="subtitle seccolor">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="service-section bg-seccolorstyle noshadow">
            <div class="plans badge feat bg-red">panel</div>
            <img class="svg" src="assets/fonts/svg/window.svg" alt="">
            <div class="title mergecolor">Innovative Control Panel</div>
            <p class="subtitle seccolor">
              Excepteur sint occaecat cupidatat non proident voluptate. Lorem ipsum dolor sit amet, consectetur.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- **** CONTROL PANEL TOUR ***** -->
<section class="sec-normal history-section custom-flip sec-bg3 scrollme bg-colorstyle">
  <div class="container">
    <div class="popup-gallery">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <h2 class="section-heading text-white mergecolor">Control Panel, the power to scale and grow</h2>
          <p class="section-subheading c-grey-light mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mt-50 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatey="-30" data-easeinout="0">
          <a href="assets/img/controlpanel01.png" class="image-link" title="Caption text example 01">
            <img src="assets/img/controlpanel01.png" data-src="./assets/img/controlpanel01.png" class="lazyload" alt="">
            <div class="zoo-content">
              <div class="icoo">
                <i class="svg icon-eye"></i>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mt-50 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatey="30" data-easeinout="0">
          <a href="assets/img/controlpanel02.png" class="image-link" title="Caption text example 02">
            <img src="assets/img/controlpanel02.png" data-src="./assets/img/controlpanel02.png" class="lazyload" alt="">
            <div class="zoo-content">
              <div class="icoo">
                <i class="svg icon-eye"></i>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 mt-50 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatey="-30" data-easeinout="0">
          <a href="assets/img/controlpanel03.png" class="image-link" title="Caption text example 03">
            <img src="assets/img/controlpanel03.png" data-src="./assets/img/controlpanel03.png" class="lazyload" alt="">
            <div class="zoo-content">
              <div class="icoo">
                <i class="svg icon-eye"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** FAQ. ***** -->
<section class="sec-normal sec-bg1 bg-seccolorstyle bottomhalfpadding">
  <div class="faq">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <h2 class="section-heading mergecolor">F.A.Q Antler Radio Stream</h2>
          <p class="section-subheading mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
        <div class="col-sm-12">
          <div class="accordion faq pt-5">
            <div class="panel-wrap">
              <div class="panel-title seccolor active">
                <span>How can listeners tune into my station??</span>
                <div class="float-end">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus c-pink"></i>
                </div>
              </div>
              <div class="panel-collapse" style="display: block;">
                <div class="wrapper-collapse">
                  <div class="info">
                    <ul class="list seccolor">
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-wrap">
              <div class="panel-title seccolor">
                <span>Are there places to list my show??</span>
                <div class="float-end">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus c-pink"></i>
                </div>
              </div>
              <div class="panel-collapse">
                <div class="wrapper-collapse">
                  <div class="info">
                    <ul class="list seccolor">
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-wrap">
              <div class="panel-title seccolor">
                <span>How can I share my station on Twitter, Facebook, etc?</span>
                <div class="float-end">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus c-pink"></i>
                </div>
              </div>
              <div class="panel-collapse">
                <div class="wrapper-collapse">
                  <div class="info">
                    <ul class="list seccolor">
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-wrap">
              <div class="panel-title seccolor">
                <span>How do I create iOS and Android apps?</span>
                <div class="float-end">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus c-pink"></i>
                </div>
              </div>
              <div class="panel-collapse">
                <div class="wrapper-collapse">
                  <div class="info">
                    <ul class="list seccolor">
                      <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$extraJs = [];
include_once('inc/_footer.php');
?>