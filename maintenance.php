﻿<?php
$extraCss = [
    '<link href="https://cdn.rankon.co.uk/css/aos.min.css" rel="stylesheet">'
];
include_once('inc/_header.php');
?>
<!-- ***** 404 ****** -->
<section class="sec-normal notfound pt-150 scrollme">
    <div class="total-grad-pink-blue-intense"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <img class="svg" src="assets/patterns/maintenance.svg" alt="maintenance">
            </div>
        </div>
        <div class="col-md-12 text-center pt-5">
            <h1 class="text-white"><strong>Website is Under MAINTENANCE</strong></h1>
            <p class="text-muted"> We are improving our website. We'll be back soon with new awesome features</p>
            <a href="http://inebur.com/whmcs/?systpl=antler&carttpl=antler" target="_blank" class="btn btn-default-grad-purple-fill mt-3">Go Client Area</a>
        </div>
    </div>
</section>

<?php
$extraJs = [];
include_once('inc/_footer.php');
?>