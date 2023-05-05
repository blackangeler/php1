<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	$isimsoyisim="Emre Ulupınar";
	$gonderimyapanmail="emrefurkan15@hotmail.com";
	$alicimail="emre_482_482@hotmail.com";
	$konu="deneme maili konusu";
	$mesaj="merhaba bu ilk mail gönderim denemesidir.";
	
	
	$islem="from:$isimsoyisim<$gonderimyapanmail>\n";
	$islem.="Content-Type:text/html;charset=utf-8\n";
	$islem.="MIME-Version: 1.0\n";
	
	
	$mailgonder=@mail($alicimail,$konu,$mesaj,$islem);
		if($mailgonder){
			echo "mailiniz".$alicimail." adresine başarıyla gönderildi.";}
		else{echo "mail gönderim sırasında beklenmeyen bir hata oluştu.";}
	?>
</body>
</html>