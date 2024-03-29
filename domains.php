﻿<?php
$extraCss = [
  '<link href="https://cdn.rankon.co.uk/css/animate.min.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/filter.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/mixitup.css" rel="stylesheet">'
];
include_once('inc/_header.php');
?>
<!-- ***** SLIDER ***** -->
<div class="top-header item6 overlay">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="wrapper">
          <h1 class="heading">Filter Perfect Domain Name</h1>
          <h3 class="subheading mb-4">Choose from hundreds of extensions and put your website in the world.</h3>
          <form class="mb-5 nomargin" action="http://inebur.com/whmcs/domainchecker.php?carttpl=antler&systpl=antler" method="post">
            <div class="general-input w-50">
              <input type="text" name="domain" placeholder="Get your next domain name here" class="fill-input">
              <input type="submit" value="Search" class="btn btn-default-yellow-fill initial-transform">
            </div>
          </form>
          <a class="btn btn-default-pink-fill cd-filter-trigger wow animated shake delay-2s"><i class="fa fa-filter"></i> Show Filter</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** CONTROLS ***** -->
<section class="cd-main-content mb-80 sec-up bg-seccolorstyle">
  <div class="cd-filter bg-seccolorstyle">
    <form>
      <div class="container">
        <div class="sec-main pb-5 sec-bg1 p-5 bg-seccolorstyle noshadow nopadding">
          <div class="plans badge feat bg-pink">filter</div>
          <div class="row">
            <a href="#0" class="cd-close"><i class="fas fa-long-arrow-alt-left"></i></a>
            <div class="col-md-6">
              <div class="cd-filter-block" data-filter-group="">
                <h4 class="mergecolor">Highlight</h4>
                <ul class="radio-group radios-filter cd-filter-content list">
                  <li>
                    <input value="all" type="radio" name="radioButton" id="radio1" checked/="">
                    <label class="radio-label seccolor" for="radio1">All Domains</label>
                  </li>
                  <li>
                    <input value=".sale" type="radio" name="radioButton" id="radio2">
                    <label class="radio-label seccolor" for="radio2">Sales</label>
                  </li>
                  <li>
                    <input value=".newest" type="radio" name="radioButton" id="radio3">
                    <label class="radio-label seccolor" for="radio3">Newest</label>
                  </li>
                  <li>
                    <input value=".popular" type="radio" name="radioButton" id="radio4">
                    <label class="radio-label seccolor" for="radio4">Popular</label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cd-filter-block checkbox-group" data-filter-group="">
                <h4 class="mergecolor">Types</h4>
                <ul class="cd-filter-content cd-filters list">
                  <li>
                    <input class="filter" value=".gtld" type="checkbox" id="checkbox1">
                    <label class="checkbox-label seccolor" for="checkbox1">gtld (Generic)</label>
                  </li>
                  <li>
                    <input class="filter" value=".cctld" type="checkbox" id="checkbox2">
                    <label class="checkbox-label seccolor" for="checkbox2">cctld (Country)</label>
                  </li>
                  <li>
                    <input class="filter" value=".ngtld" type="checkbox" id="checkbox3">
                    <label class="checkbox-label seccolor" for="checkbox3">ngtld (News)</label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cd-filter-block" data-filter-group="">
                <div class="cd-filter-content cd-select">
                  <select class="select-filter">
                    <option value="all">Select Category</option>
                    <option value=".business">Business</option>
                    <option value=".commerce">Commerce</option>
                    <option value=".social">Social</option>
                    <option value=".health">Health</option>
                    <option value=".educations">Education</option>
                    <option value=".technology">Technology</option>
                    <option value=".others">Others</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cd-filter-block checkbox-group" data-filter-group="">
                <input type="text" class="input" data-ref="input-search" placeholder="Enter a domain extension (.com)">
              </div>
            </div>
            <div class="range-disabled">
              <input name="minSize" class="range-slider-input tooltip-parent" type="range" min="0" max="5" value="0">
              <input name="maxSize" class="range-slider-input tooltip-parent" type="range" min="0" max="5" value="5">
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- ***** FILTER PLANS ***** -->
<div class="mixcontainer sec-normal sec-bg2 motpath bg-noimage nobottompadding bg-colorstyle tophalfpadding" data-ref="container">
  <div class="container ">
    <div class="pricing special">
      <div class="p-0 m-0">
        <div class="best-plans pricing">
          <div class="sec-main sec-bg1">
            <div class="row">
              <div class="col-sm-12">
                <div class="table-responsive-lg">
                  <table class="table compare">
                    <thead>
                      <tr>
                        <td class="bb-pink pt-0 title ">Extensions (TLD)</td>
                        <td class="bb-pink pt-0 title">Register</td>
                        <td class="bb-pink pt-0 title">Renew</td>
                        <td class="bb-pink pt-0 title">Transfer</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="mix ext gtld  popular others .com">
                        <td>
                          <div class="badge bg-grey me-1">popular</div> <span class="c-black mergecolor">.com</span>
                        </td>
                        <td>$16.00</td>
                        <td>$19.90</td>
                        <td>$19.90</td>
                      </tr>
                      <tr class="mix ext gtld sale others  .info">
                        <td>
                          <div class="badge bg-pink me-1">sale</div> <span class="c-black mergecolor">.info</span>
                        </td>
                        <td><span class="ltgh">$11.90</span> <b class="c-pink">$7.99</b></td>
                        <td>$11.90</td>
                        <td>$14.00</td>
                      </tr>
                      <tr class="mix ext ngtld newest health .hospital">
                        <td>
                          <div class="badge bg-purple me-1">newest</div> <span class="c-black mergecolor">.hospital</span>
                        </td>
                        <td>$52.24</td>
                        <td>$52.24</td>
                        <td>$59.00</td>
                      </tr>
                      <tr class="mix ext gtld popular others .org">
                        <td>
                          <div class="badge bg-grey me-1">popular</div> <span class="c-black mergecolor">.org</span>
                        </td>
                        <td>$9.00</td>
                        <td>$12.90</td>
                        <td>$12.90</td>
                      </tr>
                      <tr class="mix ext gtld others .co.uk">
                        <td> <span class="c-black mergecolor">.co.uk</span></td>
                        <td>$32.00</td>
                        <td>$36.90</td>
                        <td>$36.90</td>
                      </tr>
                      <tr class="mix ext ngtld newest health .healthcare">
                        <td>
                          <div class="badge bg-purple me-1">newest</div> <span class="c-black mergecolor">.healthcare</span>
                        </td>
                        <td>$32.00</td>
                        <td>$36.90</td>
                        <td>$36.90</td>
                      </tr>
                      <tr class="mix ext ngtld sale technology .blog">
                        <td>
                          <div class="badge bg-pink me-1">sale</div> <span class="c-black mergecolor">.blog</span>
                        </td>
                        <td><span class="ltgh">$45.10</span> <b class="c-pink">$26.00</b></td>
                        <td>$45.10</td>
                        <td>$45.10</td>
                      </tr>
                      <tr class="mix ext ngtld newest commerce .banque">
                        <td>
                          <div class="badge bg-purple me-1">newest</div> <span class="c-black mergecolor">.banque</span>
                        </td>
                        <td>$32.00</td>
                        <td>$36.90</td>
                        <td>$36.90</td>
                      </tr>
                      <tr class="mix ext cctld popular .eu">
                        <td>
                          <div class="badge bg-grey me-1">popular</div> <span class="c-black mergecolor">.eu</span>
                        </td>
                        <td>$5.80</td>
                        <td>$5.80</td>
                        <td>$7.00</td>
                      </tr>
                      <tr class="mix ext cctld popular .pt">
                        <td>
                          <div class="badge bg-grey me-1">popular</div> <span class="c-black mergecolor">.pt</span>
                        </td>
                        <td>$13.00</td>
                        <td>$13.00</td>
                        <td>$19.90</td>
                      </tr>
                      <tr class="mix ext ngtld newest business .company">
                        <td> <span class="c-black mergecolor">.company</span></td>
                        <td>$13.00</td>
                        <td>$13.00</td>
                        <td>$19.90</td>
                      </tr>
                      <tr class="mix ext ngtld newest social .church">
                        <td> <span class="c-black mergecolor">.church</span></td>
                        <td>$42.00</td>
                        <td>$42.00</td>
                        <td>$42.00</td>
                      </tr>
                      <tr class="mix ext ngtld sale social .democrat">
                        <td>
                          <div class="badge bg-pink me-1">sale</div><span class="c-black mergecolor">.democrat</span>
                        </td>
                        <td><span class="ltgh">$35.10</span> <b class="c-pink">$19.00</b></td>
                        <td>$35.10</td>
                        <td>$42.90</td>
                      </tr>
                      <tr class="mix ext ngtld popular educations .academy">
                        <td> <span class="c-black mergecolor">.academy</span></td>
                        <td>$112.10</td>
                        <td>$112.10</td>
                        <td>$112.10</td>
                      </tr>
                      <tr class="mix ext ngtld sale health .dentist">
                        <td>
                          <div class="badge bg-pink me-1">sale</div><span class="c-black mergecolor">.dentist</span>
                        </td>
                        <td><span class="ltgh">$50.10</span> <b class="c-pink">$25.05</b></td>
                        <td>$50.10</td>
                        <td>$72.90</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="cd-fail-message">" No items could be found matching the criteria "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<img class="blobleft svg d-none" src="https://cdn.rankon.co.uk/img/background/blob.svg" alt="Blob Background">
