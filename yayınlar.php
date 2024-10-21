<?php require_once 'header.php';?>


          <div class="slider-info inner-banner py-5 banner-view banner-top1" style="background-image: url('/eğitim web/images/banner2.jpg');">
          
            <section class="w3l-breadcrumb text-left py-sm-5 ">
                <div class="container">
                    <div class="w3breadcrumb-gids">
                        <div class="w3breadcrumb-left text-left">
                            <h2 class="inner-w3-title mt-lg-5 mt-4">
                                Yayınlarımız </h2>
                        </div>
                        <div class="w3breadcrumb-right">
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="index.html">Kurumsal</a></li>
                                <li class="active"><span class="fas fa-arrow-right mx-2"></span> Yayınlar</li>
                            </ul>
                        </div>
                    </div>
    
                </div>
            </section>
        </div>
        <!-- yayınlar-->
        <section class="w3l-witemshny-main py-5">
            <div class="container py-md-4">
                <!--satur 1-->
                <div class="witemshny-grids row">
                <?php
            
            $yayinsor=$baglanti->prepare("SELECT* FROM yayinlar ");
            $yayinsor->execute(array());
                        while( $yayincek=$yayinsor->fetch(PDO::FETCH_ASSOC)) {  ?>

                    <div class="col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                        <img src="admin/resimler/yayinlar/<?php echo $yayincek['yayin_resim'] ?>" alt="" class="img-fluid radius-image">                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-lg-4 mt-3"><a href="#img"><?php echo $yayincek['yayin_ad'] ?></a>
                        </h4>
                        <p class="mt-md-2"><?php echo $yayincek['yayin_ders'] ?></p>
                    </div>
             <?php } ?>

                </div>
               
            </div>
        </section>
        <?php require_once 'footer.php';?>
