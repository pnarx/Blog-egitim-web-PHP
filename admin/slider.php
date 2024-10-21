<?php require_once 'header.php';
require_once 'sidebar.php';

$slidersor=$baglanti->prepare("SELECT* FROM slider where id=?");
$slidersor->execute(array(1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);



?>


  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Slider </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">

                <div class="card-body">
        
                <div class="form-group">
                    <img style="width: 200px;" src="resimler/slider/<?php echo $slidercek['slider_resim'] ?> ">
                  </div>
                 <input type="hidden" name="eskiresim" value="<?php echo $slidercek['slider_resim'] ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Başlık</label>
                    <input name="sliderbaslik" value="<?php echo $slidercek['slider_baslik'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site başlığını giriniz">
                  </div>
          
            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Buton</label>
                    <input name="sliderbuton" value="<?php echo $slidercek['slider_buton'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site başlığını giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Link</label>
                    <input name="sliderlink" value="<?php echo $slidercek['slider_link'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site başlığını giriniz">

                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Açıklama</label>
                    <input name="slideraciklama" value="<?php echo $slidercek['slider_aciklama'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site açıklamasını giriniz">

                  <?php
              if(@$_GET['durum']=="okey"){?> 

                <p style="color:green"> İşlem başarılı </p>
                
              <?php }elseif(@$_GET['durum']=="no"){?>
              <p style="color:red;"> İşlem başarısız </p> 
              <?php } ?>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sliderkaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>    
        </div>

      </div>
    </section>
    
  </div>








 


<?php require_once 'footer.php';?>