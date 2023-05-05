<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include(ayar.php);
	$anketisor=@mysqli_query("SELECT * FROM anketverileri");
	$anketisorkayitlari=@mysqli_fetch_assoc($anketisor);
	$anketsorusu=$anketisor["soru"];
	$anketcevabibir=$anketisor["cevapbir"];
	$anketcevabiiki=$anketisor["cevapiki"];
	$anketcevabiuc=$anketisor["cevapuc"];
	$anketoysayisicevapbir=$anketisor["oysayisicevapbir"];
	$anketoysayisicevapiki=$anketisor["oysayisicevapiki"];
	$anketoysayisicevapuc=$anketisor["oysayisicevapuc"];
	$anketoysayisitoplam=$anketisor["oysayisitoplam"];
		$birincisecenekyuzdesi=($anketoysayisicevapbir/$anketoysayisitoplam)*100;
	$birincisecenekyuzdesinet=substr($birincisecenekyuzdesi,0,5);
	$birincisecenekyuzdesirakam=number_format($birincisecenekyuzdesinet,2,",","");
	
		$ikincisecenekyuzdesi=($anketoysayisicevapiki/$anketoysayisitoplam)*100;
	$ikincisecenekyuzdesinet=substr($ikincisecenekyuzdesi,0,5);
	$ikincisecenekyuzdesirakam=number_format($ikincisecenekyuzdesinet,2,",","");
	
		$ucuncusecenekyuzdesi=($anketoysayisicevapuc/$anketoysayisitoplam)*100;
	$ucuncusecenekyuzdesinet=substr($ucuncusecenekyuzdesi,0,5);
	$ucuncusecenekyuzdesirakam=number_format($ucuncusecenekyuzdesinet,2,",","");
		
	?>
	<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
		<td colspan="3" align="left" valign="middle"><font color="#E81216">Kullanıcı Anketi</font></td>
    </tr>
    <tr>
		<td colspan="2" align="left" valign="middle"><b><?=$anketsorusu?></b></td>
      
    </tr>
    <tr>
      <td width="75" colspan="2" align="left" valign="middle">%<?=$birincisecenekyuzdesirakam?> </td>
		<td width="470" colspan="2" align="left" valign="middle"><?=$anketcevabibir?></td>
    </tr>
    <tr>
      <td width="75" colspan="2" align="left" valign="middle">%<?=$ikincisecenekyuzdesirakam?> </td>
      <td><?=$anketcevabiiki?></td>
    </tr>
    <tr>
      <td width="75" colspan="2" align="left" valign="middle"> %<?=$ucuncusecenekyuzdesirakam?></td>
      <td><?=$anketcevabiuc?></td>
    </tr>
    <tr>
      <td align="right" valign="middle"><a href="index.php">Ana Sayfaya Dön</a></td>
      
    </tr>
    
  </tbody>
</table>
</body>
</html>