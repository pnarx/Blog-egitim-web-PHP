<?php 
session_start();
require_once 'baglanti.php';

if(isset($_POST['sitebilgikaydet'])){
    //echo htmlspecialchars($_POST['sitebaslik']);//güvenlik açığı olmasın diye xss
$kaydet=$baglanti->prepare("UPDATE sitebilgisi SET 
site_baslik=:site_baslik,
site_birinciAd=:site_birinciAd,
site_ikinciAd=:site_ikinciAd,
site_aciklama=:site_aciklama,
site_anahtar=:site_anahtar,
site_adres=:site_adres,
site_telefon=:site_telefon,
site_email=:site_email

");
$update=$kaydet->execute(array(

    'site_baslik'=> htmlspecialchars($_POST['sitebaslik']),
    'site_aciklama'=> ($_POST['aciklama']),
    'site_birinciAd'=> ($_POST['birinciAd']),
    'site_ikinciAd'=> ($_POST['ikinciAd']),
    'site_anahtar' => htmlspecialchars($_POST['anahtar']),
    'site_adres'=> htmlspecialchars($_POST['adres']),
    'site_telefon'=> htmlspecialchars($_POST['telefon']),
    'site_email'=> htmlspecialchars($_POST['email'])
));

if($update) {
Header("Location:sitebilgisi.php?durum=okey");
}
else{
    Header("Location:sitebilgisi.php?durum=no");
}


}

    
    

if(isset($_POST['iletisimsil'])) {
    
    $sil=$baglanti->prepare("DELETE FROM iletisim where id=:id");
    $sil->execute(array(


'id'=> $_POST['id']

    
    ));
    if($sil){
        Header("Location:mesaj.php?durum=okey");
    }else{
        Header("Location:mesaj.php?durum=no");

    }
}



if(isset($_POST['hakkimizdakaydet'])){

if($_FILES['resim']["size"]>0){

$uploads_dir='resimler/hakkimizda';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,1000000);
$sayi2=rand(1,1000000);
$sayi3=rand(1,1000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi = $sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


    //echo htmlspecialchars($_POST['hakkimizda_baslik']);//güvenlik açığı olmasın diye xss
    $kaydet=$baglanti->prepare("UPDATE hakkimizda SET 
    hakkimizda_baslik=:hakkimizda_baslik,
    hakkimizda_aciklama=:hakkimizda_aciklama,
    hakkimizda_resim=:hakkimizda_resim

    ");
    
    $update = $kaydet->execute(array(
        'hakkimizda_baslik' => htmlspecialchars($_POST['hakkimizdabaslik']),
        'hakkimizda_aciklama' =>($_POST['hakkimizdaaciklama']),
        'hakkimizda_resim' => $resimadi
    ));
    
    if ($update) {

        $eskiresim=$_POST['eskiresim'];
        unlink("resimler/hakkimizda/$eskiresim");
        Header("Location:hakkimizda.php?durum=okey");
    } else {
        Header("Location:hakkimizda.php?durum=no");
    }
    
        
   
    }
    else{

          //echo htmlspecialchars($_POST['hakkimizda_baslik']);//güvenlik açığı olmasın diye xss
    $kaydet=$baglanti->prepare("UPDATE hakkimizda SET 
    hakkimizda_baslik=:hakkimizda_baslik,
    hakkimizda_aciklama=:hakkimizda_aciklama,
    hakkimizda_resim=:hakkimizda_resim

    ");
    if($update) {
        Header("Location:hakkimizda.php?durum=okey");
        }
        else{
            Header("Location:hakkimizda.php?durum=no");
        }
        
    }


}
    
if(isset($_POST['sliderkaydet'])){

if($_FILES['resim']["size"]>0){

    //resimkodum
$uploads_dir='resimler/slider';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,1000000);
$sayi2=rand(1,1000000);
$sayi3=rand(1,1000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi = $sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


    //echo htmlspecialchars($_POST['slider_baslik']);//güvenlik açığı olmasın diye xss
    $kaydet=$baglanti->prepare("UPDATE slider SET 
    slider_baslik=:slider_baslik,
    slider_aciklama=:slider_aciklama,
    slider_buton=:slider_buton,
    slider_link=:slider_link,
    slider_resim=:slider_resim

    ");
    
    $update = $kaydet->execute(array(
        'slider_baslik' =>($_POST['sliderbaslik']),
        'slider_aciklama' =>($_POST['slideraciklama']),
        'slider_buton'=>($_POST['sliderbuton']),
        'slider_link'=>($_POST['sliderlink']),
        'slider_resim' => $resimadi
   
    ));
    
    if ($update) {

        $eskiresim=$_POST['eskiresim'];
        unlink("resimler/slider/$eskiresim");
        Header("Location:slider.php?durum=okey");
    } else {
        Header("Location:slider.php?durum=no");
    }
    
        
   
    }
    else{

          //echo htmlspecialchars($_POST['slider_baslik']);//güvenlik açığı olmasın diye xss
    $kaydet=$baglanti->prepare("UPDATE slider SET 
    slider_baslik=:slider_baslik,
    slider_aciklama=:slider_aciklama,
    slider_buton=:slider_buton,
    slider_link=:slider_link,
    slider_resim=:slider_resim

    ");
    if($update) {
        Header("Location:slider.php?durum=okey");
        }
        else{
            
            Header("Location:slider.php?durum=no");
        }
        
    }
}






error_reporting(E_ALL);
ini_set('display_errors', 1);


if(isset($_POST['kadrokaydet'])){

    //resimkodum
    $uploads_dir='resimler/kadro';
    @$tmp_name=$_FILES['resim']["tmp_name"];
    @$name=$_FILES['resim']["name"];
    
    $sayi1=rand(1,1000000);
    $sayi2=rand(1,1000000);
    $sayi3=rand(1,1000000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimadi = $sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");

$kaydet = $baglanti->prepare("INSERT into kadro 
    (k_adsoy, k_brans, k_resim, k_gorev) 
    VALUES (:k_adsoy, :k_brans, :k_resim, :k_gorev)
");

$insert = $kaydet->execute(array(
    'k_adsoy' => htmlspecialchars($_POST['isim']),
    'k_brans' => $_POST['brans'],
    'k_resim' => $resimadi,
    'k_gorev' => htmlspecialchars($_POST['gorev'])
));


if($insert) {
    Header("Location:kadro.php?sayfa=kadro&durum=okey");
}
else{
    Header("Location:kadro.php?sayfa=kadro&durum=no");
}
}







   
if(isset($_POST['kadrodüzenle'])){

    if($_FILES['resim']["size"]>0){
    
        //resimkodum
    $uploads_dir='resimler/kadro';
    @$tmp_name=$_FILES['resim'] ["tmp_name"];
    @$name=$_FILES['resim'] ["name"];
    
    $sayi1=rand(1,1000000);
    $sayi2=rand(1,1000000);
    $sayi3=rand(1,1000000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimadi = $sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
    
    
           //echo htmlspecialchars($_POST['sitebaslik']);//güvenlik açığı olmasın diye xss
$kaydet=$baglanti->prepare("UPDATE kadro SET 
k_adsoy=:k_adsoy,
k_brans=:k_brans,
k_gorev=:k_gorev,
k_resim=:k_resim
WHERE id={$_POST['id']}

");

$update=$kaydet->execute(array(

    'k_adsoy'=> htmlspecialchars($_POST['isim']),
    'k_brans'=> ($_POST['brans']),
    'k_gorev'=> htmlspecialchars($_POST['gorev']),
    'k_resim'=> $resimadi
));

        
        if ($update) {
    
            $eskiresim=$_POST['eskiresim'];
            unlink("resimler/kadro/$eskiresim");
            Header("Location:kadro.php?sayfa=kadro&durum=okey");
        } else {
            Header("Location:kadro.php?sayfa=kadro&durum=no");
        }
        
            
       
        }
        else{
    
            //echo htmlspecialchars($_POST['sitebaslik']);//güvenlik açığı olmasın diye xss
$kaydet=$baglanti->prepare("UPDATE kadro SET 
k_adsoy=:k_adsoy,
k_brans=:k_brans,
k_gorev=:k_gorev,
k_resim=:k_resim
WHERE id={$_POST['id']}
");
        if($update) {
            Header("Location:kadro.php?sayfa=kadro&durum=okey");
            }
            else{
                Header("Location:kadro.php?sayfa=kadro&durum=no");
            }
            
        }
    }







    
    
    
    
    

if(isset($_POST['kadrosil'])) {
    
    $sil=$baglanti->prepare("DELETE FROM kadro where id=:id");
    $sil->execute(array(


'id'=> $_POST['id']

    
    ));
    if($sil){
        Header("Location:kadro.php?sayfa=kadro&durum=okey");
    }else{
        Header("Location:kadro.php?sayfa=kadro&durum=no");

    }
}























error_reporting(E_ALL);
ini_set('display_errors', 1);


if(isset($_POST['yayinlarkaydet'])){

    //resimkodum
    $uploads_dir='resimler/yayinlar';
    @$tmp_name=$_FILES['resim']["tmp_name"];
    @$name=$_FILES['resim']["name"];
    
    $sayi1=rand(1,1000000);
    $sayi2=rand(1,1000000);
    $sayi3=rand(1,1000000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimadi = $sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");

$kaydet = $baglanti->prepare("INSERT into yayinlar 
    (yayin_ad, yayin_ders, yayin_resim) 
    VALUES (:yayin_ad, :yayin_ders, :yayin_resim)
");

$insert = $kaydet->execute(array(
    'yayin_ad' => htmlspecialchars($_POST['isim']),
    'yayin_ders' => $_POST['ders'],
    'yayin_resim' => $resimadi
));


if($insert) {
    Header("Location:yayinlar.php?sayfa=yayinlar&durum=okey");
}
else{
    Header("Location:yayinlar.php?sayfa=yayinlar&durum=no");
}
}
  
if(isset($_POST['yayindüzenle'])){

    if($_FILES['resim']["size"]>0){
    
        //resimkodum
    $uploads_dir='resimler/yayinlar';
    @$tmp_name=$_FILES['resim'] ["tmp_name"];
    @$name=$_FILES['resim'] ["name"];
    
    $sayi1=rand(1,1000000);
    $sayi2=rand(1,1000000);
    $sayi3=rand(1,1000000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimadi = $sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
    
    
           //echo htmlspecialchars($_POST['sitebaslik']);//güvenlik açığı olmasın diye xss
$kaydet=$baglanti->prepare("UPDATE yayinlar SET 
yayin_ad=:yayin_ad,
yayin_ders=:yayin_ders,
yayin_resim=:yayin_resim
WHERE id={$_POST['id']}

");

$update=$kaydet->execute(array(

    'yayin_ad'=> htmlspecialchars($_POST['isim']),
    'yayin_ders'=> ($_POST['ders']),
    'yayin_resim'=> $resimadi
));

        
        if ($update) {
    
            $eskiresim=$_POST['eskiresim'];
            unlink("resimler/yayinlar/$eskiresim");
            Header("Location:yayinlar.php?durum=okey");
        } else {
            Header("Location:yayinlar.php?durum=no");
        }
        
            
       
        }
        else{
    
            //echo htmlspecialchars($_POST['sitebaslik']);//güvenlik açığı olmasın diye xss
$kaydet=$baglanti->prepare("UPDATE yayinlar SET 
yayin_ad=:yayin_ad,
yayin_ders=:yayin_ders,
yayin_resim=:yayin_resim

WHERE id={$_POST['id']}
");
        if($update) {
            Header("Location:yayinlar.php?durum=okey");
            }
            else{
                Header("Location:yayinlar.php?durum=no");
            }
            
        }
    }








if(isset($_POST['yayinsil'])) {
    
    $sil=$baglanti->prepare("DELETE FROM yayinlar where id=:id");
    $sil->execute(array(


'id'=> $_POST['id']

    
    ));
    if($sil){
        Header("Location:yayinlar.php?durum=okey");
    }else{
        Header("Location:yayinlar.php?durum=no");

    }
}








if(isset($_POST['lisekaydet'])){

    if($_FILES['resim']["size"]>0){
    
    $uploads_dir='resimler/lisehazirlik';
    @$tmp_name=$_FILES['resim'] ["tmp_name"];
    @$name=$_FILES['resim'] ["name"];
    
    $sayi1=rand(1,1000000);
    $sayi2=rand(1,1000000);
    $sayi3=rand(1,1000000);
    $sayilar=$sayi1.$sayi2.$sayi3;
    $resimadi = $sayilar.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
    
    
        //echo htmlspecialchars($_POST['hakkimizda_baslik']);//güvenlik açığı olmasın diye xss
        $kaydet=$baglanti->prepare("UPDATE lisehazirlik SET 
        lise_baslik=:lise_baslik,
        lise_aciklama=:lise_aciklama,
        lise_resim=:lise_resim
      

        ");
        
        $update = $kaydet->execute(array(
            'lise_baslik' => htmlspecialchars($_POST['lisebaslik']),
            'lise_aciklama' =>($_POST['liseaciklama']),
            'lise_resim' => $resimadi
    

        ));
        
        if ($update) {
    
            $eskiresim=$_POST['eskiresim'];
            unlink("resimler/lisehazirlik/$eskiresim");
            Header("Location:lisehazirlik.php?durum=okey");
        } else {
            Header("Location:lisehazirlik.php?durum=no");
        }
        
            
       
        }
        else{
    
              //echo htmlspecialchars($_POST['lisehazirlik_baslik']);//güvenlik açığı olmasın diye xss
        $kaydet=$baglanti->prepare("UPDATE lisehazirlik SET 
        lise_baslik=:lise_baslik,
        lise_aciklama=:lise_aciklama,
        lise_resim=:lise_resim
   

    
        ");
        if($update) {
            Header("Location:lisehazirlik.php?durum=okey");
            }
            else{
                Header("Location:lisehazirlik.php?durum=no");
            }
            
        }
    
    
    }







    if(isset($_POST['ünikaydet'])){

        if($_FILES['resim']["size"]>0){
        
        $uploads_dir='resimler/ünihazirlik';
        @$tmp_name=$_FILES['resim'] ["tmp_name"];
        @$name=$_FILES['resim'] ["name"];
        
        $sayi1=rand(1,1000000);
        $sayi2=rand(1,1000000);
        $sayi3=rand(1,1000000);
        $sayilar=$sayi1.$sayi2.$sayi3;
        $resimadi = $sayilar.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");
        
        
            //echo htmlspecialchars($_POST['hakkimizda_baslik']);//güvenlik açığı olmasın diye xss
            $kaydet=$baglanti->prepare("UPDATE ünihazirlik SET 
            üni_baslik=:üni_baslik,
            üni_aciklama=:üni_aciklama,
            üni_resim=:üni_resim
          
    
            ");
            
            $update = $kaydet->execute(array(
                'üni_baslik' =>($_POST['ünibaslik']),
                'üni_aciklama' =>($_POST['üniaciklama']),
                'üni_resim' => $resimadi
        
    
            ));
            
            if ($update) {
        
                $eskiresim=$_POST['eskiresim'];
                unlink("resimler/ünihazirlik/$eskiresim");
                Header("Location:ünihazirlik.php?durum=okey");
            } else {
                Header("Location:ünihazirlik.php?durum=no");
            }
            
                
           
            }
            else{
        
                  //echo htmlspecialchars($_POST['ünihazirlik_baslik']);//güvenlik açığı olmasın diye xss
            $kaydet=$baglanti->prepare("UPDATE ünihazirlik SET 
            üni_baslik=:üni_baslik,
            üni_aciklama=:üni_aciklama,
            üni_resim=:üni_resim
       
    
        
            ");
            if($update) {
                Header("Location:ünihazirlik.php?durum=okey");
                }
                else{
                    Header("Location:ünihazirlik.php?durum=no");
                }
                
            }
        
        
        }
    
    
    
    
    
    
    
    
    




        
if(isset($_POST['onkayitsil'])) {
    
    $sil=$baglanti->prepare("DELETE FROM onkayit where id=:id");
    $sil->execute(array(


'id'=> $_POST['id']

    
    ));
    if($sil){
        Header("Location:onkayit.php?durum=okey");
    }else{
        Header("Location:onkayit.php?durum=no");

    }
}


if(isset($_POST['aciklamakaydet'])){
    //echo htmlspecialchars($_POST['aciklamlar']);//güvenlik açığı olmasın diye xss
$aciklamakaydet=$baglanti->prepare("UPDATE aciklamalar SET 
ogr_aciklama=:ogr_aciklama



");
$update=$aciklamakaydet->execute(array(

    'ogr_aciklama'=>($_POST['ogr_aciklama'])
    

   
));

if($update) {
Header("Location:onkayit.php?durum=okey");
}
else{
    Header("Location:onkayit.php?durum=no");
}


}


if(isset($_POST['iletisimaciklamakaydet'])){
    //echo htmlspecialchars($_POST['aciklamlar']);//güvenlik açığı olmasın diye xss
$iletisimaciklamakaydet=$baglanti->prepare("UPDATE aciklamalariletisim SET 
iletisim_baslik=:iletisim_baslik,
iletisim_aciklama=:iletisim_aciklama,
iletisim_adres_baslik=:iletisim_adres_baslik,
iletisim_adres=:iletisim_adres,
iletisim_hatti=:iletisim_hatti,
iletisim_hatti_ilk=:iletisim_hatti_ilk



");
$update=$iletisimaciklamakaydet->execute(array(
    'iletisim_baslik'=>($_POST['iletisim_baslik']),
    'iletisim_aciklama'=>($_POST['iletisim_aciklama']),
    'iletisim_adres_baslik'=>($_POST['iletisim_adres_baslik']),
    'iletisim_adres'=>($_POST['iletisim_adres']),
    'iletisim_hatti'=>($_POST['iletisim_hatti']),
    'iletisim_hatti_ilk'=>($_POST['iletisim_hatti_ilk'])
    

   
));

if($update) {
Header("Location:mesaj.php?durum=okey");
}
else{
    Header("Location:mesaj.php?durum=no");
}


}



// öğrenci kayıt------------------------------------------------------------------------------

include("baglanti.php"); // Veritabanı bağlantısı

if (isset($_POST['ogrencikaydet'])) {
    $resim = ""; // varsayılan resim değeri
    $tc = $_POST['tc'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $adres = $_POST['adres'];
    $veli_ad = $_POST['veliad'];
    $veli_tel = $_POST['velitel'];
    $dtarih = $_POST['dtarih'];
    $sinif = $_POST['sinif'];
    $ktarih = $_POST['ktarih'];

    // Eğer resim yüklenmişse, resmi kaydet
    if ($_FILES['resim']['size'] > 0) {
        $resim = $_FILES['resim']['name'];
        $resim_temp = $_FILES['resim']['tmp_name'];
        move_uploaded_file($resim_temp, "resimler/ogrbilgi/$resim");
    }

    // Veritabanına ekleme işlemi
    $ogrenci_ekle = $baglanti->prepare("INSERT INTO ögrencibilgi (ogr_resim, ogr_tc, ogr_ad, ogr_soyad, ogr_tel, ogr_adres, 
    ogr_veli, ogr_veli_tel, ogr_dtarih, ogr_sınıf, ogr_kayittarih) 
    VALUES (:resim, :tc, :ad, :soyad, :telefon, :adres, :veli_ad, :veli_tel, :dtarih, :sinif, :ktarih)");

    $ogrenci_ekle->execute(array(
        'resim' => $resim,
        'tc' => $tc,
        'ad' => $ad,
        'soyad' => $soyad,
        'telefon' => $telefon,
        'adres' => $adres,
        'veli_ad' => $veli_ad,
        'veli_tel' => $veli_tel,
        'dtarih' => $dtarih,
        'sinif' => $sinif,
        'ktarih' => $ktarih
    ));

    if ($ogrenci_ekle) {
        echo "Öğrenci kaydı başarıyla eklendi.";
        Header("Location:ogrencibilgi.php");
    } else {
        echo "Ekleme sırasında bir hata oluştu.";
    }
}



// öğrenci düzenle------------------------------------------------------------------------------

include("baglanti.php"); // Veritabanı bağlantısı

if(isset($_POST['ogrencidüzenle'])) {

    $id = $_POST['id'];
    $eskiresim = $_POST['eskiresim'];
    $tc = $_POST['tc'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $adres = $_POST['adres'];
    $veliad = $_POST['veliad'];
    $velitel = $_POST['velitel'];
    $dtarih = $_POST['dtarih'];
    $sinif = $_POST['sinif'];
    $ktarih = $_POST['ktarih'];

    // Eğer yeni bir resim yüklenmişse, eski resmi sil
    if ($_FILES['resim']['size'] > 0) {
        unlink("resimler/ogrenci/$eskiresim");
        $resim = $_FILES['resim']['name'];
        $resim_temp = $_FILES['resim']['tmp_name'];
        move_uploaded_file($resim_temp, "resimler/ogrbilgi/$resim");
    } else {
        $resim = $eskiresim;
    }

    // Veritabanında güncelleme işlemi
    $ogrenciguncelle = $baglanti->prepare("UPDATE ögrencibilgi SET
        ogr_resim = :resim,
        ogr_tc =:tc,
        ogr_ad =:ad,
        ogr_soyad =:soyad,
        ogr_tel =:telefon,
        ogr_adres =:adres,
        ogr_veli =:veliad,
        ogr_veli_tel =:velitel,
        ogr_dtarih =:dtarih,
        ogr_sınıf =:sinif,
        ogr_kayittarih =:ktarih
        WHERE id =:id");

    $ogrenciguncelle->execute(array(
        'resim' => $resim,
        'tc' => $tc,
        'ad' => $ad,
        'soyad' => $soyad,
        'telefon' => $telefon,
        'adres' => $adres,
        'veliad' => $veliad,
        'velitel' => $velitel,
        'dtarih' => $dtarih,
        'sinif' => $sinif,
        'ktarih' => $ktarih,
        'id' => $id
    ));

    if($ogrenciguncelle) {
        echo "Öğrenci bilgileri güncellendi.";
 Header("Location:ogrencibilgi.php");
    } else {
        echo "Güncelleme sırasında bir hata oluştu.";
    }
}





// öğrenci sil------------------------------------------------------------------------------

if(isset($_POST['ogrencisil'])) {
    
    $sil=$baglanti->prepare("DELETE FROM ögrencibilgi where id=:id");
    $sil->execute(array(


'id'=> $_POST['id']

    
    ));
    if($sil){
        Header("Location:ogrencibilgi.php");
    }else{
        Header("Location:ogrencibilgi.php");

    }
}



error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['girisyap'])) {
    $email = htmlspecialchars($_POST['email']);
    $sifre = htmlspecialchars($_POST['sifre']);
    $md5 = md5($sifre);

    $yoneticisor = $baglanti->prepare("SELECT * FROM yöneticibilgi WHERE yonetici_mail=:yonetici_mail AND yonetici_sifre=:yonetici_sifre");
    $yoneticisor->execute(array(
        'yonetici_mail' => $email,
        'yonetici_sifre' => $md5
    ));

    $var = $yoneticisor->rowCount();

    if ($var == "0") {
        header("Location:giris.php?durum=hata");
    } else {
        $_SESSION['giris'] = $email;
        header("Location:slider.php");
    }
}
//yönetici düzenle------------------------------------------------------------------------------



include("baglanti.php"); // Veritabanı bağlantısı

if(isset($_POST['yoneticidüzenle'])) {

    $id = $_POST['id'];
    $eskiresim = $_POST['eskiresim'];
    $tc = $_POST['tc'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $mail = $_POST['mail'];
    $md5= $_POST['sifre'];



    // Eğer yeni bir resim yüklenmişse, eski resmi sil
    if ($_FILES['resim']['size'] > 0) {
        unlink("resimler/yonetici/$eskiresim");
        $resim = $_FILES['resim']['name'];
        $resim_temp = $_FILES['resim']['tmp_name'];
        move_uploaded_file($resim_temp, "resimler/yonetici/$resim");
    } else {
        $resim = $eskiresim;
    }

    // Veritabanında güncelleme işlemi
    $yoneticiguncelle = $baglanti->prepare("UPDATE yöneticibilgi SET
       yonetici_resim = :resim,
       yonetici_tc =:tc,
       yonetici_ad =:ad,
       yonetici_soyad =:soyad,
       yonetici_tel =:telefon,
       yonetici_mail =:mail,
       yonetici_sifre=:sifre
 
        WHERE id =:id");

    $yoneticiguncelle->execute(array(
        'resim' => $resim,
        'tc' => $tc,
        'ad' => $ad,
        'soyad' => $soyad,
        'telefon' => $telefon,
        'mail' => $mail,
        'sifre'=>$md5,
        'id' => $id
    ));

    if($yoneticiguncelle) {
        echo "Öğrenci bilgileri güncellendi.";
 Header("Location:yöneticibilgi.php");
    } else {
        echo "Güncelleme sırasında bir hata oluştu.";
    }
}



// yönetici kayıt------------------------------------------------------------------------------

include("baglanti.php"); // Veritabanı bağlantısı

if (isset($_POST['yoneticikaydet'])) {
    $resim = ""; // varsayılan resim değeri
    $tc = $_POST['tc'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $mail = $_POST['mail'];
    $md5= $_POST['sifre'];


    // Eğer resim yüklenmişse, resmi kaydet
    if ($_FILES['resim']['size'] > 0) {
        $resim = $_FILES['resim']['name'];
        $resim_temp = $_FILES['resim']['tmp_name'];
        move_uploaded_file($resim_temp, "resimler/yonetici/$resim");
    }

    // Veritabanına ekleme işlemi
    $ogrenci_ekle = $baglanti->prepare("INSERT INTO yöneticibilgi (yonetici_resim, yonetici_tc, yonetici_ad, yonetici_soyad, yonetici_tel, yonetici_mail,yonetici_sifre) 
    VALUES (:resim, :tc, :ad, :soyad, :telefon, :mail , :sifre)");

    $ogrenci_ekle->execute(array(
        'resim' => $resim,
        'tc' => $tc,
        'ad' => $ad,
        'soyad' => $soyad,
        'telefon' => $telefon,
        'mail' => $mail,
        'sifre' =>$md5
        ));

    if ($ogrenci_ekle) {
        echo "Öğrenci kaydı başarıyla eklendi.";
        Header("Location:yöneticibilgi.php");
    } else {
        echo "Ekleme sırasında bir hata oluştu.";
    }
}

    
// yönetici sil------------------------------------------------------------------------------

if(isset($_POST['yoneticisil'])) {
    
    $sil=$baglanti->prepare("DELETE FROM yöneticibilgi where id=:id");
    $sil->execute(array(


'id'=> $_POST['id']

    
    ));
    if($sil){
        Header("Location:yöneticibilgi.php");
    }else{
        Header("Location:yöneticibilgi.php");

    }
}

    
    
    





























































































?>


