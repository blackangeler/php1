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
session_start();
$_SESSION["hak"]=0;
?>
<div id="ana">
<div class="tabloortala">
<table height="180"  border="0" align="center" >
  <tr>
    <td >Sitemize Hoş Geldiniz Bilgi Yarışmasına Başlamak İçin Başla Butonuna Basınız</td>
  </tr>
  <tr>
    <td height="49" ><form id="form1" name="form1" method="post" action="soru.php">
      <input type="submit" name="button" id="button" value="Yarışmaya Başla" />
    </form>
   
    </td>
  </tr>
  <tr>
  <td >
   <form id="form2" name="form2" method="post" action="uyegiris.php">
      <input type="submit" name="button" id="button" value="Admin Girişi" />
    </form>
  </td>
  </tr>
	<tr><td><form id="form3" name="form3" method="post" action="../index.html"><input type="submit" id="button" value="Bireysel Web Siteme Dönmek İçin Tıklayınız" /></form></td></tr>
</table>
</div>
</div>

</div>
	<div id="bws"></div>
    
</body>
</html>