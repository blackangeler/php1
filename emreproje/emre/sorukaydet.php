<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bilgi Yarışması</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="emre_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="emre_banner_wrapper">
	<div id="emre_banner">
    	<div id="emre_menu">
        	<ul>
                <li><a href="index.php" class="current">Anasayfa</a></li>
            </ul>
        </div>
    
    </div> 	<!-- end of banner -->
</div> <!-- end of banner wrapper -->    

<div id="emre_content_wrapper">
<?php 
if(isset($_POST["soru"])){
	$bay=true;
	if(empty($_POST["soru"])){$hata[]="Soru bilgisi boş Geçilemez";$bay=false;}
	else $soru=$_POST["soru"];
	if(empty($_POST["y1"])){$hata[]="Yanlış cevap1 bilgisi boş Geçilemez";$bay=false;}
	else $y1=$_POST["y1"];
	if(empty($_POST["y2"])){$hata[]="Yanlış cevap2 bilgisi boş Geçilemez";$bay=false;}
	else $y2=$_POST["y2"];
	if(empty($_POST["y3"])){$hata[]="Yanlış cevap3 bilgisi boş Geçilemez";$bay=false;}
	else $y3=$_POST["y3"];
	if(empty($_POST["cevap"])){$hata[]="Cevap bilgisi boş Geçilemez";$bay=false;}
	else $cevap=$_POST["cevap"];
	$radio=$_POST["radio"];
	if($bay){
		require_once("baglan.php");
		$veri_ekle=$dbh->prepare("insert into sorular (soru,y1,y2,y3,cevap,zorluk)
			values(?,?,?,?,?,?)");
		if($veri_ekle->execute(array($soru,$y1,$y2,$y3,$cevap,$radio)))
			echo "Kayıt Başarılı";
		else {echo "Kayıt problemi: ";print_r($veri_ekle->errorinfo());}

	}else
	foreach ($hata as $x) {

		echo "$x.<br/>";
	}
}//isseti kapatır


?>
<form action="#" method="post" enctype="multipart/form-data">
<table class="tablorenkk">
	<tr>
	  <td width="113">Soru:</td><td width="252"><input type="text" name="soru" /></td></tr>
    <tr><td>Yanlış Cevap:</td><td><input type="text" name="y1" /></td></tr>
	<tr><td>Yanlış Cevap:</td><td><input type="text" name="y2" /></td></tr>
    <tr><td>Yanlış Cevap:</td><td><input type="text" name="y3" /></td></tr>
    <tr><td>Doğru cevap:</td><td><input type="text" name="cevap" /></td></tr>
	<tr>
	  <td colspan="2"><input type="radio" name="radio" id="radio" value="0" checked="checked" />
      <label for="radio">çokkolay</label>
      <input type="radio" name="radio" id="radio2" value="1" />
      <label for="radio2">kolay</label>
      <input type="radio" name="radio" id="radio3" value="2" />
      <label for="radio3">orta</label>
      <input type="radio" name="radio" id="radio4" value="3" />
      <label for="radio4">zor</label>
      <input type="radio" name="radio" id="radio5" value="4" />
      <label for="radio5">çokzor</label>
    </td>
    </tr>
	<tr><td colspan="2"><button type="submit" id="button">Kaydet</button></td></tr>
</table>
</form><br />
<form action="admin.php" method="post"><table width="497" class="tablorenkk"><tr><td width="398">
<button type="submit" id="button2">Admin Sayfasına Dön</button>
</td></tr></table></form>
</div>
    
</body>
</html>