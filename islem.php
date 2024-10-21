<?php
require_once 'admin/baglanti.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['kaydet'])) {
    $ogr_adi = htmlspecialchars($_POST['ad']);
    $ogr_soyadi = $_POST['soyad'];
    $ogr_adres = $_POST['adres'];
    $ogr_mail = htmlspecialchars($_POST['mail']);
    $ogr_telefon = htmlspecialchars($_POST['telefon']);
    $ogr_sinif = $_POST['sinif'];
    $ogr_mesaj = $_POST['mesaj'];

    // Herhangi bir metin alanı boşsa işlem başarısız uyarısı ver
    if (empty($ogr_adi) || empty($ogr_soyadi) || empty($ogr_adres) || empty($ogr_mail) || empty($ogr_telefon) || empty($ogr_sinif) || empty($ogr_mesaj)) {
        Header("Location: önkayit.php?durum=no");
    } else {
        $kaydet = $baglanti->prepare("INSERT into onkayit
            (ogr_adi, ogr_soyadi, ogr_adres, ogr_mail, ogr_telefon, ogr_sinif, ogr_mesaj) 
            VALUES (:ogr_adi, :ogr_soyadi, :ogr_adres, :ogr_mail, :ogr_telefon, :ogr_sinif, :ogr_mesaj )
        ");

        $insert = $kaydet->execute(array(
            'ogr_adi' => $ogr_adi,
            'ogr_soyadi' => $ogr_soyadi,
            'ogr_adres' => $ogr_adres,
            'ogr_mail' => $ogr_mail,
            'ogr_telefon' => $ogr_telefon,
            'ogr_sinif' => $ogr_sinif,
            'ogr_mesaj' => $ogr_mesaj
        ));

        if ($insert) {
            Header("Location: önkayit.php?durum=okey");
        } else {
            Header("Location: önkayit.php?durum=no");
        }
    }
}





error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['iletisimkaydet'])) {
    $iletisim_ad = htmlspecialchars($_POST['ad']);
    $iletisim_soyad = $_POST['soyad'];
    $iletisim_mail = htmlspecialchars($_POST['mail']);
    $iletisim_telefon = htmlspecialchars($_POST['telefon']);
    $iletisim_mesaj = $_POST['mesaj'];

    // Herhangi bir metin alanı boşsa işlem başarısız uyarısı ver
    if (empty($iletisim_ad) || empty($iletisim_soyad) || empty($iletisim_mail) || empty($iletisim_telefon)  || empty($iletisim_mesaj)) {
        Header("Location: iletisim.php?durum=no");
    } else {
        $kaydet = $baglanti->prepare("INSERT into iletisim
            (iletisim_ad, iletisim_soyad, iletisim_mail, iletisim_telefon,iletisim_mesaj) 
            VALUES (:iletisim_ad, :iletisim_soyad, :iletisim_mail, :iletisim_telefon, :iletisim_mesaj )
        ");

        $insert = $kaydet->execute(array(
            'iletisim_ad' => $iletisim_ad,
            'iletisim_soyad' => $iletisim_soyad,
            'iletisim_mail' => $iletisim_mail,
            'iletisim_telefon' => $iletisim_telefon,
            'iletisim_mesaj' => $iletisim_mesaj
        ));

        if ($insert) {
            Header("Location: iletisim.php?durum=okey");
        } else {
            Header("Location: iletisim.php?durum=no");
        }
    }
}











?>
