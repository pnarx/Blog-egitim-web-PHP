<?php require_once 'header.php';
require_once 'sidebar.php';

$sitesor=$baglanti->prepare("SELECT* FROM sitebilgisi where id=?");
$sitesor->execute(array(1));
$sitecek=$sitesor->fetch(PDO::FETCH_ASSOC);



?>


  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Site Bilgileri </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post">

                <div class="card-body">
        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name="sitebaslik" value="<?php echo $sitecek['site_baslik'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site başlığını giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name="birinciAd" value="<?php echo $sitecek['site_birinciAd'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site başlığını giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name="ikinciAd" value="<?php echo $sitecek['site_ikinciAd'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site başlığını giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Açıklama</label>
                    <input name="aciklama" value="<?php echo $sitecek['site_aciklama'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Site açıklamasını giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Anahtarı</label>
                    <input name="anahtar" value="<?php echo $sitecek['site_anahtar'] ?>"type="text" class="form-control" id="exampleInputEmail1" placeholder="Site anahtar kelimsesini giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Adres </label>
                    <input  name="adres" value="<?php echo $sitecek['site_adres'] ?>"type="text" class="form-control" id="exampleInputEmail1" placeholder="Adresinizi giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telefon</label>
                    <input name="telefon" value="<?php echo $sitecek['site_telefon'] ?>"type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefon numaranızı giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input  name="email" value="<?php echo $sitecek['site_email'] ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="E mail adresinizi giriniz">
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
                  <button name="sitebilgikaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
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