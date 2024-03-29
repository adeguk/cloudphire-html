﻿<?php
$extraCss = [
  '<link href="https://cdn.rankon.co.uk/css/magnific-popup.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/filter.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/mixitup.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/animate.min.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/nouislider.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/slick.css" rel="stylesheet">'
];
include_once('inc/_header.php');
?>

<!-- ***** SLIDER ***** -->
<div class="top-header item7 overlay scrollme">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="wrapper animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="1" data-translatey="-50">
          <h1 class="heading">Pricing & Plans</h1>
          <h3 class="subheading">You are free to customize your pricing plans to your liking</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** PRICING TABLES - BOX ***** -->
<section class="pricing special sec-normal motpath bg-colorstyle">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="section-heading mergecolor">Plans Box</h2>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="wrapper first text-start noshadow">
          <div class="top-content bg-seccolorstyle topradius">
            <img class="svg mb-3" src="assets/fonts/svg/privacy.svg" alt="">
            <div class="title">Positive SSL</div>
            <div class="fromer seccolor">+ VAT at 20%</div>
            <div class="price mergecolor"><sup>$</sup>39.99 <span class="period">/year</span></div>
            <a href="" class="btn btn-default-yellow-fill">Buy now</a>
          </div>
          <ul class="list-info">
            <li><i class="icon-lock"></i> <span class="c-purple">DOMAIN</span><br> <span>Secure HTTPS</span></li>
            <li><i class="icon-browser"></i> <span class="c-purple">BROWSER</span><br> <span>Padlock visible</span></li>
            <li><i class="icon-money"></i> <span class="c-purple">WARRANTY</span><br> <span>No included</span></li>
            <li><i class="icon-key"></i> <span class="c-purple">ENCRYPTION</span><br> <span>128/256 bit SHA-2</span></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="wrapper text-start noshadow">
          <div class="plans badge feat bg-pink">most popular</div>
          <div class="top-content bg-seccolorstyle topradius">
            <img class="svg mb-3" src="assets/fonts/svg/privacy.svg" alt="">
            <div class="title">Wildcard SSL</div>
            <div class="fromer seccolor">+ VAT at 20%</div>
            <div class="price mergecolor"><sup>$</sup>88.00 <span class="period">/year</span></div>
            <a href="" class="btn btn-default-yellow-fill">Buy now</a>
          </div>
          <ul class="list-info bg-purple">
            <li><i class="icon-lock"></i> <span class="c-pink">DOMAIN</span><br> <span>Secure HTTPS</span></li>
            <li><i class="icon-browser"></i> <span class="c-pink">BROWSER</span><br> <span>Padlock visible</span></li>
            <li><i class="icon-money"></i> <span class="c-pink">WARRANTY</span><br> <span>$250.000</span></li>
            <li><i class="icon-key"></i> <span class="c-pink">ENCRYPTION</span><br> <span>128/256 bit SHA-2</span></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="wrapper third text-start noshadow">
          <div class="top-content bg-seccolorstyle topradius">
            <img class="svg mb-3" src="assets/fonts/svg/privacy.svg" alt="">
            <div class="title">EV SSL</div>
            <div class="fromer seccolor">+ VAT at 20%</div>
            <div class="price mergecolor"><sup>$</sup>110.99 <span class="period">/year</span></div>
            <a href="" class="btn btn-default-yellow-fill">Buy now</a>
          </div>
          <ul class="list-info">
            <li><i class="icon-lock"></i> <span class="c-purple">DOMAIN</span><br> <span>Secure HTTPS</span></li>
            <li><i class="icon-browser"></i> <span class="c-purple">BROWSER</span><br> <span>Green bar visible</span></li>
            <li><i class="icon-money"></i> <span class="c-purple">WARRANTY</span><br> <span>$1.000.000</span></li>
            <li><i class="icon-key"></i> <span class="c-purple">ENCRYPTION</span><br> <span>128/256 bit SHA-2</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** PRICING TABLES - COMPARISON ***** -->
