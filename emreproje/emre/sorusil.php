<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bilgi Yarışması</title>
</head>

<body>
<?php 
if(isset($_GET["id"])){
		$id=$_GET["id"];
		require_once("baglan.php");
        $veri_oku=$dbh->prepare("delete from sorular where id=?");
		if($veri_oku->execute(array($id))) 
		{header("Location:admin.php");}
		else print_r($veri_oku->errorInfo());}
		?>
</body>
</html>