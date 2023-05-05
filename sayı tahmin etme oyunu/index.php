<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	
	$secilensayi=rand(1,100);
if(empty($_SESSION["sayi"])){$_SESSION["sayi"]=$secilensayi;}
	
	?>
	
	<?php
	if(($_POST) and ($_POST["tahmin"])){
		$gelentahmin=$_POST["tahmin"];
		echo "Tahmininiz : ".$gelentahmin."<br/>";
		if($_SESSION["sayi"]==$gelentahmin){
			echo "<font color='green'>Tebrikler. Sayıyı buldunuz.<br/></font>";
			session_destroy();
			echo "<a href='index.php'> Yeniden oyna.</a>";
		}
		
	else{
			if($_SESSION["sayi"]<$gelentahmin){
				echo "İpucu.. daha küçük bir rakam seçiniz.<br/>";}
			else{echo "İpucu.. daha büyük bir rakam seçiniz.<br/>";}
			
				echo "<font color='red'> sayıyı bilemediniz</font>";
				echo "<a href='index.php'> Yeniden deneyiniz.</a>";
			
		}
	}
	else {
	?>
	<form name="sayitahminformu" action="index.php" method="post">
	Bir Sayı Giriniz: <br/>
	<input type="text" name="tahmin"><br/>
	<input type="submit" value="Tahmin Et">
		
	</form>
	<?php
	}
	?>
</body>
</html>