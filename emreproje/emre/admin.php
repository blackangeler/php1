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
<div id="sag">
<form action="sorukaydet.php" method="post">
<input name="button" type="submit" id="button" value="Yeni Soru Ekle" />
</form>
	<table width="auto" height="132" border="0"  class="tablorenk">
		<tr>
        <th width="auto" class="tablorenkk">Sıra:</th>
		<th width="auto" class="tablorenkk">Soru</th>
		<th width="auto" class="tablorenkk">y1</th>
		<th width="auto" class="tablorenkk">y2</th>
		<th width="auto" class="tablorenkk">y3</th>
        <th width="auto" class="tablorenkk">Cevap</th>
        <th width="auto" class="tablorenkk">Zorluk </th>
		<th colspan="2" class="tablorenkk">İşlemler</th>
		</tr>
<?php 
//tüm makaleler listeleniyor
		require_once("baglan.php");$i=0;
$veri_oku=$dbh->prepare("select id,soru,y1,y2,y3,cevap,zorluk from sorular where ? order by id desc");
		if($veri_oku->execute(array(1))){
			while($oku=$veri_oku->fetch()){
				$i++;
		?>
		<tr class="tablorenkalt">
			<td class="tablorenkk"><?= $i ?></td>
			<td><?= $oku["soru"]; ?></td>
			<td><?= $oku["y1"]; ?></td>
            <td><?= $oku["y2"]; ?></td>
            <td><?= $oku["y3"]; ?></td>
            <td><?= $oku["cevap"]; ?></td>
            <td><?= $oku["zorluk"]; ?></td>
			<td width="89"><form action="soruduzelt.php">
				<input type="hidden" name="id" value="<?= $oku["id"] ?>">
                <button type="submit" id="button">Düzelt</button></form></td>
				<td width="80"><form action="sorusil.php">
				<input type="hidden" name="id" value="<?= $oku["id"] ?>">
                <button type="submit" onClick="return confirm('Silmek istediginize eminmisiniz?')" id="button">Sil</button></form></td>
			</tr>
		<?php 
			}//while kapanıyor
		}else print_r($veri_oku->errorInfo()); //sorgu kontrolsonu,
		
		?>

</table>
	
</div>

</div>
    
</body>
</html>