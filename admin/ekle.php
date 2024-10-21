<?php require_once 'header.php';
require_once 'sidebar.php';


?>

<?php if($_GET['sayfa']=="ogretmenkayit") { ?>

  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Öğretmen Kayıt </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">

                <div class="card-body">
        
                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad Soyad</label>
                    <input name="isim"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen ad soyad giriniz">
                  </div>
          
                  <div class="form-group">
                    <label for="exampleInputEmail1">Branş</label>
                    <input name="brans" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>

                  </div>
            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Görev</label>
                    <input name="gorev" type="text" class="form-control"placeholder="Lütfen kişiye ait görev giriniz"></input>

                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="kadrokaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
                </div>
              </form>
              
            </div>
            <!-- /.card -->
        </div>    
        </div>

      </div>
 
    </section>
    
  </div>





  <?php  } ?>
 


 
<!---- öğrenci kayıt işlemleri --->

<?php if($_GET['sayfa']=="ogrencikayit") { ?>

<div class="content-wrapper">

  <div class="content-header">
  

  
  <section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class = "col-md-12">
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"> Öğrenci Kayıt </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="islem.php" method="post" enctype="multipart/form-data">

              <div class="card-body">
              <div class="form-group">
                    <img style="width: 100px;" src="resimler/ogrenci/<?php echo $ogrencicek['ogr_resim'] ?>" >
                    </div>
                    <input type="hidden" name="eskiresim" value="<?php echo $ogrencicek['ogr_resim'] ?>">
    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Resim</label>
                        <input name="resim"type="file" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">TC Kimlik No</label>
                        <input name="tc" value="<?php echo $ogrencicek['ogr_tc'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen ad soyad giriniz">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Ad </label>
                        <input name="ad" value="<?php echo $ogrencicek['ogr_ad'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen ad soyad giriniz">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Soyad</label>
                        <input name="soyad"value="<?php echo $ogrencicek['ogr_soyad'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Telefon</label>
                        <input name="telefon"value="<?php echo $ogrencicek['ogr_tel'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Adres</label>
                        <input name="adres"value="<?php echo $ogrencicek['ogr_adres'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Veli İsim</label>
                        <input name="veliad"value="<?php echo $ogrencicek['ogr_veli'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Veli Telefon</label>
                        <input name="velitel"value="<?php echo $ogrencicek['ogr_veli_tel'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>
    
                      </div>
                
                      <div class="form-group">
                        <label for="exampleInputEmail1">Doğum Tarihi</label>
                        <input name="dtarih" type="text" value="<?php echo $ogrencicek['ogr_dtarih'] ?>" class="form-control"placeholder="Lütfen kişiye ait görev giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Sınıf</label>
                        <input name="sinif" type="text" value="<?php echo $ogrencicek['ogr_sınıf'] ?>" class="form-control"placeholder="Lütfen kişiye ait görev giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kayıt Tarih</label>
                        <input name="ktarih" type="text" value="<?php echo $ogrencicek['ogr_kayittarih'] ?>" class="form-control"placeholder="Lütfen kişiye ait görev giriniz"></input>
    
                      </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button name="ogrencikaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
              </div>
            </form>
            
          </div>
          <!-- /.card -->
      </div>    
      </div>

    </div>

  </section>
  
</div>





<?php  } ?>






  <?php if($_GET['sayfa']=="yayinlar") { ?>

<div class="content-wrapper">

  <div class="content-header">
  

  
  <section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class = "col-md-12">
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"> Yayınlar </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="islem.php" method="post" enctype="multipart/form-data">

              <div class="card-body">
      
              <div class="form-group">
                  <label for="exampleInputEmail1">Resim</label>
                  <input name="resim" type="file" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Yayın Adı</label>
                  <input name="isim"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen yayın adı giriniz">
                </div>
        
                <div class="form-group">
                  <label for="exampleInputEmail1">Ders</label>
                  <input name="ders" type="text" class="form-control"placeholder="Ders adı giriniz"></input>

                </div>
          
               
              
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button name="yayinlarkaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
              </div>
            </form>
            
          </div>
          <!-- /.card -->
      </div>    
      </div>

    </div>

  </section>
  
</div>





<?php  } ?>
<!--------------------yönetici kayit --> 



<?php if($_GET['sayfa']=="yoneticikayit") { ?>

<div class="content-wrapper">

  <div class="content-header">
  

  
  <section class="content">
    <div class="container-fluid">
      <div class="row">
          <div class = "col-md-12">
      <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"> Yönetici Kayıt </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="islem.php" method="post" enctype="multipart/form-data">

              <div class="card-body">
              <div class="form-group">
                    <img style="width: 100px;" src="resimler/yonetici/<?php echo $yoneticicek['yonetici_resim'] ?>" >
                    </div>
                    <input type="hidden" name="eskiresim" value="<?php echo $yoneticicek['yonetici_resim'] ?>">
    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Resim</label>
                        <input name="resim"type="file" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">TC Kimlik No</label>
                        <input name="tc" value="<?php echo $yoneticicek['yonetici_tc'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen ad soyad giriniz">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Ad </label>
                        <input name="ad" value="<?php echo $yoneticicek['yonetici_ad'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen ad soyad giriniz">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Soyad</label>
                        <input name="soyad"value="<?php echo $yoneticicek['yonetici_soyad'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Telefon</label>
                        <input name="telefon"value="<?php echo $yoneticicek['yonetici_tel'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">E-posta</label>
                        <input name="mail"value="<?php echo $yoneticicek['yonetici_mail'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Şifre</label>
                        <input name="sifre"value="<?php echo $yoneticicek['yonetici_sifre'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>
    
                      </div>
                     
                    
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button name="yoneticikaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
              </div>
            </form>
            
          </div>
          <!-- /.card -->
      </div>    
      </div>

    </div>

  </section>
  
</div>





<?php  } ?>






<?php require_once 'footer.php';?>