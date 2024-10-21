<?php require_once 'header.php';




?>


      <div class="slider-info inner-banner py-5 banner-view banner-top1" style="background-image: url('/eğitim web/images/banner2.jpg');">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                            Hakkımızda </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Anasayfa </a></li>
                            <li class="active"><span class="fas fa-arrow-right mx-2"></span> Hakkımızda</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
     </div>
 
    <section class="w3l-ab-page py-5" id="about1">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <h6 class="title-subw3hny mb-2"> <?php echo $hakkimizdacek['hakkimizda_baslik']   ?> </h6>
                    <h4 class="title-side mb-2"><?php echo $sitecek['site_baslik']   ?>
                    </h4>
                  
                    <p class="mt-3"> <?php echo $hakkimizdacek['hakkimizda_aciklama'] ?>
                       </div>
                        <div class="col-lg-5 offset-lg-1 text-end mt-lg-0 mt-5 position-relative">
                            <img src="admin/resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim'] ?>" alt="" class="img-fluid radius-image">
                            <div class="imginfo__box">
                                <h6 class="imginfo__title">3+</h6>
                                <p><?php echo $hakkimizdacek['hakkimizda_baslik']   ?></p>
                            </div>
                        </div>
                    </div>
                     
                
                
            
        </div>
    </section>
    
   

<?php require_once 'footer.php';?>