<section class="sec-normal bg-colorstyle">
  <div class="best-plans pricing">
    <div class="container">
      <div class="col-sm-12 mb-5">
        <h2 class="section-heading mergecolor">Plans Comparison</h2>
      </div>
      <div class="randomline">
        <div class="bigline"></div>
        <div class="smallline"></div>
      </div>
      <div class="sec-main sec-bg1">
        <div class="plans badge feat bg-pink hideelement">Compare All GIT Plans</div>
        <div class="row">
          <div class="col-sm-12">
            <div id="table-container" class="table-responsive-lg">
              <table id="maintable" class="table">
                <thead>
                  <tr>
                    <td></td>
                    <td>
                      <div class="title">Business GIT</div>
                      <div class="price mergecolor"><sup>$</sup>2.99<span class="period">/mo</span></div>
                      <div class="plans badge bg-grey">Renews $4.00 /mo</div>
                      <div class="info seccolor">Great start for a single site</div>
                      <a href="" class="btn btn-default-yellow-fill">Buy Now</a><br>
                    </td>
                    <td>
                      <div class="title">Professional GIT</div>
                      <div class="price mergecolor"><sup>$</sup>4.00<span class="period">/mo</span></div>
                      <div class="plans badge bg-grey">Renews $4.00 /mo</div>
                      <div class="info seccolor">More sites and intensive resources</div>
                      <a href="" class="btn btn-default-yellow-fill">Buy Now</a>
                    </td>
                    <td>
                      <div class="title">Enterprise GIT</div>
                      <div class="price mergecolor"><sup>$</sup>7.99<span class="period">/mo</span></div>
                      <div class="plans badge bg-grey">Renews $15.00 /mo</div>
                      <div class="info seccolor">High performance & unlimited sites</div>
                      <a href="" class="btn btn-default-yellow-fill">Buy Now</a>
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="title-table" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="I must explain to you">Websites
                      </div>
                    </td>
                    <td>2 Websites</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                  </tr>
                  <tr>
                    <td>
                      <div id="element" class="title-table" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="I must explain to you">SSD Storage
                      </div>
                    </td>
                    <td>20GB SSD</td>
                    <td>60GB SSD</td>
                    <td>120GB SSD</td>
                  </tr>
                  <tr>
                    <td class="title-table">Database</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                  </tr>
                  <tr>
                    <td class="title-table"><span class="badge bg-purple">hot</span> Git Support</td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="title-table"><span class="badge bg-pink">free</span> SSL Certificate</td>
                    <td>Positive SSL</td>
                    <td>Positive SSL</td>
                    <td>Wildcard SSL</td>
                  </tr>
                  <tr>
                    <td class="title-table">Auto Daily Backups</td>
                    <td><i class="fas fa-times seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="title-table">Technology</td>
                    <td>GIT, PHP, MySQL</td>
                    <td>GIT, PHP, MySQL</td>
                    <td>GIT, PHP, MySQL</td>
                  </tr>
                  <tr>
                    <td class="title-table">Traffic</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                  </tr>
                  <tr>
                    <td class="title-table"><span class="badge bg-pink">free</span> Control Panel</td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="title-table">Deployment</td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="title-table">SSH Access</td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="title-table"><span class="badge bg-purple">hot</span> Push and Pull</td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="title-table"><span class="badge bg-purple">plus</span> Multiple Branches</td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="title-table"><span class="badge bg-grey">premium</span> 24/7 Ticket Support</td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="title-table">Live Chat Support</td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="title-table">Money-back Guarantee</td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                    <td><i class="fas fa-check seccolor"></i></td>
                  </tr>
                  <tr>
                    <td class="border-0 sticky-stopper"></td>
                    <td><a href="" class="btn btn-default-yellow-fill">Buy Now</a></td>
                    <td><a href="" class="btn btn-default-yellow-fill">Buy Now</a></td>
                    <td><a href="" class="btn btn-default-yellow-fill">Buy Now</a></td>
                  </tr>
                </tbody>
              </table>
              <div id="bottom_anchor"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr class="fullline d-none">
