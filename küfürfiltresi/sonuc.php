<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		<?php
	$gelenmesaj=$_POST["mesaj"];
	function kufurfiltresi($deger){
		$degisecekicerik=array("salak","Aptal","Geri Zekalı","Mal","Http://www.","Http://",".com");
		$degisenicerik=array("<font color='#FF0000'>***</font>","***","***","***","***","***","***");
		$islem= str_replace($degisecekicerik,$degisenicerik,$deger);
	return $islem;
	}
	
	echo "orjinal:" .$gelenmesaj."<br/>";
	
	$sonuc=kufurfiltresi($gelenmesaj);
	echo "yazının kısıtlanmış hali:".$sonuc;
	
	?>
</body>
</html>