<!-- ***** FEATURES ***** -->
<section id="scroll" class="history-section feat01 sec-normal bg-colorstyle">
  <div class="container">
    <div class="randomline">
      <div class="bigline"></div>
      <div class="smallline"></div>
    </div>
    <div class="sec-main sec-bg1 bg-colorstyle noshadow nopadding">
      <div class="row">
        <div class="col-md-12 col-lg-5 wow animated fadeInUp fast first">
          <img class="svg" src="https://cdn.rankon.co.uk/patterns/domainmanage.svg" alt="domain management">
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1">
          <div class="info-content">
            <h1 class="fw-bold mb-3 mergecolor">Simple Domain Management</h1>
            <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
          </div>
          <a href="" class="btn btn-default-yellow-fill mt-3">Learn more</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <div class="info-content">
            <h1 class="fw-bold mb-3 mergecolor">Automatic Domain Renewal</h1>
            <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
          </div>
          <a href="" class="btn btn-default-yellow-fill mt-3">Auto-Renewal</a>
        </div>
        <div class="col-md-12 col-lg-5 offset-lg-1 backups anima wow animated fadeInUp fast second">
          <img class="svg" src="https://cdn.rankon.co.uk/patterns/domainrenewal.svg" alt="domain renewal">
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12 col-lg-5 wow animated fadeInUp fast third">
          <img class="svg" src="https://cdn.rankon.co.uk/patterns/support.svg" alt="support 24/7/365">
        </div>
        <div class="col-md-12 col-lg-6 offset-lg-1">
          <div class="info-content">
            <h1 class="fw-bold mb-3 mergecolor">Don't worry! We have support premium 24/7/365</h1>
            <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
          </div>
          <a href="" class="btn btn-default-yellow-fill mt-3">Get support</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** CUSTOMIZE ***** -->
