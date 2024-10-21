<?php require_once 'header.php';
require_once 'sidebar.php';

$onkayitsor=$baglanti->prepare("SELECT* FROM onkayit ");
$onkayitsor->execute(array());




?>


  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
       
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Ön Kayıt Formu</h3>


<!--ARAMA KODU
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                 
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>  -->
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Adı</th>
                      <th>Soyadı</th>
                      <th>Adres</th>
                      <th>E-Posta</th>
                      <th>Telefon</th>
                      <th>Sınıf</th>
                      <th>Mesajı</th>


                    </tr>
                  </thead>
                  <tbody>
                    <?php   
while( $onkayitcek=$onkayitsor->fetch(PDO::FETCH_ASSOC)){  ?>

                    <tr>
                      <td><?php echo $onkayitcek['ogr_adi'] ?></td>
                      <td><?php echo $onkayitcek['ogr_soyadi'] ?></td>
                      <td><?php echo $onkayitcek['ogr_adres'] ?></td>
                      <td><?php echo $onkayitcek['ogr_mail'] ?></td>
                      <td><?php echo $onkayitcek['ogr_telefon'] ?></td>
                      <td><?php echo $onkayitcek['ogr_sinif'] ?></td>
                      <td><?php echo $onkayitcek['ogr_mesaj'] ?></td>
                      <td><?php echo $onkayitcek['ogr_mesaj'] ?></td>


            
                      <td>
                        <form action="islem.php" method="post">

                        <button type="submit" name="onkayitsil" class="btn btn-danger">Sil</button>

                        <input name ="id" value="<?php echo $onkayitcek['id'] ?>" type="hidden">

            

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
                    <label for="exampleInputEmail1">Ön Kayıt Açıklama</label>
                    <textarea name="ogr_aciklama" id="editor1" class="ckeditor"><?php echo $aciklamalarcek['ogr_aciklama'] ?></textarea>
                
                  </div>
                  <button name="aciklamakaydet" type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>

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

