<?php require_once 'header.php';
require_once 'sidebar.php';

$lisesor=$baglanti->prepare("SELECT* FROM lisehazirlik where id=?");
$lisesor->execute(array(1));
$lisecek=$lisesor->fetch(PDO::FETCH_ASSOC);



?>


  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Lise Hazırlık </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">

                <div class="card-body">
        
                <div class="form-group">
                    <img style="width: 200px;" src="resimler/lisehazirlik/<?php echo $lisecek['lise_resim'] ?> ">
                  </div>
                 <input type="hidden" name="eskiresim" value="<?php echo $lisecek['lise_resim'] ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1">
                  </div>
                
              
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lise Hazırlık Başlık</label>
                    <input name="lisebaslik" value="<?php echo $lisecek['lise_baslik'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site başlığını giriniz">
                  </div>
          
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lise Hazırlık Açıklama</label>
                    <textarea name="liseaciklama" id="editor1" class="ckeditor"><?php echo $lisecek['lise_aciklama'] ?></textarea>

                  </div>
            
                  <?php
              if(@$_GET['durum']=="okey"){?> 

                <p style="color:green"> İşlem başarılı </p>
                
              <?php }elseif(@$_GET['durum']=="no"){?>
              <p style="color:red;"> İşlem başarısız </p> 
              <?php } ?>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="lisekaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
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