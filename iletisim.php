<?php require_once 'header.php';?>

 <!-- iletişim grid -->
 <div class="w3l-iletisim-10 py-5" id="iletisim">
    <div class="form-41-mian pt-md-5 pt-3">
        <div class="container">
            <div class="row contacts-5-grid-main mb-5">
                <div class="col-lg-6 contacts-5-grid pe-lg-5 mt-5">
                    <h5 class="title-subw3hny">Eğitim Akademi</h5>
                    <h3 class="title-w3l mb-3"><?php echo $iletisimaciklamacek['iletisim_baslik'] ?></h3>
                    <p >
                        Merhaba,<br><?php echo $iletisimaciklamacek['iletisim_aciklama'] ?>
.
                    </p>
                    <h4 class="title-w3l-adinf mt-4">Adres Bilgileri</h4> 
                    <div class="address-grid d-flex">
                    
                        <p >  <i class="fas fa-map-marker-alt mt-2" style="color: rgba(255, 128, 0, 0.941);"></i>  <?php echo $iletisimaciklamacek['iletisim_adres'] ?></p>
                    </div>
                    <h4 class="title-w3l-adinf mt-4">İletişim Hattı </h4>
                    <div class="address-grid d-flex">
                        
                        <p><a href="tel:0555 333 22 22" class="link1"><i class="fas fa-headset mt-2"></i>   <?php echo $iletisimaciklamacek['iletisim_hatti'] ?></a></p>
                    </div>
                    <div class="address-grid d-flex">
           
                        <p class="mt-0"><a href="mailto:mail@example.com" class="link1"><i class="fas fa-envelope"></i>  <?php echo $iletisimaciklamacek['iletisim_hatti_ilk'] ?></a></p>

                    </div>
                </div>

                <div class="col-lg-6 form-inner-cont mt-lg-0 mt-5">
                    <form action="islem.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3 mt-5">
                          
                          <input name="ad" type="name" class="form-control" id="inputname"  placeholder="Adınızı giriniz">
                         
                        </div>
                        <div class="form-group mb-3">
                            
                            <input name="soyad" type="inputsurname" class="form-control" id="inputsurname" placeholder="Soyadınızı giriniz">
                
                          </div>
                        <div class="form-group mb-3">
                         
                          <input name="mail" type="email" class="form-control" id="inputmail" placeholder="E-posta adresini giriniz">
                        </div>
                        <div class="form-group mb-3">
                           
                            <input name="telefon" type="phone" class="form-control" id="inputphone" placeholder="Telefon numaranızı giriniz">
                            
                          </div>
                       
                        <div class="form-group mb-3">
                            
                            <textarea name="mesaj" class="form-control" id="Textarea" rows="3" placeholder="Mesajınızı giriniz"></textarea>
                          </div>
                          <?php
              if(@$_GET['durum']=="okey"){?> 

                <p style="color:green"> İşlem başarılı </p>
                
              <?php }elseif(@$_GET['durum']=="no"){?>
              <p style="color:red;">İşlem başarısız.Lütfen tüm alanları doldurunuz. </p> 
              <?php } ?>
                        <button name="iletisimkaydet" type="submit" class="btn btn-primary">Mesaj Gönder</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div data-aos="fade-up">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12734.518082310982!2d37.3832161!3d37.0663109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e14d31d0ff3f%3A0x1757cbe443ea2919!2sGaziantep%20Kalesi!5e0!3m2!1str!2str!4v1704301252247!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>
<?php require_once 'footer.php';?>
