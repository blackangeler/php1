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
if(isset($_POST["üyeadi"])){
$üyeadi=$_POST["üyeadi"];
$sifre=$_POST["sifre"];
if($üyeadi=="admin" && $sifre=="12345678910"){
	header("Location:admin.php");
}
else if( empty($üyeadi) || empty($sifre) ){
	 print '<script>alert("Kullanıcı adı veya şifre boş girilemez!");history.back(-1);</script>';
	
	}

else{
 print '<script>alert("Kullanıcı adı veya şifre yanlış!");history.back(-1);</script>';
}

}
?>


 


<div id="uyegiris">
<form action="#" method="post"><table width="409" height="238" border="0" align="center" class="tablorenk">
  <tr>
    <td width="115">Admin adı:</td>
    <td width="211"><label for="textfield"></label>
      <input type="text" name="üyeadi" id="textfield" /></td>
  </tr>
  <tr>
    <td>Şifre:</td>
    <td><label for="textfield2"></label>
      <input type="password" name="sifre" id="textfield2" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="button" id="button" value="Giriş" /></td>
    </tr>
</table>
</form>
</div>
</div>
    
</body>
</html>