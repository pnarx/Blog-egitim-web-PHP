<?php require_once 'header.php';
require_once 'sidebar.php';

$hakkimizdasor=$baglanti->prepare("SELECT* FROM hakkimizda where id=?");
$hakkimizdasor->execute(array(1));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);



?>


  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Hakkımızda </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">

                <div class="card-body">
        
                <div class="form-group">
                    <img style="width: 200px;" src="resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim'] ?> ">
                  </div>
                 <input type="hidden" name="eskiresim" value="<?php echo $hakkimizdacek['hakkimizda_resim'] ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Başlık</label>
                    <input name="hakkimizdabaslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site başlığını giriniz">
                  </div>
          
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Açıklama</label>
                    <textarea name="hakkimizdaaciklama" id="editor1" class="ckeditor"><?php echo $hakkimizdacek['hakkimizda_aciklama'] ?></textarea>

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
                  <button name="hakkimizdakaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
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