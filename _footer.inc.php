﻿<!-- ***** FOOTER ****** -->
<footer class="footer">
    <img class="logo-bg logo-footer" src="assets/img/symbol.svg" alt="logo">
    <div class="container">
      <div class="footer-top">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="heading">Hosting</div>
            <ul class="footer-menu">
              <li class="menu-item"><a href="hosting.php">Shared Hosting</a></li>
              <li class="menu-item"><a href="dedicated.php">Dedicated Server</a></li>
              <li class="menu-item"><a href="vps.php">Cloud Virtual (VPS)</a></li>
              <li class="menu-item"><a href="domains.php">Domain Names</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="heading">Support</div>
            <ul class="footer-menu">
              <li class="menu-item"><a href="login.php">myAntler</a></li>
              <li class="menu-item"><a href="knowledgebase-list.php">Knowledge Base</a></li>
              <li class="menu-item"><a href="contact.php">Contact Us</a></li>
              <li class="menu-item"><a href="faq.php">FAQ</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="heading">Company</div>
            <ul class="footer-menu">
              <li class="menu-item"><a href="about.php">About Us</a> </li>
              <li class="menu-item"><a href="elements.php">Features</a></li>
              <li class="menu-item"><a href="blog-details.php">Blog</a></li>
              <li class="menu-item"><a href="legal.php">Legal</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3">
            <!--a><img class="svg logo-footer dark" src="assets/img/cloudphire.svg" alt="logo"></!--a>
            <a><img class="svg logo-footer light" src="assets/img/cloudphire-light.svg" alt="logo"></a>
            <div class="copyright">©2022 CloudPhire - All rights reserved</div>
            <div-- class="soc-icons">
              <a href=""><i class="fab fa-facebook-f withborder noshadow"></i></a>
              <a href=""><i class="fab fa-youtube withborder noshadow"></i></a>
              <a href=""><i class="fab fa-twitter withborder noshadow"></i></a>
              <a href=""><i class="fab fa-instagram withborder noshadow"></i></a>
            </div-->
          </div>
        </div>
      </div>
    </div>
    <!--div-- class="subcribe news">
      <div class="container">
        <div class="row">
          <form action="#" class="w-100">
            <div class="col-md-6 offset-md-3">
              <div class="general-input">
                <input class="fill-input" type="email" name="email" data-i18n="[placeholder]header.login">
                <input type="submit" value="SUBSCRIBE" class="btn btn-default-yellow-fill initial-transform">
              </div>
            </div>
            <div class="col-md-6 offset-md-3 text-center pt-4">
              <p>Subscribe to our newsletter to receive news and updates</p>
            </div>
          </form>
        </div>
      </div>
    </!--div-->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <ul class="footer-menu">
              <!--li-- id="drop-lng" class="btn-lang-footer btn-group btn-group-toggle">
                <label data-lng="en-US" for="option1" class="btn btn-secondary me-1 styletextDirection" data-value="ltr">
                  <input type="radio" name="options" id="option1" checked=""> EN
                </label>
                <label data-lng="pt-PT" for="option2" class="btn btn-secondary me-1 styletextDirection" data-value="ltr">
                  <input type="radio" name="options" id="option2"> PT
                </label>
                <label data-lng="ar-AR" for="option3" class="btn btn-secondary me-1 styletextDirection" data-value="rtl">
                  <input type="radio" name="options" id="option3"> AR
                </label>
                <label data-lng="es-ES" for="option4" class="btn btn-secondary me-1 styletextDirection" data-value="ltr">
                  <input type="radio" name="options" id="option4"> ES
                </label>
              </!--li-->
              <li class="menu-item by">Design with by <a href="https://rankon.co.uk/" target="_blank">RankOn Digital</a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="payment-list">
              <li><p>Payments We Accept</p></li>
              <li><i class="fab fa-cc-paypal"></i></li>
              <li><i class="fab fa-cc-visa"></i></li>
              <li><i class="fab fa-cc-mastercard"></i></li>
              <li><i class="fab fa-cc-apple-pay"></i></li>
              <li><i class="fab fa-cc-discover"></i></li>
              <li><i class="fab fa-cc-amazon-pay"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
<script src="assets/js/gdpr-cookie.min.js"></script>
<script>
  $.gdprcookie.init({});
    $(document.body)
    .on("gdpr:show", function() {
    console.log("Cookie dialog is shown");
    })
    .on("gdpr:accept", function() {
    var preferences = $.gdprcookie.preference();
    console.log("Preferences saved:", preferences);
    })
    .on("gdpr:advanced", function() {console.log("Advanced button was pressed");});
    if ($.gdprcookie.preference("marketing") === true) {console.log("This should run because marketing is accepted.");}
</script>