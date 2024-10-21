<?php require_once 'header.php';

?>

    <section class="w3l-main-slider banner-slider" id="home" >
        <div class="owl-one owl-carousel owl-theme" >
                <div class="slider-info banner-view " style="background-image:url(admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>);" >
                    <div class="container">
                        <div class="w3banner-grids">
                            <div class="banner-info header-hero-19" >
                                <p class="w3hny-tag" ><?php echo $slidercek['slider_baslik']?>  </p>
                                <p style="font-size: 2em; font-weight: bold; color:white"><?php echo $slidercek['slider_aciklama'] ?></p>

                                <a href="<?php echo $slidercek['slider_link']?> " class="btn btn-style btn-primary mt-4 py-2">  <?php echo $slidercek['slider_buton']?>   </a>
                        
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>

    </section>
 