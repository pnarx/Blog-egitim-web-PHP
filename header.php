<?php require_once 'admin/baglanti.php';


$sitesor=$baglanti->prepare("SELECT* FROM sitebilgisi where id=?");
$sitesor->execute(array(1));
$sitecek=$sitesor->fetch(PDO::FETCH_ASSOC);

$hakkimizdasor=$baglanti->prepare("SELECT* FROM hakkimizda where id=?");
$hakkimizdasor->execute(array(1));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

$slidersor=$baglanti->prepare("SELECT* FROM slider where id=?");
$slidersor->execute(array(1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);

$kadrosor=$baglanti->prepare("SELECT* FROM kadro ");
$kadrosor->execute(array());
$kadrocek=$kadrosor->fetch(PDO::FETCH_ASSOC);


$ünisor=$baglanti->prepare("SELECT* FROM ünihazirlik where id=?");
$ünisor->execute(array(1));
$ünicek=$ünisor->fetch(PDO::FETCH_ASSOC);


$lisesor=$baglanti->prepare("SELECT* FROM lisehazirlik where id=?");
$lisesor->execute(array(1));
$lisecek=$lisesor->fetch(PDO::FETCH_ASSOC);


$onkayitsor=$baglanti->prepare("SELECT* FROM onkayit ");
$onkayitsor->execute(array());


$aciklamalarsor=$baglanti->prepare("SELECT* FROM aciklamalar ");
$aciklamalarsor->execute(array());
$aciklamalarcek=$aciklamalarsor->fetch(PDO::FETCH_ASSOC);

$iletisimaciklamasor=$baglanti->prepare("SELECT* FROM aciklamalariletisim ");
$iletisimaciklamasor->execute(array());
$iletisimaciklamacek=$iletisimaciklamasor->fetch(PDO::FETCH_ASSOC);

$yayinsor=$baglanti->prepare("SELECT* FROM yayinlar ");
$yayinsor->execute(array());
$yayincek=$yayinsor->fetch(PDO::FETCH_ASSOC);


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $sitecek['site_baslik'] ?></title>
   


    <link rel="stylesheet" href="/eğitim web/css/style-starter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<header id="site-header" class="fixed-top" style="background-color: rgb(2, 2, 46);">
    <div class="container ">
        <nav class="navbar navbar-expand-lg ">
            <h1><a class="navbar-brand" href="index.php">
                <span class="w3yellow  text-capitalize"><?php echo $sitecek['site_birinciAd'] ?></span> <span class="text-light"><?php echo $sitecek['site_ikinciAd'] ?></span>
              </a></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                      <a class="nav-link active " aria-current="page" href="index.php">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="#" role="button" data-toggle="dropdown" data-target="#kurumsalDropdown" aria-expanded="false">
                        Kurumsal
                      </a>
                      <div class="dropdown-menu" id="kurumsalDropdown">
                        <a class="dropdown-item "  href="hakkimizda.php">Hakkımızda</a>
                        <a class="dropdown-item" href="yayınlar.php">Yayınlar</a>
                        <a href="kadro.php" class="dropdown-item"> Kadro</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="önkayit.php">Ön Kayıt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.php">İletişim</a>
                      </li>
              
                    <li class="nav-item">
                      <a class="nav-link" href="#" role="button" data-toggle="dropdown" data-target="#kursDropdown" aria-expanded="false">
                        Hazırlık Kurslarımız
                      </a>
                      <div class="dropdown-menu" id="kursDropdown">
                        <a class="dropdown-item" href="lisehzr.php">Lise Sınavlarına Hazırlık</a>
                        <a class="dropdown-item" href="ünihzrlk.php">Üniversite Sınavlarına Hazırlık</a
                      </div>
                    </li>
                    
                  </ul>

                <!---  <a href="admin/giris.php" class="btn btn-style btn-primary mt-4 py-2"> Yönetici Giriş   </a>   --->


              <ul class="header-search me-lg-4">
         
        </ul>
            </div>
          </nav>
    </div>
  </header>
  

<br><br><br>
