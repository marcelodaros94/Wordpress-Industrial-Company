
        <footer>
            Todos los derechos reservados © 2022
        </footer>
        <script src="<?php bloginfo('template_url') ?>/js/wow.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/counterup1.0-1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>        
            // animations
            new WOW().init();        
            // counter up effect
            
            document.addEventListener("DOMContentLoaded", function(event) {
                $('.main-slider').slick({
                    dots: false,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    arrows: false
                   /* autoplay: true,
                    autoplaySpeed: 4000*/
                });
                $('.clientes-slider').slick({
                    dots: false,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 3,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 2000
                });
                $('.representadas-slider').slick({
                    dots: false,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 4,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 2000
                });
                $('.competencias-slider').slick({
                    dots: false,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    arrows: false
                   /* autoplay: true,
                    autoplaySpeed: 4000*/
                });
                /*$(".counter__number").counterUp({
                    delay: 150,
                    time:2500
                });*/
            });
        </script>      
        <?php wp_footer() ?>
    </body>
</html>