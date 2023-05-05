<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<table width="500" cellpadding="0" cellspacing="0" border="0" align="center">
  <tbody>
    <tr>
      <td align="center"><form name="zaruylamasiformu" action="index.php" method="post">
		  <input type="submit" name="zar" value="ZAR AT">
		  </form></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><?php if(($_POST) and ($_POST["zar"])){
	$zar1=rand(1,6);
	$zar2=rand(1,6);
	echo "<img src='resimler/$zar1.jpg' width='50' height='50'> <img src='resimler/$zar2.jpg' width='50' height='50'> <br/>"; 
	
	if($zar1==1){echo "Bir ";}
	elseif($zar1==2){echo "İki ";}
	elseif($zar1==3){echo "Üç" ;}
	elseif($zar1==4){echo "Dört ";}
	elseif($zar1==5){echo "Beş ";}
	elseif($zar1==6){echo "Altı ";}
	echo "      ";
	if($zar2==1){echo " Bir";}
	elseif($zar2==2){echo " İki";}
	elseif($zar2==3){echo " Üç";}
	elseif($zar2==4){echo " Dört";}
	elseif($zar2==5){echo " Beş";}
	elseif($zar2==6){echo " Altı";}
	
		  
		  	if($zar1==$zar2){
				echo "<br/> Tebrikler çift attınız.";
			}}
		  
		  ?></td>
    </tr>
  </tbody>
</table>

	<?php
	
	?>
</body>
</html>