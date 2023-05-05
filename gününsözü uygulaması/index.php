<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<table width="980" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200" height="150" bgcolor="#FF0000">&nbsp;</td>
    <td width="580" height="150" bgcolor="#FF0000">&nbsp;</td>
    <td width="200" height="150" bgcolor="#FF0000">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table bgcolor="#999999" width="200" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td height="50" align="center" valign="middle"><b><font color="#FFFF00">SON EKLENEN SÖZ</font></b><hr /><font color="#FFFFFF">XxX</font></td>
  </tr>
</table></td>
    <td align="center">Ana Sayfa Ý&ccedil;eriði</td>
    <td><table bgcolor="#999999" width="200" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td height="50" align="center" valign="middle"><b><font color="#FFFF00">GÜNÜN SÖZÜ</font></b><hr /><font color="#FFFFFF">
	<?php
require_once("ayar.php");
$gun		=	date("d");
$saat		=	date("H");

//$sorgu		=	@mysqli_query("SELECT * FROM veriler WHERE gunu='$gun' AND (saataraligialt<=$saat AND saataraligiust>=$saat) ORDER BY gunu ASC");
		$veri_oku=$dbh->prepare("select * from veriler where gunu='$gun' and (saataraligialt<=$saat AND saataraligiust>=$saat) order by gunu desc");
		if($veri_oku->execute(array(1))){
			while($oku=$veri_oku->fetch()){
				$i++;

	$id				=	$i;
	$sozler			=	$oku["sozler"];
	$gunu			=	$oku["gunu"];
	$saataraligialt	=	$oku["saataraligialt"];
	$saataraligiust	=	$oku["saataraligiust"];
	echo $sozler;
			echo $oku["sozler"];}}
?>
	</font></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   
  </tr>
</table>
</body>
</html>