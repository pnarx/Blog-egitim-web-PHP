<?php
session_start();
require_once 'baglanti.php';


$aciklamalarsor=$baglanti->prepare("SELECT* FROM aciklamalar ");
$aciklamalarsor->execute(array());
$aciklamalarcek=$aciklamalarsor->fetch(PDO::FETCH_ASSOC);

$iletisimaciklamasor=$baglanti->prepare("SELECT* FROM aciklamalariletisim ");
$iletisimaciklamasor->execute(array());
$iletisimaciklamacek=$iletisimaciklamasor->fetch(PDO::FETCH_ASSOC);


$yoneticisor=$baglanti->prepare("SELECT* FROM yöneticibilgi where yonetici_mail=:yonetici_mail 
");

$yoneticisor->execute(array(
'yonetici_mail'=>$_SESSION['giris']

));
$var=$yoneticisor->rowCount();

if($var=="0"){
  Header("Location:giris.php?durum=hata");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eğitim Akademisi | Yönetici Sayfası</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Anasayfa</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
     
    </form>

    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    </ul>

   <b style="color: green;"> <?php echo $_SESSION['giris']; ?> </b>
  </nav>
  <!-- /.navbar -->