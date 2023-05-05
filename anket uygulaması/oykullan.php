<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
	require_once("ayar.php");
	$gelenoysecimi=$_POST["secim"];
	echo $gelenoysecimi;
	if($gelenoysecimi==1)
	{
		$veri_ekle=$dbh->prepare("update anketverileri set oysayisicevapbir=oysayisicevapbir+1,oysayisitoplam=oysayisitoplam+1 where id=?");
		@header("location:oysonuclari.php");
		
		
	}
	
	elseif($gelenoysecimi==2)
	{
		$veri_ekle=$dbh->prepare("update anketverileri set oysayisicevapiki=oysayisicevapiki+1,oysayisitoplam=oysayisitoplam+1 where id=?");
		@header("location:oysonuclari.php");
		
		

	}
	elseif($gelenoysecimi==3){
		$veri_ekle=$dbh->prepare("update anketverileri set oysayisicevapuc=oysayisicevapuc+1,oysayisitoplam=oysayisitoplam+1 where id=?");
		@header("location:oysonuclari.php");
	}
	else{
		@header("location:index.php");
	}
	?>
</body>
</html>