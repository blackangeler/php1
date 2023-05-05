
<?php
$user="root";$sifre="";
$vtadi="uygulamalar_uyelik";
try{$dbh=new PDO("mysql:host=localhost;dbname=$vtadi",$user,$sifre);
	}
	catch(PDOException $e){
		echo "<br/>Baglantı Hatası:".$e->getMessage();
		$dbh=null;
		die();
		}
?>