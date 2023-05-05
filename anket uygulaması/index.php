<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include("ayar.php");
	$anketisor=@mysqli_query("select * from anketverileri");
	$anketisorkayitlari=@mysqli_fetch_assoc($anketisor);
	$anketsorusu=$anketisor["soru"];
	$anketcevabibir=$anketisor["cevapbir"];
	$anketcevabiiki=$anketisor["cevapiki"];
	$anketcevabiuc=$anketisor["cevapuc"];
	?>
	<form name="anketformu" action="oykullan.php" method="post">
		<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
		<td colspan="3" align="left" valign="middle"><font color="#E81216">Kullanıcı Anketi</font></td>
    </tr>
    <tr>
		<td colspan="2" align="left" valign="middle"><b><?=$anketsorusu?></b></td>
      
    </tr>
    <tr>
      <td width="30" colspan="2" align="left" valign="middle"><input type="radio" name="secim" value="1" ></td>
		<td width="470" colspan="2" align="left" valign="middle"><?=$anketcevabibir?></td>
    </tr>
    <tr>
      <td width="30" colspan="2" align="left" valign="middle"><inputy type="radio" name="secim" value="2" ></td>
      <td><?=$anketcevabiiki?></td>
    </tr>
    <tr>
      <td width="30" colspan="2" align="left" valign="middle"><input type="radio" name="secim" value="3"> </td>
      <td><?=$anketcevabiuc?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" align="left" valign="middle"><input type="submit" value="Oy Kullan"></td>
      
    </tr>
    <tr>
      <td colspan="2" align="left" valign="middle"><a href="oysonucları.php">Oy Sonuçları</a></td>
      
    </tr>
  </tbody>
</table>

	
	</form>
</body>
</html>