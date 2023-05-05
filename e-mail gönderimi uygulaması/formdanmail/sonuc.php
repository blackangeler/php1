<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$gelenisimsoyisim= @htmlspecialchars(@strip_tags(@addslashes($_POST["isimsoyisim"])));
	$gelenemail=@trim(@htmlspecialchars(@strip_tags(@addslashes($_POST["email"]))));
	$gelentelefon=@trim(@htmlspecialchars(@strip_tags(@addslashes($_POST["telefon"]))));
	$gelenadres=@htmlspecialchars(@strip_tags(@addslashes($_POST["adres"])));
	$gelenislemturu=@htmlspecialchars(@strip_tags(@addslashes($_POST["islemturu"])));
	$gelenmesajduzenle=@htmlspecialchars(@strip_tags(@addslashes($_POST["mesaj"])));
	
		$mesajduzenle="Adı Soyadı : $gelenisimsoyisim<br/> E-mail : $gelenemail <br/> Telefon: $gelentelefon <br/> Adres : $gelenadres <br/> Mesaj :$gelenmesajduzenle";
	
	$alicimail="emre_482_482@hotmail.com";
	
	$islem="from:$gelenisimsoyisim<$gelenemail>\n";
	$islem.="Content-Type:text/html;charset=utf-8\n";
	$islem.="MIME-Version: 1.0\n";
	
	$mailgonder=@mail($alicimail,$gelenislemturu,$mesajduzenle,$islem);
		if($mailgonder){
			echo "Sayın $gelenisimsoyisim mesajınız ilgili departmanımıza ulaşmıştır.";}
		else{echo "Mail gönderim sırasında beklenmeyen bir hata oluştu.";}
	
	?>
</body>
</html>