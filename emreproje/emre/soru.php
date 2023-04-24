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
<?php session_start();
require_once("baglan.php");
$s=array(0,0,1,1,2,2,3,3,4,4);
$veri_oku=$dbh->prepare("select id,soru,y1,y2,y3,cevap from sorular where zorluk=? order by rand()");
		if($veri_oku->execute(array($s[$_SESSION["hak"]]))){
			$oku=$veri_oku->fetch();
	$cevaps=array($oku["y1"],$oku["y2"],$oku["y3"],$oku["cevap"]);	
	shuffle($cevaps);	
	$dogru=array_search($oku["cevap"],$cevaps);

?>
<div id="soru">
<body>
<form action="cevapkontrol.php" method="post">
<table width="714" height="590" border="0"  align="center" class="tablorenk" >
  <tr>
    <td width="300" class="tablo2" id="soru"><?php echo ($_SESSION["hak"])+1; echo ".soru:"; ?><?= $oku["soru"]; ?>?</td>
  </tr>
  <tr>
    <td><input type="radio" name="radio1" id="radio" value="<?= 0 ?>" />
      <label for="radio"><?= $cevaps[0]; ?></label></td>
  </tr>
  <tr>
    <td><input type="radio" name="radio1" id="radio2" value="<?= 1 ?>" />
      <label for="radio2"><?= $cevaps[1]; ?></label></td>
  </tr>
  <tr>
    <td><input type="radio" name="radio1" id="radio3" value="<?= 2 ?>" />
      <label for="radio3"><?= $cevaps[2]; ?></label></td>
  </tr>
  <tr>
    <td><input type="radio" name="radio1" id="radio4" value="<?= 3 ?>" />
      <label for="radio4"> <?= $cevaps[3]; ?> </label></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Cevap" /></td>
  </tr>
  <input type="hidden" name="cvp" value="<?= $dogru ?>"/>
  
  <?php 
  }
  ?>
</table>
</form>
</div>
</div>
    
</body>
</html>