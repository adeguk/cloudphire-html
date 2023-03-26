        <!-- ***** UPLOADED FOOTER FROM FOOTER.php ***** -->
        <footer id="footer"> </footer>
        </div>
        <!-- ***** BUTTON GO TOP ***** -->
        <a href="#0" class="cd-top"> <i class="fas fa-angle-up"></i> </a>
        <!-- Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer="" src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script defer="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Owl Carousel Min JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/slick.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/flickity.pkgd.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/flickity-fade.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/aos.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/mixitup.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/mixitup.multifilter.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/mixevents.js"></script>
        <script src="https://cdn.rankon.co.uk/js/filter.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/isotope.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/jquery.scrollme.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/swiper.min.js"></script>
        <script src="https://cdn.rankon.co.uk/js/wow.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/nouislider.min.js"></script>
        <script async="" src="https://cdn.rankon.co.uk/js/lazysizes.min.js"></script>

        <script>
            new WOW().init();
        </script>

        <?php
        if (is_array($extraJs) && count($extraJs) > 0) {
            echo '<!-- Page-specific Scripts -->';
            foreach ($extraJs as $js_item) {
                echo $js_item;
            }
        }
        ?>
        <script defer="" src="https://cdn.rankon.co.uk/js/scripts.min.js"></script>
        <script defer="" src="https://cdn.rankon.co.uk/js/settings-init.js"></script>

        </body>

        </html>