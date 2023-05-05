<meta charset="utf-8">
<?php
require_once("ayar.php");
session_start();
$surekriteri		=	60;
$zaman				=	time();
$hesapla			=	$zaman-$surekriteri;
if(isset($_SESSION["kullanici"])){
	//$islemyapinceguncelle	=	@mysql_query("UPDATE uyegiriscikislog SET islemtarihi='$zaman' WHERE kullaniciadi='".$_SESSION["kullanici"]."'");
	$veri_ekle=$dbh->prepare("update uyegiriscikislog set islemtarihi=? where kullaniciadi='".$_SESSION["kullanici"]."'");
		if($veri_ekle->execute(array($zaman)))	{
		$kayitlar3=$veri_ekle->fetch();
		}else {echo "Kayit problemi: ";print_r($veri_ekle->errorinfo());}
}
?>
<table width="350" border="1" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td width="120" align="left" valign="middle" bgcolor="#666666"><font color="#FFFFFF"><b>Kullanıcı Adı</b></font></td>
    <td width="210" align="left" valign="middle" bgcolor="#666666"><font color="#FFFFFF"><b>Durum</b></font></td>
  </tr><?php
	$veri_oku2=$dbh->prepare("select * from uyegiriscikislog ORDER BY kullaniciadi ASC");
		if($veri_oku2->execute(array(1))){
			$kayitlar2=$veri_oku2->fetch();
			$gelenuyesonislemtarihi	=	$kayitlar2["islemtarihi"];
			
	 $veri_oku=$dbh->prepare("select * from uyeler ORDER BY kullaniciadi ASC");
		if($veri_oku->execute(array(1))){
		while($kayitlar=$veri_oku->fetch()){
		
				
	
//$sor = @mysql_query("SELECT * FROM uyeler ORDER BY kullaniciadi ASC");  
	//while($kayitlar=@mysql_fetch_assoc($sor)){
		$gelenid				=	$kayitlar["id"];
		$gelenuyekullaniciadi	=	$kayitlar["kullaniciadi"];
		
  ?><tr>
    <td align="left" valign="middle"><?=$gelenuyekullaniciadi?></td>
    <td align="left" valign="middle"><?php if($hesapla<=$gelenuyesonislemtarihi){
		echo "<font color='#00FF00'><b>Kullanıcı Şuan Sitede</b></font>";
	}else{
		echo "<font color='#FF0000'><b>Kullanıcı Şuan Sitede Değil</b></font>";
	} ?></td>
  </tr><?php
	//}
?> 

<?php
			
			
		} 
		}else print_r($veri_oku->errorInfo());
			?><tr>
    <td colspan="2" align="center" valign="middle"><?php if(empty($_SESSION["kullanici"])){ ?><a href="uyegirisi.php">Üye Girişi Yap</a><?php }else{ ?><a href="cikis.php">Üye Çıkışı Yap</a><?php } ?></td>
  </tr> 
</table> <?php
			
		} else print_r($veri_oku2->errorInfo());


				?>