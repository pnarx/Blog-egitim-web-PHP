<?php require_once 'header.php';
require_once 'sidebar.php';

$iletisimsor=$baglanti->prepare("SELECT* FROM iletisim ");
$iletisimsor->execute(array());




?>


  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
       
<div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Gelen Mesaj Kutusu </b></h3>


              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Adı</th>
                      <th>Soyadı</th>
                      <th>E-Posta</th>
                      <th>Telefon</th>
                      <th>Mesajı</th>
                      <th>Tarih</th>


                    </tr>
                  </thead>
                  <tbody>
                    <?php   
while( $iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC)){  ?>

                    <tr>
                      <td><?php echo $iletisimcek['iletisim_ad'] ?></td>
                      <td><?php echo $iletisimcek['iletisim_soyad'] ?></td>
                      <td><?php echo $iletisimcek['iletisim_mail'] ?></td>
                      <td><?php echo $iletisimcek['iletisim_telefon'] ?></td>
                      <td><?php echo $iletisimcek['iletisim_mesaj'] ?></td>
                      <td><?php echo $iletisimcek['iletisim_tarih'] ?></td>


            
                      <td>
                        <form action="islem.php" method="post">

                        <button type="submit" name="iletisimsil" class="btn btn-danger">Sil</button>

                        <input name ="id" value="<?php echo $iletisimcek['id'] ?>" type="hidden">

            

      </div>
                        </form> 
                                          
                    
                    </td>

                    </tr>

                    <?php } ?>
                    
                  </tbody>
                </table>
               
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>    

        <form action="islem.php" method="post">

        <div class="form-group">
   
                
                    <label for="exampleInputEmail1">İletişim Açıklama</label>
                    <textarea name="iletisim_aciklama" id="editor1" class="ckeditor" ><?php echo $iletisimaciklamacek['iletisim_aciklama'] ?></textarea> <br>

                    <label for="exampleInputEmail1">İletişim Başlık</label>
                    <input name="iletisim_baslik" type="text" value="<?php echo $iletisimaciklamacek['iletisim_baslik'] ?>"> <br>

                    <label for="exampleInputEmail1">Adres Bilgileri </label>
                    <input name="iletisim_adres_baslik" type="text"  value="<?php echo $iletisimaciklamacek['iletisim_adres_baslik'] ?>"> <br>

                    <label for="exampleInputEmail1">Adres içerik</label>
                    <input name="iletisim_adres" type="text" value="<?php echo $iletisimaciklamacek['iletisim_adres'] ?>" > <br>

                    <label for="exampleInputEmail1">İletişim Bilgileri</label>
                    <input name="iletisim_hatti" type="text" value="<?php echo $iletisimaciklamacek['iletisim_hatti'] ?>" ></input>
                    <br>
                    <label for="exampleInputEmail1">İletişim İçerik</label>
                    <input name="iletisim_hatti_ilk" value="<?php echo $iletisimaciklamacek['iletisim_hatti_ilk'] ?>" type="text" >

                  </div>
                  <button name="iletisimaciklamakaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>

        </div>
        <?php
              if(@$_GET['durum']=="okey"){?> 

                <p style="color:green"> İşlem başarılı </p>
                
              <?php }elseif(@$_GET['durum']=="no"){?>
              <p style="color:red;"> İşlem başarısız </p> 
              <?php } ?>
                
                </div>
                <!-- /.card-body -->

          
       </form> 

    </section>
    
  </div>








 


<?php require_once 'footer.php';?>

