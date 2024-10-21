<?php require_once 'header.php';
require_once 'sidebar.php';

$ogrencisor=$baglanti->prepare("SELECT* FROM ögrencibilgi ");
$ogrencisor->execute(array());



?>



  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
       
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Öğrenci Bilgileri</h3>

<a href="ekle.php?sayfa=ogrencikayit"> <button style="float:right" type="submit" class="btn btn-info"> Ekle </button>
</a>

              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Resim</th>
                      <th>TC Kimlik No</th>
                      <th>Ad</th>
                      <th>Soyad</th>
                      <th>Telefon</th>
                      <th>Adres</th>
                      <th>Veli Ad</th>
                      <th>Veli Telefon</th>
                      <th>Doğum Tarihi</th>
                      <th>Sınıf</th>
                      <th>Kayıt Tarihi</th>

                      <th>Düzenle</th>
                      <th>Sil</th>


                    </tr>
                  </thead>
                  <tbody>
                    <?php   
while( $ogrencicek=$ogrencisor->fetch(PDO::FETCH_ASSOC)){  ?>

                    <tr>
                      <td><img style="width: 100px; " src="resimler/ogrbilgi/<?php echo $ogrencicek['ogr_resim'] ?>"> </td>
                      <td><?php echo $ogrencicek['ogr_tc'] ?></td>
                      <td><?php echo $ogrencicek['ogr_ad'] ?></td>
                      <td><?php echo $ogrencicek['ogr_soyad'] ?></td>
                      <td><?php echo $ogrencicek['ogr_tel'] ?></td>
                      <td><?php echo $ogrencicek['ogr_adres'] ?></td>
                      <td><?php echo $ogrencicek['ogr_veli'] ?></td>
                      <td><?php echo $ogrencicek['ogr_veli_tel'] ?></td>
                      <td><?php echo $ogrencicek['ogr_dtarih'] ?></td>
                      <td><?php echo $ogrencicek['ogr_sınıf'] ?></td>
                      <td><?php echo $ogrencicek['ogr_kayittarih'] ?></td>
                  
                      <td><a href="düzenle.php?sayfa=ogrencidüzenle&id=<?php echo $ogrencicek['id'] ?>"<button type="submit" class="btn btn-success">Düzenle</button> </a></td>
                      <td>
                        <form action="islem.php" method="post">

                        <button type="submit" name="ogrencisil" class="btn btn-danger">Sil</button>

                        <input name ="id" value="<?php echo $ogrencicek['id'] ?>" type="hidden">
                        <input name="resim" value="<?php echo $ogrencicek['ogr_resim'] ?>" type="hidden">

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
        </div>

      </div>
    </section>
    
  </div>















<?php require_once 'footer.php';?>