<!-- ***** PRICING TABLES - CAROUSEL ***** -->
<section class="slick sec-normal sec-bg3 bg-colorstyle">
  <div class="container">
    <h2 class="section-heading text-white mergecolor">Plans Carousel</h2>
  </div>
  <div id="slider">
    <div class="plan-container">
      <div class="wrapper noshadow">
        <div class="top-content bg-seccolorstyle">
          <div class="plans badge feat bg-pink">Managed</div>
          <div><img class="svg mb-3" src="assets/fonts/svg/vps.svg" alt=""></div>
          <div class="title">Cloud VPS</div>
          <div class="fromer seccolor">windows</div>
          <div class="price mergecolor"><sup>$</sup>109.99 <span class="period">/mo</span></div>
          <a href="" class="btn btn-default-yellow-fill">Configure</a>
        </div>
        <ul class="list-info bg-pink">
          <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>2 Cores</span></li>
          <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>2Gb Memory</span></li>
          <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>20GB SSD Space</span></li>
          <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>1TB Bandwidth</span></li>
        </ul>
      </div>
    </div>
    <div class="plan-container">
      <div class="wrapper bg-seccolorstyle noshadow">
        <div class="top-content bg-seccolorstyle">
          <div class="plans badge feat bg-grey">Plesk Onyx</div>
          <img class="svg mb-3" src="assets/fonts/svg/dedicated.svg" alt="">
          <div class="title">Dedicated Server</div>
          <div class="fromer seccolor">windows</div>
          <div class="price mergecolor"><sup>$</sup>185.00 <span class="period">/mo</span></div>
          <a href="" class="btn btn-default-yellow-fill">Configure</a>
        </div>
        <ul class="list-info bg-purple">
          <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>4x 3.20Ghz 2 Cores</span></li>
          <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>16GB (up to 32GB)</span></li>
          <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span></li>
          <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
        </ul>
      </div>
    </div>
    <div class="plan-container">
      <div class="wrapper bg-seccolorstyle noshadow">
        <div class="top-content bg-seccolorstyle">
          <img class="svg mb-3" src="assets/fonts/svg/cloudfiber.svg" alt="">
          <div class="title">Cloud Hosting</div>
          <div class="fromer seccolor">cPanel</div>
          <div class="price mergecolor"><sup>$</sup>24.99 <span class="period">/mo</span></div>
          <a href="" class="btn btn-default-yellow-fill">Order now</a>
        </div>
        <ul class="list-info bg-pink">
          <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>250GB SSD</span></li>
          <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>1TB Bandwidth</span></li>
          <li><i class="icon-emailopen"></i> <span class="c-purple">EMAIL</span><br> <span>120 Emails</span></li>
          <li><i class="icon-domains"></i> <span class="c-purple">TLD</span><br> <span>30 Domains</span></li>
        </ul>
      </div>
    </div>
    <div class="plan-container">
      <div class="wrapper bg-seccolorstyle noshadow">
        <div class="top-content bg-seccolorstyle">
          <img class="svg mb-3" src="assets/fonts/svg/reseller.svg" height="65" alt="">
          <div class="title">Cloud Reseller</div>
          <div class="fromer seccolor">Plesk Onyx</div>
          <div class="price mergecolor"><sup>$</sup>36.90 <span class="period">/mo</span></div>
          <a href="" class="btn btn-default-yellow-fill">Order now</a>
        </div>
        <ul class="list-info bg-purple">
          <li><i class="icon-drives"></i> <span class="c-pink">DISK</span><br> <span>250GB SSD</span></li>
          <li><i class="icon-speed"></i> <span class="c-pink">DATA</span><br> <span>1TB Bandwidth</span></li>
          <li><i class="icon-emailopen"></i> <span class="c-pink">EMAIL</span><br> <span>120 Emails</span></li>
          <li><i class="icon-domains"></i> <span class="c-pink">TLD</span><br> <span>30 Domains</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ***** PRICING TABLES - HORIZONTAL ***** -->
