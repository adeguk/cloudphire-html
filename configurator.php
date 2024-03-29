﻿<?php
$extraCss = [
  '<link href="https://cdn.rankon.co.uk/css/filter.css" rel="stylesheet">'
];
include_once('inc/_header.php');
?>
<!-- ***** BANNER ***** -->
<div class="top-header item7 overlay scrollme">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="wrapper animateme" data-when="span" data-from="0" data-to="0.75" data-opacity="1" data-translatey="-50">
          <h1 class="heading">Set up your plans</h1>
          <h3 class="subheading mb-0">Configure your desired options and continue to checkout.</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** KNOWLEDGEBASE ***** -->
<section class="config cd-main-content pb-80 blog sec-bg2 motpath notoppadding bg-colorstyle">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8 mt-80">
        <div id="sidebar_content" class="wrap-blog">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <div class="wrapper targetDiv bg-seccolorstyle noshadow">
                <h1 class="mergecolor">Dedicated Server Linux</h1>
                <p class="mergecolor">Configure your desired options and continue to checkout</p>
                <div class="row">
                  <div class="col-md-12 pt-4">
                    <div class="cd-filter-block">
                      <h4 class="seccolor">RAM Memory</h4>
                      <ul class="radio-group radios-filter cd-filter-content list">
                        <li>
                          <input value=".16gb" type="radio" name="radioB" id="radio6" checked/="">
                          <label class="radio-label seccolor" for="radio6">Default</label>
                        </li>
                        <li>
                          <input value=".16gb" type="radio" name="radioB" id="radio7">
                          <label class="radio-label seccolor" for="radio7">16GB</label>
                        </li>
                        <li>
                          <input value=".32gb" type="radio" name="radioB" id="radio8">
                          <label class="radio-label seccolor" for="radio8">32GB</label>
                        </li>
                        <li>
                          <input value=".64gb" type="radio" name="radioB" id="radio9">
                          <label class="radio-label seccolor" for="radio9">64GB</label>
                        </li>
                        <li>
                          <input value=".128gb" type="radio" name="radioB" id="radio10">
                          <label class="radio-label seccolor" for="radio10">128GB</label>
                        </li>
                        <li>
                          <input value=".256gb" type="radio" name="radioB" id="radio11">
                          <label class="radio-label seccolor" for="radio11">256GB</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <hr class="fullline">
                  <div class="col-md-12 pt-4">
                    <div class="cd-filter-block">
                      <h4 class="seccolor">Storage SSD</h4>
                      <div class="radio-group radios-filter cd-filter-content list">
                        <div class="blog-info">
                          <p class="seccolor"><b>NOTE!</b> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                        </div>
                        <ul>
                          <li>
                            <input value=".32gb" type="radio" name="radioA" id="radio1" checked/="">
                            <label class="radio-label seccolor" for="radio1">2x 32GB</label>
                          </li>
                          <li>
                            <input value=".64gb" type="radio" name="radioA" id="radio2">
                            <label class="radio-label seccolor" for="radio2">2x 64GB</label>
                          </li>
                          <li>
                            <input value=".128gb" type="radio" name="radioA" id="radio3">
                            <label class="radio-label seccolor" for="radio3">2x 128GB</label>
                          </li>
                          <li>
                            <input value=".256gb" type="radio" name="radioA" id="radio4">
                            <label class="radio-label seccolor" for="radio4">2x 256GB</label>
                          </li>
                          <li>
                            <input value=".512gb" type="radio" name="radioA" id="radio5">
                            <label class="radio-label seccolor" for="radio5">2x 512GB</label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <hr class="fullline">
                  <div class="col-md-12 pt-4">
                    <div class="cd-filter-block mb-5">
                      <h4 class="seccolor">Software</h4>
                      <div class="cd-filter-content">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="cd-select mb-2">
                              <select class="select-filter">
                                <option value="all">Select Control Panel</option>
                                <option value=".data1">cPanel</option>
                                <option value=".data2">ISP Manager</option>
                                <option value=".data3">Plesk 10 Domains</option>
                                <option value=".data4">Plesk 100 Domains</option>
                                <option value=".data5">Plesk Unlimited Domains</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="cd-select">
                              <select class="select-filter ">
                                <option value="all">Select Orerating System</option>
                                <option value=".data1">CentosOS 6</option>
                                <option value=".data2">CentosOS 7</option>
                                <option value=".data3">Debian 7</option>
                                <option value=".data4">Ubuntu 16.04 LTS</option>
                                <option value=".data5">Fedora 23</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="fullline">
                  <div class="col-md-12 pt-4">
                    <div class="cd-filter-block checkbox-group">
                      <h4 class="seccolor">Add-ons</h4>
                      <ul class="cd-filter-content cd-filters list">
                        <li>
                          <input class="filter" value=".default" type="checkbox" id="checkbox0" checked="" disabled="">
                          <label class="checkbox-label seccolor" for="checkbox0">Default</label>
                        </li>
                        <li>
                          <input class="filter" value=".whmcs" type="checkbox" id="checkbox1">
                          <label class="checkbox-label seccolor" for="checkbox1">WHMCS</label>
                        </li>
                        <li>
                          <input class="filter" value=".joomla" type="checkbox" id="checkbox2">
                          <label class="checkbox-label seccolor" for="checkbox2">Joomla</label>
                        </li>
                        <li>
                          <input class="filter" value=".magento" type="checkbox" id="checkbox3">
                          <label class="checkbox-label seccolor" for="checkbox3">Magento</label>
                        </li>
                        <li>
                          <input class="filter" value=".prestashop" type="checkbox" id="checkbox4">
                          <label class="checkbox-label seccolor" for="checkbox4">Prestashop</label>
                        </li>
                        <li>
                          <input class="filter" value=".wordpress" type="checkbox" id="checkbox5">
                          <label class="checkbox-label seccolor" for="checkbox5">WordPress</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <hr class="fullline">
                  <div class="col-md-12 pt-4">
                    <div class="cd-filter-block">
                      <h4 class="seccolor">IP Address</h4>
                      <div class="radio-group radios-filter cd-filter-content list">
                        <div class="blog-info">
                          <p class="seccolor">NOTE! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                        </div>
                        <ul>
                          <li>
                            <input value=".1ip" type="radio" name="radioC" id="radio12" checked/="">
                            <label class="radio-label seccolor" for="radio12">1 IP</label>
                          </li>
                          <li>
                            <input value=".2ip" type="radio" name="radioC" id="radio13">
                            <label class="radio-label seccolor" for="radio13">2 IPs</label>
                          </li>
                          <li>
                            <input value=".3ip" type="radio" name="radioC" id="radio14">
                            <label class="radio-label seccolor" for="radio14">3 IPs</label>
                          </li>
                          <li>
                            <input value=".4ip" type="radio" name="radioC" id="radio15">
                            <label class="radio-label seccolor" for="radio15">4 IP</label>
                          </li>
                          <li>
                            <input value=".5ip" type="radio" name="radioC" id="radio16">
                            <label class="radio-label seccolor" for="radio16">5 IPs</label>
                          </li>
                          <li>
                            <input value=".6ip" type="radio" name="radioC" id="radio17">
                            <label class="radio-label seccolor" for="radio17">6 IPs</label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <hr class="fullline">
                  <div class="col-md-12 pt-4">
                    <div class="cd-filter-block mb-5">
                      <h4 class="seccolor">Biling Cycle</h4>
                      <div class="cd-filter-content">
                        <div class="cd-select">
                          <select class="select-filter">
                            <option value="all">Choose Biling Cycle</option>
                            <option value=".biling1">Monthly</option>
                            <option value=".biling2">Quarterly</option>
                            <option value=".biling3">Semi-Annually</option>
                            <option value=".biling4">Annually</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="fullline">
                  <div class="col-md-12 pt-4">
                    <div class="cd-filter-block">
                      <h4 class="mb-0 pb-0 mergecolor">Hostname</h4>
                      <div class="cd-filter-content cd-filter-block">
                        <label><i class="fas fa-globe"></i></label>
                        <input type="text" name="hostname" value="" placeholder="servername.yourdomain.com">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar -->
      <div class="col-md-12 col-lg-4">
        <aside id="sidebar" class="sidebar mt-80 sec-bg1 bg-seccolorstyle noshadow">
          <div class="included c-grey mt-0">
            <h4 class="mergecolor">Selected Plan</h4>
            <ul>
              <li class="seccolor"><i class="fas fa-check-circle"></i> 4x 3.2Ghz 2 Cores</li>
            </ul>
            <ul>
              <li class="seccolor"><i class="fas fa-check-circle"></i> 16GB (up to 32GB)</li>
            </ul>
            <ul>
              <li class="seccolor"><i class="fas fa-check-circle"></i> 2 x 1TB SATA 3.5</li>
            </ul>
            <ul>
              <li class="seccolor"><i class="fas fa-check-circle"></i> 1TB Bandwidth</li>
            </ul>
          </div>
          <div class="ordersummary mb-5">
            <h4 class="mergecolor">Order Summary</h4>
            <div class="table-responsive-lg">
              <table class="table">
                <tbody>
                  <tr class="seccolor">
                    <td>
                      <div class="title-table">Setup Fees</div>
                    </td>
                    <td>$0.00 USD</td>
                  </tr>
                  <tr class="seccolor">
                    <td>
                      <div class="title-table">Monthly</div>
                    </td>
                    <td>$82.00 USD</td>
                  </tr>
                  <tr class="seccolor">
                    <td>
                      <div class="title-table">Total Amount</div>
                    </td>
                    <td>
                      <h6><b>$100.82 USD</b></h6>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <a href="cart.php" class="btn btn-default-yellow-fill">Continue <i class="fas fa-arrow-alt-circle-right"></i></a>
        </aside>
      </div>
    </div>
  </div>
