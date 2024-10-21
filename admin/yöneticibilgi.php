<?php require_once 'header.php';
require_once 'sidebar.php';

$yoneticisor=$baglanti->prepare("SELECT* FROM yöneticibilgi ");
$yoneticisor->execute(array());



?>


  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
       
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Yönetici Bilgileri</h3>

<a href="ekle.php?sayfa=yoneticikayit"> <button style="float:right" type="submit" class="btn btn-info"> Ekle </button>
</a>

              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Resim</th>
                      <th>Adı </th>
                      <th>Soyadı</th>
                      <th>E-posta</th>
                      <th>Şifre</th>

                      <th>Tc Kimlik No</th>
                      <th>Telefon</th>

                      <th>Düzenle</th>
                      <th>Sil</th>


                    </tr>
                  </thead>
                  <tbody>
                    <?php   
while( $yoneticicek=$yoneticisor->fetch(PDO::FETCH_ASSOC)){  ?>

                    <tr>
                      <td><img style="width: 100px; " src="resimler/yonetici/<?php echo $yoneticicek['yonetici_resim'] ?>"> </td>
                      <td><?php echo $yoneticicek['yonetici_ad'] ?></td>
                      <td><?php echo $yoneticicek['yonetici_soyad'] ?></td>
                      <td><?php echo $yoneticicek['yonetici_mail'] ?></td>
                      <td><?php echo $yoneticicek['yonetici_sifre'] ?></td>
                      <td><?php echo $yoneticicek['yonetici_tc'] ?></td> 
                      <td><?php echo $yoneticicek['yonetici_tel'] ?></td> 

                      <td><a href="düzenle.php?sayfa=yoneticidüzenle&id=<?php echo $yoneticicek['id'] ?>"<button type="submit" class="btn btn-success">Düzenle</button> </a></td>
                      <td>
                        <form action="islem.php" method="post">

                        <button type="submit" name="yoneticisil" class="btn btn-danger">Sil</button>

                        <input name ="id" value="<?php echo $yoneticicek['id'] ?>" type="hidden">
                        <input name="resim" value="<?php echo $yoneticicek['yonetici_resim'] ?>" type="hidden">

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