<section id="highlights" class="sec-normal best-plans pricing exapath sec-bg3 bg-colorstyle">
  <div class="container">
    <div class="col-sm-12 mb-5">
      <h2 class="section-heading mergecolor">Pricing Tables</h2>
    </div>
    <div class="sec-main sec-bg1">
      <div class="plans badge feat bg-pink hideelement">highlights</div>
      <div class="row">
        <div class="col-sm-12">
          <div class="table-responsive-lg">
            <table class="table compare">
              <thead>
                <tr>
                  <td class="bb-green title mergecolor">Dedicated Processors</td>
                  <td class="bb-green title mergecolor">Memory</td>
                  <td class="bb-green title mergecolor">Storage</td>
                  <td class="bb-green title mergecolor">Monthly</td>
                  <td class="bb-green title mergecolor">Availability</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="badge bg-pink me-1">HOT</div> E3-1230 v3 3.3GHz Haswell | 4 Cores
                  </td>
                  <td>32GB</td>
                  <td>320GB SSD</td>
                  <td><span class="ltgh">$99.00</span> <b class="c-black mergecolor">$59.00</b></td>
                  <td><a href="" class="btn btn-default-yellow-fill">Config</a></td>
                </tr>
                <tr>
                  <td>
                    <div class="badge bg-pink me-1">SALE</div> E3-1230 v5 3.4GHz Skylake | 4 Cores
                  </td>
                  <td>32GB</td>
                  <td>520GB SSD</td>
                  <td><span class="ltgh">$177.00</span> <b class="c-black mergecolor">$120.00</b></td>
                  <td><a href="" class="btn btn-default-yellow-fill">Config</a></td>
                </tr>
                <tr>
                  <td>
                    <div class="badge bg-grey me-1">OUT</div> E3-1230 v5 3.4GHz Skylake | 8 Cores
                  </td>
                  <td>64GB</td>
                  <td>960GB SSD</td>
                  <td><b class="c-black mergecolor">$239.00</b></td>
                  <td><a href="" class="btn btn-default-fill disabled">Sold out</a></td>
                </tr>
                <tr>
                  <td class="border-0">2x E5-2620 v4 2.1GHz Broadwell | 16 Cores</td>
                  <td class="border-0">128GB</td>
                  <td class="border-0">4x 960GB SSD</td>
                  <td class="border-0"><b class="c-black mergecolor">$410.00</b></td>
                  <td class="border-0"><a href="" class="btn btn-default-yellow-fill">Config</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** PRICING TABLES - SLIDER ***** -->
