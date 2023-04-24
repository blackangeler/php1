<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bilgi Yarışması</title>
</head>

<body>
<?php
session_start();
if($_SESSION["hak"]<9){

if(isset($_POST["radio1"])){
	$cevap=$_POST["radio1"];
	$c=$_POST["cvp"];
	$_SESSION["hak"]++;
if($cevap==$c){header("Location:soru.php");
}
else{header("Location:yanliscevap.php");}
}
}//sesion ifi
else{if(isset($_POST["radio1"])){
	$cevap=$_POST["radio1"];
	$c=$_POST["cvp"];
if($cevap==$c){
	 header("Location:kazandiniz.php");
}
else{header("Location:yanliscevap.php");}
}}
?>
</body>
</html>