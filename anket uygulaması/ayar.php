<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
$user="root";$sifre="";
$vtadi="uygulamalar_anket";
try{$dbh=new PDO("mysql:host=localhost;dbname=$vtadi",$user,$sifre);
	}
	catch(PDOException $e){
		echo "<br/>Baglantı Hatası:".$e->getMessage();
		$dbh=null;
		die();
		}
?>
</body>
</html>