<section id="custom" class="sec-normal sec-bg2 bg-colorstyle">
  <div class="container">
    <div class="wpc-cloud-range">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="section-heading mergecolor">Plans Slider</h2>
        </div>
        <div class="col-sm-12">
          <div class="slider-ui" data-handle="1">
            <input class="slider-inp invisible" data-count-step="5" type="text">
            <div class="slider-line"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="wpc-vps-info">
      <div class="row">
        <div class="col-md-12 col-lg-9">
          <div class="row">
            <div class="col-sm-12 col-md-4 position-relative">
              <h3 class="title bg-seccolorstyle noshadow">
                <i class="icon-cpu"></i> <span class="mergecolor">CPU</span> <span id="cpu-val" class="info">---</span>
              </h3>
            </div>
            <div class="col-sm-12 col-md-4 position-relative">
              <h3 class="title bg-seccolorstyle noshadow">
                <i class="icon-ram"></i> <span class="mergecolor">RAM</span> <span id="ram-val" class="info">---</span>
              </h3>
            </div>
            <div class="col-sm-12 col-md-4 position-relative">
              <h3 class="title bg-seccolorstyle noshadow">
                <i class="icon-drivessd"></i> <span class="mergecolor">Disk Space</span> <span id="disk-val" class="info">---</span>
              </h3>
            </div>
            <div class="col-sm-12 col-md-4 position-relative">
              <h3 class="title bg-seccolorstyle noshadow">
                <i class="icon-speed"></i> <span class="mergecolor">Bandwidth</span> <span id="bw-val" class="info">---</span>
              </h3>
            </div>
            <div class="col-sm-12 col-md-4 position-relative">
              <h3 class="title bg-seccolorstyle noshadow">
                <i class="icon-repair"></i> <span class="mergecolor">Setup</span> <span id="setup-val" class="info">---</span>
              </h3>
            </div>
            <div class="col-sm-12 col-md-4 position-relative">
              <h3 class="title bg-seccolorstyle noshadow">
                <i class="icon-network"></i> <span class="mergecolor">IP Address</span> <span id="ip-val" class="info">---</span>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-3">
          <div class="h-plans-info">
            <div class="content-price price-container bg-seccolorstyle noshadow">
              <div id="run-switch" class="run-switch">
                <div class="switch m-0" onclick="switchVisible();"></div>
              </div>
              <div class="price-content">
                <div class="plans badge feat bg-pink period">month</div>
                <div class="price"><span class="symbol coin mergecolor">$</span>
                  <span id="price-val" class="mergecolor"></span>
                  <span id="priceon-val" class="mergecolor"></span>
                </div>
                <div class="infos">
                  <div class="badge feat bg-grey">Info</div> <span class="seccolor">If you subscribe for an extended period, you will get a discount</span>
                </div>
                <a href="#" class="btn btn-default-yellow-fill">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="btn btn-default-pink-fill cd-filter-trigger wow animated shake delay-2s"><i class="fa fa-filter"></i> Show Filter</a>
  </div>
</section>

<!-- ***** CONTROLS ***** -->
<section class="cd-main-content sec-normal bg-seccolorstyle">
  <div class="cd-filter bg-seccolorstyle">
    <form>
      <div class="container">
        <div class="sec-main pb-5 sec-bg1 bg-seccolorstyle noshadow nopadding">
          <div class="row">
            <a href="#0" class="cd-close"><i class="fas fa-long-arrow-alt-left"></i></a>
            <div class="col-md-6">
              <div class="cd-filter-block">
                <h4 class="mergecolor">Choose Server</h4>
                <ul class="radio-group radios-filter cd-filter-content list">
                  <li>
                    <input value="all" type="radio" name="radioButton" id="radio1" checked/="">
                    <label class="radio-label seccolor" for="radio1">All Servers</label>
                  </li>
                  <li>
                    <input value=".linux" type="radio" name="radioButton" id="radio2">
                    <label class="radio-label seccolor" for="radio2">Linux</label>
                  </li>
                  <li>
                    <input value=".windows" type="radio" name="radioButton" id="radio3">
                    <label class="radio-label seccolor" for="radio3">Windows</label>
                  </li>
                  <li>
                    <input value=".managed" type="radio" name="radioButton" id="radio4">
                    <label class="radio-label seccolor" for="radio4">Managed</label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cd-filter-block">
                <h4 class="mergecolor">Location</h4>
                <div class="cd-filter-content cd-select">
                  <select class="select-filter">
                    <option value="all">Select Datacenter</option>
                    <option value=".data1">New York</option>
                    <option value=".data2">Montreal</option>
                    <option value=".data3">Portugal</option>
                    <option value=".data4">London</option>
                    <option value=".data5">Moscow</option>
                    <option value=".data6">Hong Kong</option>
                    <option value=".data7">Singapure</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cd-filter-block checkbox-group">
                <h4 class="mergecolor">CPU Cores</h4>
                <ul class="cd-filter-content cd-filters list">
                  <li>
                    <input class="filter" value=".cores2" type="checkbox" id="checkbox1">
                    <label class="checkbox-label seccolor" for="checkbox1">2</label>
                  </li>
                  <li>
                    <input class="filter" value=".cores4" type="checkbox" id="checkbox2">
                    <label class="checkbox-label seccolor" for="checkbox2">4</label>
                  </li>
                  <li>
                    <input class="filter" value=".cores6" type="checkbox" id="checkbox3">
                    <label class="checkbox-label seccolor" for="checkbox3">6</label>
                  </li>
                  <li>
                    <input class="filter" value=".cores8" type="checkbox" id="checkbox4">
                    <label class="checkbox-label seccolor" for="checkbox4">8</label>
                  </li>
                  <li>
                    <input class="filter" value=".cores12" type="checkbox" id="checkbox5">
                    <label class="checkbox-label seccolor" for="checkbox5">12</label>
                  </li>
                  <li>
                    <input class="filter" value=".cores16" type="checkbox" id="checkbox6">
                    <label class="checkbox-label seccolor" for="checkbox6">16</label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cd-filter-block">
                <h4 class="mergecolor">RAM</h4>
                <div class="cd-filter-content cd-filters list">
                  <datalist>
                    <option value="0"> 16</option>
                    <option value="1"> 32</option>
                    <option value="2"> 64</option>
                    <option value="3"> 96</option>
                    <option value="4"> 128</option>
                    <option value="5"> 256</option>
                  </datalist>
                  <div class="range-slider">
                    <input name="minSize" class="range-slider-input tooltip-parent" type="range" min="0" max="5" value="0" data-list="sizeLegend">
                  </div>
                  <div class="range-slider">
                    <input name="maxSize" class="range-slider-input tooltip-parent" type="range" min="0" max="5" value="5" data-list="sizeLegend">
                  </div>
                </div>
                <div class="search-disabled">
                  <input type="text" class="input" data-ref="input-search" placeholder="Enter a domain extension (.com)">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- ***** FILTER PLANS ***** -->