</section>
<!-- ***** HELP ***** -->
<section class="services help pt-4 pb-80 bg-colorstyle bottomhalfpadding">
  <div class="container">
    <div class="service-wrap">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-seccolorstyle noshadow">
            <a href="javascript:void(Tawk_API.toggle())" class="help-item">
              <div class="img">
                <img class="svg ico" src="assets/fonts/svg/livechat.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Live Chat</div>
                <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-seccolorstyle noshadow">
            <a href="contact.php" class="help-item">
              <div class="img">
                <img class="svg ico" src="assets/fonts/svg/emailopen.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Send Ticket</div>
                <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-seccolorstyle noshadow">
            <a href="knowledgebase-list.php" class="help-item">
              <div class="img">
                <img class="svg ico" src="assets/fonts/svg/book.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Knowledge base</div>
                <div class="description seccolor">Lorem Ipsum is simply dummy text printing.</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** UPLOADED FOOTER FROM FOOTER.php ***** -->
<footer id="footer"> </footer>
</div>
<!-- ***** BUTTON GO TOP ***** -->
<a href="#0" class="cd-top"> <i class="fas fa-angle-up"></i> </a>
<!-- Javascript -->
<script src="assets/js/jquery.min.js"></script>
<script defer="" src="assets/js/popper.min.js"></script>
<script defer="" src="assets/js/bootstrap.min.js"></script>
<script defer="" src="assets/js/jquery.countdown.js"></script>
<script defer="" src="assets/js/jquery.magnific-popup.min.js"></script>

<script defer="" src="assets/js/slick.min.js"></script>
<script defer="" src="assets/js/flickity.pkgd.min.js"></script>
<script defer="" src="assets/js/flickity-fade.min.js"></script>
<script defer="" src="assets/js/aos.min.js"></script>
<script defer="" src="assets/js/isotope.min.js"></script>
<script defer="" src="assets/js/jquery.scrollme.min.js"></script>
<script defer="" src="assets/js/filter.js"></script>
<script defer="" src="assets/js/swiper.min.js"></script>

<script defer="" src="assets/js/scripts.min.js"></script>
<script defer="" src="assets/js/settings-init.js"></script>
</body>

</html>