<?php
session_start();
include("ayar.php");
$gelenkadi		=	$_POST["kadi"];
$gelenksifre	=	$_POST["ksifre"];
	if(($gelenkadi!="") and ($gelenksifre!="")){
	//	$kontrol		=	@mysql_query("SELECT * FROM uyeler WHERE kullaniciadi='$gelenkadi' AND sifresi='$gelenksifre' ORDER BY id ASC LIMIT 1");
		//$kontrolsayisi	=	@mysql_num_rows($kontrol);
		
		$veri_oku=$dbh->prepare("select * from uyeler where kullaniciadi='$gelenkadi'  ORDER BY id ASC LIMIT 1");
		if($veri_oku->execute(array(1))){
	$kullanicisor=$veri_oku->fetch();
			
			
			//if($kontrolsayisi>0){
			
			if($veri_oku->rowCount()){  if($gelenksifre==$kullanicisor["sifre"]){
				$_SESSION["kullanici"]		=	$gelenkadi;
				$zaman						=	time();
				//	$sureguncelle	=	@mysql_query("UPDATE uyegiriscikislog SET islemtarihi='$zaman' WHERE uyekullaniciadi='$gelenkadi'");
				$veri_ekle=$dbh->prepare("UPDATE uyegiriscikislog SET islemtarihi='$zaman' WHERE uyekullaniciadi='$gelenkadi'");
$sureguncelle=$veri_ekle->fetch();
				
						@header("location:index.php");}
			else{
				echo	"Kullanýcý Adý veya Þifresi Hatalý...!<br />Geri Dönmek Ýçin Lütfen <a href='uyegirisi.php'>Buraya Týklayýnýz</a>.";
			}
	}else{
		echo	"Lütfen Boþ Alan Býrakmayýnýz...!<br />Geri Dönmek Ýçin Lütfen <a href='uyegirisi.php'>Buraya Týklayýnýz</a>.";
	}
}
}
?>