<div class="mixcontainer pb-5 pt-4 sec-bg2 motpath bg-seccolorstyle" data-ref="container">
  <div class="container ">
    <div class="pricing special">
      <div class="p-0 m-0">
        <div class="mix linux data1 cores2" data-size="0">
          <div class="wrapper text-start noshadow">
            <div class="plans badge feat bg-grey">linux</div>
            <div class="top-content bg-colorstyle topradius">
              <img class="svg mb-3" src="assets/fonts/svg/linuxserver.svg" alt="linux">
              <div class="title">Intel Xeon E3-1231 v5 / 4x 3.20Ghz</div>
              <div class="fromer seccolor">Excepteur sint occaecat cupidatat</div>
              <div class="price mergecolor"><sup>$</sup>82.00 <span class="period">/month</span></div>
              <a href="" class="btn btn-default-yellow-fill">Configure</a>
            </div>
            <ul class="list-info bg-pink">
              <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>4x 3.20Ghz 2 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>16GB (up to 32GB)</span></li>
              <li><i class="icon-drivessd"></i> <span class="c-purple">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span></li>
              <li><i class="icon-git"></i> <span class="c-purple">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
            </ul>
          </div>
        </div>
        <div class="mix windows data2 cores4" data-size="1">
          <div class="wrapper text-start noshadow">
            <div class="plans badge feat bg-grey">windows</div>
            <div class="top-content bg-colorstyle topradius">
              <img class="svg mb-3" src="assets/fonts/svg/windowserver.svg" alt="windows">
              <div class="title">Intel Xeon E3-1230 v6 / 6x 3.20Ghz</div>
              <div class="fromer seccolor">Excepteur sint occaecat cupidatat</div>
              <div class="price mergecolor"><sup>$</sup>133.00 <span class="period">/month</span></div>
              <a href="" class="btn btn-default-yellow-fill">Configure</a>
            </div>
            <ul class="list-info bg-purple">
              <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>6x 3.20Ghz 4 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>32GB (up to 64GB)</span></li>
              <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>2 x 1TB SATA 3.0</span></li>
              <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
            </ul>
          </div>
        </div>
        <div class="mix managed data3 cores6" data-size="2">
          <div class="wrapper text-start noshadow">
            <div class="plans badge feat bg-pink">special</div>
            <div class="top-content bg-colorstyle topradius">
              <img class="svg mb-3" src="assets/fonts/svg/managedserver.svg" alt="managed">
              <div class="title">Intel Xeon E3-1231 v6 / 8x 3.30Ghz</div>
              <div class="fromer seccolor">Excepteur sint occaecat cupidatat</div>
              <div class="price mergecolor"><sup>$</sup>184.00 <span class="period">/month</span></div>
              <a href="" class="btn btn-default-yellow-fill">Configure</a>
            </div>
            <ul class="list-info bg-pink">
              <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>8x 3.30Ghz 6 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>64GB (up to 96GB)</span></li>
              <li><i class="icon-drivessd"></i> <span class="c-purple">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span></li>
              <li><i class="icon-git"></i> <span class="c-purple">UPLINK</span><br> <span>1Gbps - 30TB</span></li>
            </ul>
          </div>
        </div>
        <div class="mix linux data4 cores8" data-size="3">
          <div class="wrapper text-start noshadow">
            <div class="plans badge feat bg-grey">linux</div>
            <div class="top-content bg-colorstyle topradius">
              <img class="svg mb-3" src="assets/fonts/svg/linuxserver.svg" alt="linux">
              <div class="title">Intel Xeon E3-1231 v5 / 8x 3.40Ghz</div>
              <div class="fromer seccolor">Excepteur sint occaecat cupidatat</div>
              <div class="price mergecolor"><sup>$</sup>159.00 <span class="period">/month</span></div>
              <a href="" class="btn btn-default-yellow-fill">Configure</a>
            </div>
            <ul class="list-info bg-purple">
              <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>8x 3.40Ghz 8 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>96GB (up to 128GB)</span></li>
              <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>4 x 1TB SATA 3.0</span></li>
              <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
            </ul>
          </div>
        </div>
        <div class="mix windows data5 cores12" data-size="4">
          <div class="wrapper text-start noshadow">
            <div class="plans badge feat bg-grey">windows</div>
            <div class="top-content bg-colorstyle topradius">
              <img class="svg mb-3" src="assets/fonts/svg/windowserver.svg" height="65" alt="windows">
              <div class="title">Intel Xeon E3-1230 v6 / 8x 3.20Ghz</div>
              <div class="fromer seccolor">Excepteur sint occaecat cupidatat</div>
              <div class="price mergecolor"><sup>$</sup>199.00 <span class="period">/month</span></div>
              <a href="" class="btn btn-default-yellow-fill">Configure</a>
            </div>
            <ul class="list-info bg-pink">
              <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>8x 3.20Ghz 12 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>128GB (up to 265GB)</span></li>
              <li><i class="icon-drivessd"></i> <span class="c-purple">DRIVES</span><br> <span>4 x 2TB SATA 3.0</span></li>
              <li><i class="icon-git"></i> <span class="c-purple">UPLINK</span><br> <span>1Gbps - 30TB</span></li>
            </ul>
          </div>
        </div>
        <div class="mix managed data6 cores16" data-size="5">
          <div class="wrapper text-start noshadow">
            <div class="plans badge feat bg-grey">managed</div>
            <div class="top-content bg-colorstyle topradius">
              <img class="svg mb-3" src="assets/fonts/svg/managedserver.svg" alt="managed">
              <div class="title">Intel Xeon E3-1231 v6 / 8x 3.30Ghz</div>
              <div class="fromer seccolor">Excepteur sint occaecat cupidatat</div>
              <div class="price mergecolor"><sup>$</sup>184.00 <span class="period">/month</span></div>
              <a href="" class="btn btn-default-yellow-fill">Configure</a>
            </div>
            <ul class="list-info bg-purple">
              <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>8x 3.30Ghz 16 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>256GB (up to 512GB)</span></li>
              <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span></li>
              <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 30TB</span></li>
            </ul>
          </div>
        </div>
        <div class="gap"></div>
        <div class="gap"></div>
        <div class="gap"></div>
      </div>
    </div>
    <div class="cd-fail-message text-muted bg-colorstyle noshadow">" No items could be found matching the criteria "</div>
  </div>
</div>

<?php
$extraJs = [];
include_once('inc/_footer.php');
?>