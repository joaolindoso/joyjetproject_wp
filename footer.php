
<!-- footer starts  -->
<section class="footer">
    <div class="container">
        <div class="row">
            <hr>
            <p>
                © 2016 Created by Joyjet Digital Space Agency
            </p>
        </div>
    </div>
</section>

<!-- footer section ends -->

<!-- jquery  link  -->
<script src="<?php bloginfo('template_url') ?>/assets/jquery/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="<?php bloginfo('template_url') ?>/assets/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- popper  link  -->
<script scr="<?php bloginfo('template_url') ?>/assets/popper.js/dist/popper.js"></script>

<!-- magnific popup js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- aos js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="<?php bloginfo('template_url') ?>/assets/OwlCarousel2-2.3.4/src/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/OwlCarousel2-2.3.4/src/js/owl.autoplay.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/OwlCarousel2-2.3.4/src/js/owl.navigation.js"></script>

<!-- custom js link  -->
<script src="<?php bloginfo('template_url') ?>/assets/js/main.js"></script>

<script>
AOS.init({
    delay:400,
    duration:1000
    
});
</script>

<script type="text/javascript"> 
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            navigation:true,
            nav:true,
            dots: true,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            navText: ["<",">"],
            // navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })
    });
</script>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script> new window.VLibras.Widget('https://vlibras.gov.br/app'); </script>

<?php wp_footer(); ?>

</body>
</html>