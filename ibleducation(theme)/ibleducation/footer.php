</main><!-- #main -->
<div class="footer-widget-3">
    <div class="container-5 socials">
        <div class="navigation-left b f">
            <div class="fc">&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> Class Generation, LLC
                d.b.a. IBL Education | IBL News - 845 Third Avenue, 6th Fl, New York, NY 10022 • Tel 646-722-2616 • Made
                in U.S.A. <br>edX, Open edX and the corresponding logos are registered trademarks of edX Inc. All Rights
                Reserved</div>
            <div class="socials">
                <a href="https://twitter.com/ibleducation" target="_blank" class="nav-link s social f w-inline-block">
                    <img src="	https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/twitter-1.png"
                        alt="" class="image-38"><img
                        src="	https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/twitter-2.png"
                        alt="" class="image-38h">
                    <div class="icon_tp_text">Twitter</div>

                </a>
                <a href="https://www.linkedin.com/company/ibleducation" target="_blank"
                    class="nav-link s social w-inline-block">
                    <img src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/linkedin-4.png"
                        alt="" class="image-38">
                    <img src="https://ibleducation.com/wp-content/themes/ibl-web-ibleducation-theme/img/linkedin-5.png"
                        alt="" class="image-38h">
                    <div class="icon_tp_text fb ld">Linkedin</div>
                </a>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->
<script>
    var mobile_menu_btn = document.querySelector(".open_menu");
    var close_menu_btn = document.querySelector(".close_mobile_menu.w-inline-block");
    var mob_menu_wr = document.querySelector(".mob_menu_wr");
    if (mobile_menu_btn) {
        mobile_menu_btn.addEventListener("click", function () {
            mob_menu_wr.style.display = "block";
        });
    }
    if (close_menu_btn) {
        close_menu_btn.addEventListener("click", function () {
            mob_menu_wr.style.display = "none";
        });
    }
</script>
<?php wp_footer(); ?>
</body>

</html>