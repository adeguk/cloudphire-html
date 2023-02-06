<!-- ***** FOOTER ****** -->
<footer class="footer">
  <div class="container">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-4">
          <p class="text-white">CloudPhire Hosting offers Cheap <a href="domain-registration/">Domain Name Registration</a>, Fast, Secure and <a href="linux-hosting">Reliable Linux</a>
            and <a href="web-hosting/windows-hosting">Window Hosting</a>, <a href="cloud-hosting">Cloud hosting</a>, <a href="digital-certificate">SSL digital certificate</a>
            and <a href="website-design/do-it-yourself-website-builder">website builder</a>.
            It is part of the digital division of <a href="https://advotix.africa">Advotix.</a></p>
          <div class="copyright">©2022 CloudPhire - All rights reserved</div>
          <div class="soc-icons">
            <a href=""><i class="fab fa-facebook-f withborder noshadow"></i></a>
            <a href=""><i class="fab fa-youtube withborder noshadow"></i></a>
            <a href=""><i class="fab fa-twitter withborder noshadow"></i></a>
            <a href=""><i class="fab fa-instagram withborder noshadow"></i></a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="heading">Domain</div>
              <ul class="footer-menu">
                <li class="menu-item f-15"><a href="hosting.php">All Domain Pricing</a></li>
                <li class="menu-item f-15"><a href="dedicated.php">Whois Lookup</a></li>
                <li class="menu-item f-15"><a href="vps.php">Domain Promos</a></li>
                <li class="menu-item f-15"><a href="domains.php">Combo Offerss</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="heading">Support</div>
              <ul class="footer-menu">
                <li class="menu-item f-15"><a href="login.php">Client Area</a></li>
                <li class="menu-item f-15"><a href="knowledgebase-list.php">Knowledge Base</a></li>
                <li class="menu-item f-15"><a href="contact.php">Report False Whois</a></li>
                <li class="menu-item f-15"><a href="contact.php">Report Spam</a></li>
                <li class="menu-item f-15"><a href="faq.php">FAQ</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="heading">Company</div>
              <ul class="footer-menu">
                <li class="menu-item f-15"><a href="about.php">About us</a> </li>
                <li class="menu-item f-15"><a href="contact.php">Contact Us</a></li>
                <li class="menu-item f-15"><a href="elements.php">Features</a></li>
                <li class="menu-item f-15"><a href="blog-details.php">Blog</a></li>
                <li class="menu-item f-15"><a href="legal.php">Legal</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="heading">Infrastructure</div>
              <ul class="footer-menu">
                <li class="menu-item f-15"><a href="about.php">Datacenter Details</a> </li>
                <li class="menu-item f-15"><a href="elements.php">Hosting Security</a></li>
                <li class="menu-item f-15"><a href="blog-details.php">Servers Monitoring</a></li>
                <li class="menu-item f-15"><a href="legal.php">Backup and Recovery</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul class="footer-menu">
            <li class="menu-item by">Design with by <a href="https://rankon.co.uk/" target="_blank">RankOn Digital</a></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul class="payment-list">
            <li>
              <p>Payments We Accept</p>
            </li>
            <li><i class="fab fa-cc-visa"></i></li>
            <li><i class="fab fa-cc-mastercard"></i></li>
            <li><i class="fab fa-cc-discover"></i></li>
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
    .on("gdpr:advanced", function() {
      console.log("Advanced button was pressed");
    });
  if ($.gdprcookie.preference("marketing") === true) {
    console.log("This should run because marketing is accepted.");
  }
</script>