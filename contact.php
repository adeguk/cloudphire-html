<?php
$extraCss = [
  '<link href="https://cdn.rankon.co.uk/css/magnific-popup.css" rel="stylesheet">',
  '<link href="https://cdn.rankon.co.uk/css/filter.css" rel="stylesheet">'
];
include_once('inc/_header.php');
?>
<!-- ***** BANNER ***** -->
<div class="top-header motpath">
  <div class="total-grad-inverse"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="wrapper">
          <div class="heading">Getting in touch is easy!</div>
          <div class="subheading">Don't worry! We have support premium 24/7/365. We are looking forward waiting for your contact.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** HELP ***** -->
<section class="services help sec-normal sec-grad-grey-to-grey bottompadding">
  <div class="container">
    <div class="service-wrap">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-colorstyle">
            <a href="javascript:void(Tawk_API.toggle())" class="help-item">
              <div class="img">
                <img class="svg ico" src="https://cdn.rankon.co.uk/fonts/svg/emailopen.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Sales</div>
                <div class="description seccolor">T: +(44) 2077327411 <br>E: sales@cloudphire.com</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-colorstyle">
            <a href="#ticket" class="help-item gocheck">
              <div class="img">
                <img class="svg ico" src="https://cdn.rankon.co.uk/fonts/svg/emailopen.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Billing</div>
                <div class="description seccolor">T: +(44) 2077327411 <br>E: admin@cloudphire.com</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="help-container bg-colorstyle">
            <a href="" class="help-item">
              <div class="img">
                <img class="svg ico" src="https://cdn.rankon.co.uk/fonts/svg/emailopen.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Technical</div>
                <div class="description seccolor">T: +(44) 2077327411 <br>E: support@cloudphire.com</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="help-container bg-colorstyle">
            <a href="knowledgebase-list.php" class="help-item">
              <div class="img">
                <img class="svg ico" src="https://cdn.rankon.co.uk/fonts/svg/book.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Knowledgebase</div>
                <div class="description seccolor">Find answers to your questions, how-to tutorials, API documentation and much more...</div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="help-container bg-colorstyle">
            <a href="login.php" class="help-item">
              <div class="img">
                <img class="svg ico" src="https://cdn.rankon.co.uk/fonts/svg/lock.svg" height="65" alt="">
              </div>
              <div class="inform">
                <div class="title mergecolor">Client Area</div>
                <div class="description seccolor">Get access to your account and manage your domain, hosting and billing.</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** CONTACT FORM ***** -->
<section id="ticket" class="exapath pb-80 noimage bg-seccolorstyle toppadding bottomhalfpadding">
  <div class="container">
    <div class="sec-main sec-up mb-0 sec-bg1 bg-seccolorstyle nomargin nopadding noshadow">
      <div class="randomline hideelement">
        <div class="bigline"></div>
        <div class="smallline"></div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 cd-filter-block mb-0">
          <div class="form-contact cd-filter-content p-0 sec-bx">
            <div class="text-center">
              <h2 class="section-heading mergecolor">Leave us a message</h2>
              <p class="mergecolor">We are here when you need us. Just Send us an email and we will get back to you.</p>
            </div>
            <form id="contactForm" method="POST">
              <div class="row">
                <div class="col-md-6 position-relative">
                  <label><i class="fas fa-user-tie"></i></label>
                  <input id="name" type="text" name="name" placeholder="Full Name" required="">
                </div>
                <div class="col-md-6 position-relative">
                  <label><i class="fas fa-envelope"></i></label>
                  <input id="email" type="email" name="email" placeholder="Email Address" required="">
                </div>
                <div class="col-md-6 position-relative">
                  <label><i class="fas fa-file-alt"></i></label>
                  <input id="contact_number" type="text" name="contact_number" placeholder="Contact Number" required="">
                </div>
                <div class="col-md-6 position-relative">
                  <div class="cd-select mt-4">
                    <label class="db"></label>
                    <select id="department" name="department" class="select-filter">
                      <option value="">Choose Department</option>
                      <option value="Sales">Sales</option>
                      <option value="Billing">Billing</option>
                      <option value="Technical">Technical</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 position-relative">
                  <div class="form-group mt-4">
                    <textarea id="message" name="message" class="form-control" rows="6" placeholder="Your Message..."></textarea>
                  </div>
                </div>
                <div class="col-md-6 position-relative mt-4">
                  <input name="newsletter" type="checkbox" id="checkbox" class="filter">

                  <label for="checkbox" class="checkbox-label c-grey mb-3 seccolor">
                    <span style="font-size:13px">I acknowledge that my IP address, email address are being logged for monitoring my support conversation.</span>
                  </label>
                  <label for="checkbox" class="checkbox-label c-grey mb-3 seccolor">
                    <span style="font-size:13px">I agree to the <a href="legal.php">Terms of Service</a> and the <a href="legal.php">Privacy Policy</a>.</span>
                  </label>

                  <button type="submit" value="reset" class="btn btn-default float-start me-3">Robot</button>
                  <button type="submit" value="Submit" class="btn btn-default-yellow-fill float-start me-3">Send us a Mail</button>
                </div>
                <div id="msgSubmit" class="col-md-12 mt-4">
                  <h3 class="c-pink">Message Submitted!</h3>
                </div>
              </div>
            </form>
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
<script src="https://cdn.rankon.co.uk/js/jquery.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/popper.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/bootstrap.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/jquery.countdown.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/jquery.magnific-popup.min.js"></script>

<script defer="" src="https://cdn.rankon.co.uk/js/slick.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/flickity.pkgd.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/flickity-fade.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/aos.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/isotope.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/jquery.scrollme.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/swiper.min.js"></script>
<script async="" src="https://cdn.rankon.co.uk/js/lazysizes.min.js"></script>

<script defer="" src="https://cdn.rankon.co.uk/js/scripts.min.js"></script>
<script defer="" src="https://cdn.rankon.co.uk/js/settings-init.js"></script>
</body>

</html>