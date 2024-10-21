<?php require_once 'header.php';
require_once 'sidebar.php';

$yayinsor=$baglanti->prepare("SELECT* FROM yayinlar ");
$yayinsor->execute(array());



?>


  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
       
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Yayınlar</h3>

<a href="ekle.php?sayfa=yayinlar"> <button style="float:right" type="submit" class="btn btn-info"> Ekle </button>
</a>
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
                      <th>Resim</th>
                      <th>Yayın Adı</th>
                      <th>Ders</th>
                      <th>Düzenle</th>
                      <th>Sil</th>


                    </tr>
                  </thead>
                  <tbody>
                    <?php   
while( $yayincek=$yayinsor->fetch(PDO::FETCH_ASSOC)){  ?>

                    <tr>
                      <td><img style="width: 100px; " src="resimler/yayinlar/<?php echo $yayincek['yayin_resim'] ?>"> </td>
                      <td><?php echo $yayincek['yayin_ad'] ?></td>
                      <td><?php echo $yayincek['yayin_ders'] ?></td>
                      <td><a href="düzenle.php?sayfa=yayinlar&id=<?php echo $yayincek['id'] ?>"<button type="submit" class="btn btn-success">Düzenle</button> </a></td>
                      <td>
                        <form action="islem.php" method="post">

                        <button type="submit" name="yayinsil" class="btn btn-danger">Sil</button>

                        <input name ="id" value="<?php echo $yayincek['id'] ?>" type="hidden">
                        <input name="resim" value="<?php echo $yayincek['yayin_resim'] ?>" type="hidden">

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

