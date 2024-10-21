<?php require_once 'header.php';
require_once 'sidebar.php';


?>

<?php if($_GET['sayfa']=="kadro") {
    
    
    
$kadrosor=$baglanti->prepare("SELECT* FROM kadro where id=:id ");
$kadrosor->execute(array(

'id'=>$_GET['id']

));
$kadrocek=$kadrosor->fetch(PDO::FETCH_ASSOC);


    
    

    
    ?>

  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Kadro Düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">

                <div class="card-body">
                <div class="form-group">
                <img style="width: 100px;" src="resimler/kadro/<?php echo $kadrocek['k_resim'] ?>" >
                </div>
                <input type="hidden" name="eskiresim" value="<?php echo $kadrocek['k_resim'] ?>">

                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim"type="file" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ad Soyad</label>
                    <input name="isim" value="<?php echo $kadrocek['k_adsoy'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen ad soyad giriniz">
                  </div>
          
                  <div class="form-group">
                    <label for="exampleInputEmail1">Branş</label>
                    <input name="brans"value="<?php echo $kadrocek['k_brans'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait branş giriniz"></input>

                  </div>
            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Görev</label>
                    <input name="gorev" type="text" value="<?php echo $kadrocek['k_gorev'] ?>" class="form-control"placeholder="Lütfen kişiye ait görev giriniz"></input>

                  </div>
                
                </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?php echo $kadrocek['id'] ?>">


                <div class="card-footer">
                  <button name="kadrodüzenle" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
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

  <!-- öğrenci düzenleme işlemleri ----->
  <?php if($_GET['sayfa']=="ogrencidüzenle") {
    
    
    
    $ogrencisor=$baglanti->prepare("SELECT* FROM ögrencibilgi where id=:id ");
    $ogrencisor->execute(array(
    
    'id'=>$_GET['id']
    
    ));
    $ogrencicek=$ogrencisor->fetch(PDO::FETCH_ASSOC);
    
    
        
        
    
        
        ?>
    
      <div class="content-wrapper">
    
        <div class="content-header">
        
    
        
        <section class="content">
          <div class="container-fluid">
            <div class="row">
                <div class = "col-md-12">
            <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"> Ögrenci Düzenle</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="islem.php" method="post" enctype="multipart/form-data">
    
                    <div class="card-body">
                    <div class="form-group">
                    <img style="width: 100px;" src="resimler/ogrbilgi/<?php echo $ogrencicek['ogr_resim'] ?>" >
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
                    <input type="hidden" name="id" value="<?php echo $ogrencicek['id'] ?>">
    
    
                    <div class="card-footer">
                      <button name="ogrencidüzenle" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
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
    <!-- öğrenci düzenleme işlemleri ----->
    <?php if($_GET['sayfa']=="yoneticidüzenle") {
    
    
    
    $yoneticisor=$baglanti->prepare("SELECT* FROM yöneticibilgi where id=:id ");
    $yoneticisor->execute(array(
    
    'id'=>$_GET['id']
    
    ));
    $yoneticicek=$yoneticisor->fetch(PDO::FETCH_ASSOC);
    
    
        
        
    
        
        ?>



    <!---yönetici düzenle işlemleri------------------------------>
      <div class="content-wrapper">
    
        <div class="content-header">
        
    
        
        <section class="content">
          <div class="container-fluid">
            <div class="row">
                <div class = "col-md-12">
            <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"> Yönetici Düzenle</h3>
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
                        <input name="tc" value="<?php echo $yoneticicek['yonetici_tc'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen tc kimlik numaranızı giriniz
                      <div class="form-group">
                        <label for="exampleInputEmail1">Ad </label>
                        <input name="ad" value="<?php echo $yoneticicek['yonetici_ad'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen adınızı giriniz">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Soyad</label>
                        <input name="soyad"value="<?php echo $yoneticicek['yonetici_soyad'] ?>" type="text" class="form-control"placeholder="Lütfen soyadınzı giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Telefon</label>
                        <input name="telefon"value="<?php echo $yoneticicek['yonetici_tel'] ?>" type="text" class="form-control"placeholder="Lütfen kişiye ait telefon giriniz"></input>
    
                      </div>
                   
                    
                      <div class="form-group">
                        <label for="exampleInputEmail1">E-posta</label>
                        <input name="mail" type="text" value="<?php echo $yoneticicek['yonetici_mail'] ?>" class="form-control"placeholder="Lütfen kişiye ait e posta adresini giriniz"></input>
    
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Şifre</label>
                        <input name="sifre" type="text" value="<?php echo $yoneticicek['yonetici_sifre'] ?>" class="form-control"placeholder="Lütfen kişiye ait e posta adresini giriniz"></input>
    
                      </div>
                      </div>
                 
                
                    </div>
                    <!-- /.card-body -->
                    <input type="hidden" name="id" value="<?php echo $yoneticicek['id'] ?>">
    
    
                    <div class="card-footer">
                      <button name="yoneticidüzenle" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
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
  

  <?php if($_GET['sayfa']=="yayinlar") {
    
    
    
    $yayinsor=$baglanti->prepare("SELECT* FROM yayinlar where id=:id ");
    $yayinsor->execute(array(
    
    'id'=>$_GET['id']
    
    ));
    $yayincek=$yayinsor->fetch(PDO::FETCH_ASSOC);
    
    
        
        
    
        
        ?>
    
      <div class="content-wrapper">
    
        <div class="content-header">
        
    
        
        <section class="content">
          <div class="container-fluid">
            <div class="row">
                <div class = "col-md-12">
            <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title"> Yayın Düzenle</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="islem.php" method="post" enctype="multipart/form-data">
    
                    <div class="card-body">
                    <div class="form-group">
                    <img style="width: 100px;" src="resimler/yayinlar/<?php echo $yayincek['yayin_resim'] ?>" >
                    </div>
                    <input type="hidden" name="eskiresim" value="<?php echo $yayincek['yayin_resim'] ?>">
    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Resim</label>
                        <input name="resim"type="file" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Yayın Ad</label>
                        <input name="isim" value="<?php echo $yayincek['yayin_ad'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Lütfen yayın adı giriniz">
                      </div>
              
                      <div class="form-group">
                        <label for="exampleInputEmail1">Ders</label>
                        <input name="ders"value="<?php echo $yayincek['yayin_ders'] ?>" type="text" class="form-control"placeholder="Ders adı giriniz"></input>
    
                      </div>
                
                      
                    
                    </div>
                    <!-- /.card-body -->
                    <input type="hidden" name="id" value="<?php echo $yayincek['id'] ?>">
    
    
                    <div class="card-footer">
                      <button name="yayindüzenle" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
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