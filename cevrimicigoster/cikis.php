


<?php
session_start();

require_once("ayar.php");

$veri_ekle=$dbh->prepare("UPDATE uyegiriscikislog SET islemtarihi=0 WHERE kullaniciadi='".$_SESSION["kullanici"]."' ORDER BY id ASC LIMIT 1");
if($veri_ekle->execute(array(1)))	{
$guncelle=$veri_ekle->fetch();
}

session_destroy();
@header("location:index.php");
?>
