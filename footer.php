 <!--/Son satırlar -->
 <footer class="w3l-footer">
        <div class="w3l-footer-16 py-5">
            <div class="container py-md-5 py-3 pb-0">
                <div class="row footer-p right-side">
                    <div class="col-lg-4 col-md-6 pe-lg-5">
                        <h2 class="footerw3l-logo"><a class="navbar-brand" href="index.html">
                        <span class="w3yellow  text-capitalize"><?php echo $sitecek['site_birinciAd'] ?></span> <span class="text-light"><?php echo $sitecek['site_ikinciAd'] ?></span>
                            </a></h2>
                        <p class="mt-3">  <?php echo $sitecek['site_anahtar'] ?> </p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="row">
                          
                            <div class="col-6 column">
                                <h3>İletişim</h3>
                                <ul class="footer-gd-16">

                                    <li><a href="#c">
                                    <?php echo $sitecek['site_inst'] ?></a></li>
                                   
                                    <li><?php echo $sitecek['site_telefon'] ?></li>
                                    <li><?php echo $sitecek['site_email'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 column mt-lg-0 mt-4 pl-xl-0">
                        <h3> Konum </h3>
                        <p class="mt-3"><?php echo $sitecek['site_adres'] ?></p>
                        
                        <p class="mt-3"><?php echo $sitecek['site_aciklama'] ?></p>



                    
                    
                    </div>
                </div>
                <div class="below-section text-center pt-lg-4 mt-5">
                   
                
                    <ul class="footer-gd-16 d-flex justify-content-center">
                        <li><a href="#">    </a></li>
                        <li class="mx-2">/
                        </li>
                        <li><a href="#"><?php echo $sitecek['site_baslik'] ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
  

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
      
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
   
    <!-- Template JavaScript -->
   
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>

    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });


        
  $(document).ready(function() {
    // Dropdown menüsünün üzerine gelindiğinde açılmasını sağla
    $('.nav-item.dropdown').hover(function() {
      $(this).find('.dropdown-menu').addClass('show');
    }, function() {
      $(this).find('.dropdown-menu').removeClass('show');
    });
  });


    </script>
   
   
   <script src="/eğitim web/css/bootstrap.min.css"></script>
   <script src="/eğitim web/css/style-starter.css"></script>
   <script src="/eğitim web/js/bootstrap.min.js>"></script>
   <script src="/eğitim web/js/jquery-3.3.1.min.js"></script>
   <script src="/eğitim web/js/theme-change.js"></script>
   <script src="/eğitim web/js/bootstrap.min.js"></script>
 
</body>

</html>
