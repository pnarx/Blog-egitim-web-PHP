<?php require_once 'header.php';
require_once 'sidebar.php';

$kadrosor=$baglanti->prepare("SELECT* FROM kadro ");
$kadrosor->execute(array());



?>

<?php if($_GET['sayfa']=="kadro") { ?>

  <div class="content-wrapper">

    <div class="content-header">
    

    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class = "col-md-12">
       
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Kadromuz</h3>

<a href="ekle.php?sayfa=ogretmenkayit"> <button style="float:right" type="submit" class="btn btn-info"> Ekle </button>
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
                      <th>Adı Soyadı</th>
                      <th>Branş</th>
                      <th>Görev</th>
                      <th>Düzenle</th>
                      <th>Sil</th>


                    </tr>
                  </thead>
                  <tbody>
                    <?php   
while( $kadrocek=$kadrosor->fetch(PDO::FETCH_ASSOC)){  ?>

                    <tr>
                      <td><img style="width: 100px; " src="resimler/kadro/<?php echo $kadrocek['k_resim'] ?>"> </td>
                      <td><?php echo $kadrocek['k_adsoy'] ?></td>
                      <td><?php echo $kadrocek['k_brans'] ?></td>
                      <td><?php echo $kadrocek['k_gorev'] ?></td>
                      <td><a href="düzenle.php?sayfa=kadro&id=<?php echo $kadrocek['id'] ?>"<button type="submit" class="btn btn-success">Düzenle</button> </a></td>
                      <td>
                        <form action="islem.php" method="post">

                        <button type="submit" name="kadrosil" class="btn btn-danger">Sil</button>

                        <input name ="id" value="<?php echo $kadrocek['id'] ?>" type="hidden">
                        <input name="resim" value="<?php echo $kadrocek['k_resim'] ?>" type="hidden">

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







<?php }?>







<?php require_once 'footer.php';?>

