<?php require_once 'header.php';?>

      <!--Önkayıt ekranı-->
      <div class="w3l-iletisim-10 py-5" id="iletisim">
        <div class="form-41-mian pt-md-5 pt-3">
            <div class="container">
                <div class="row contacts-5-grid-main mb-5">
                    <div class="col-lg-6 contacts-5-grid pe-lg-5 mt-5">
                        <h2 class="title-subw3hny " style="font-size: 20px ;">Neden Eğitim Akademisi ?</h2>

                        <div class="card rounded-oval  mt-3 " style="border-radius: 8px; ">
                            <div class="card-body bg-dark ">
                            <div class="card-body  bg-white">
                        <p class="mt-1" style="color: rgb(69, 68, 68);">
                            Sevgili Veliler ve Değerli Öğrenciler,<br><?php echo $aciklamalarcek['ogr_aciklama'] ?>


</p>

                      </div>
                    </div>
                     </div>
                        
                    </div>
    
                    <div class="col mt-5 ">
                        <h4>Ön Kayıt Formu</h4>


                        <form action="islem.php" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3 mt-3">
                              
                              <input name="ad" type="name" class="form-control" id="inputname"  placeholder="Öğrenci Adı">
                             
                            </div>
                            <div class="form-group mb-3 ">
                              
                                <input name="soyad" type="name" class="form-control" id="inputname"  placeholder="Öğrenci Soyadı">
                               
                              </div>
                              <div class="form-group mb-3 ">
                              
                                <input name="adres" type="text" class="form-control" id="inputadres"  placeholder="Adresinizi giriniz">
                               
                              </div>
                              
                            <div class="form-group mb-3">
                             
                              <input name="mail" type="text" class="form-control" id="inputmail" placeholder="E-posta adresini giriniz">
                            </div>
                            <div class="form-group mb-3">
                               
                                <input  name="telefon" type="text" class="form-control" id="inputphone" placeholder="Telefon numaranızı giriniz">
                                
                              </div>
                              <div class="form-group mb-3">
                              <input name='sinif' type='text' class='form-control' id='inputphone' placeholder='Sınıfınızı giriniz'>

                         
                              </div>
                           
                            <div class="form-group mb-3">
                                
                            <input name="mesaj" type="text" class="form-control" id="inputphone" placeholder="Mesajınızı giriniz">
                              </div>

                                 
                              <?php
              if(@$_GET['durum']=="okey"){?> 

                <p style="color:green"> İşlem başarılı </p>
                
              <?php }elseif(@$_GET['durum']=="no"){?>
              <p style="color:red;">İşlem başarısız.Lütfen tüm alanları doldurunuz. </p> 
              <?php } ?>
                
                
                
                            <button  name="kaydet" type="submit" class="btn btn-primary">Formu Gönder</button>
                          </form>
                   
                                                     
                        
                     </div>
                 </div>      
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <?php require_once 'footer.php';?>