<section class="sec-normal history-section custom sec-bg3 bg-seccolorstyle">
  <div class="faq">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <h2 class="section-heading text-white mergecolor">Advanced domain control made easy</h2>
          <p class="section-subheading text-white mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="section-offer services w-100">
            <div class="tabs offers-tabs">
              <div class="tabs-header mb-5">
                <ul>
                  <li class="col-sm-12 col-md-3 col-lg-3 text-white active">
                    <i class="icon-features"></i>
                    <div class="seccolor">Easy Management</div>
                  </li>
                  <li class="col-sm-12 col-md-3 col-lg-3 text-white">
                    <i class="icon-domainserver"></i>
                    <div class="seccolor">Domain API</div>
                  </li>
                  <li class="col-sm-12 col-md-3 col-lg-3 text-white">
                    <i class="icon-lock"></i>
                    <div class="seccolor">Domain Lock</div>
                  </li>
                  <li class="col-sm-12 col-md-3 col-lg-2 text-white">
                    <i class="icon-helpdesk"></i>
                    <div class="seccolor">Support Premium</div>
                  </li>
                </ul>
              </div>
              <div class="tabs-content text-start scrollme">
                <div class="tabs-item active">
                  <div class="row">
                    <div class="col-md-12 col-lg-5">
                      <img class="svg" src="https://cdn.rankon.co.uk/patterns/controlpanel.svg" alt="monitoring 24/7/365">
                    </div>
                    <div class="col-md-12 col-lg-6 offset-lg-1">
                      <div class="info-content text-white">
                        <h4 class="mergecolor">Change DNS records through an easy-to-use Control Panel</h4>
                        <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will. </p>
                        <p class="seccolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tabs-item">
                  <div class="row">
                    <div class="col-md-12 col-lg-5">
                      <img class="svg" src="https://cdn.rankon.co.uk/patterns/performance.svg" alt="monitoring 24/7/365">
                    </div>
                    <div class="col-md-12 col-lg-6 offset-lg-1">
                      <div class="info-content text-white">
                        <h4 class="mergecolor">Register multiple domains can be done in a matter of seconds</h4>
                        <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will. </p>
                        <p class="seccolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tabs-item">
                  <div class="row">
                    <div class="col-md-12 col-lg-5">
                      <img class="svg" src="https://cdn.rankon.co.uk/patterns/ssl.svg" alt="monitoring 24/7/365">
                    </div>
                    <div class="col-md-12 col-lg-6 offset-lg-1">
                      <div class="info-content text-white">
                        <h4 class="mergecolor">Lock and Unlock it down to prevent unauthorized transfers</h4>
                        <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will. </p>
                        <p class="seccolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tabs-item">
                  <div class="row">
                    <div class="col-md-12 col-lg-5">
                      <img class="svg" src="https://cdn.rankon.co.uk/patterns/support.svg" alt="monitoring 24/7/365">
                    </div>
                    <div class="col-md-12 col-lg-6 offset-lg-1">
                      <div class="info-content text-white">
                        <h4 class="mergecolor">Don't worry! We have support premium 24/7/365</h4>
                        <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will. </p>
                        <p class="seccolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      </div>
                    </div>
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
<hr class="fullline d-none">
<!-- ***** FAQ. ***** -->
<section class="sec-normal sec-bg2 bg-seccolorstyle bottomhalfpadding">
  <div class="faq">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <h2 class="section-heading mergecolor">Frequently Asked Questions Hosting</h2>
          <p class="section-subheading mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
        <div class="col-sm-12">
          <div class="accordion faq pt-5">
            <div class="panel-wrap">
              <div class="panel-title seccolor active">
                <span>What is a domain name?</span>
                <div class="float-end">
                  <i class="fa fa-plus"></i>
                  <i class="fa fa-minus c-pink"></i>
                </div>
              </div>
              <div class="panel-collapse" style="display: block">
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
                <span>What can I do with a domain name?</span>
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
                <span>How many domains can I host at Antler?</span>
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
                <span>What domain should I buy? </span>
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
<img class="blobright svg d-none" src="https://cdn.rankon.co.uk/img/background/blob.svg" alt="Blob Background">
<!-- ***** HELP ***** -->
<section class="help pt-4 pb-80 bg-seccolorstyle notoppadding">
  <div class="container">
    <div class="service-wrap">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="help-container bg-colorstyle noshadow">
            <div class="plans badge feat left bg-grey"><i class="fas fa-long-arrow-alt-left"></i></div>
            <a href="hosting" class="help-item">
              <div class="img">
                <img class="svg ico" src="https://cdn.rankon.co.uk/fonts/svg/cloudfiber.svg" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Go to Cloud Reseller</div>
                <div class="description seccolor">Do you need to host multiple Websites?</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="help-container bg-colorstyle noshadow">
            <div class="plans badge feat bg-grey"><i class="fas fa-long-arrow-alt-right"></i></div>
            <a href="vps" class="help-item">
              <div class="img">
                <img class="svg ico" src="https://cdn.rankon.co.uk/fonts/svg/vps.svg" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Go to VPS Server</div>
                <div class="description seccolor">Needs scalable resources in Hosting Environment?</div>
              </div>
            </a>
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