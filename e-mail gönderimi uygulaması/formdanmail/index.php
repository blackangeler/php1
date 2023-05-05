<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form name="emailformu" action="sonuc.php" method="post">
	
		<table width="200" border="1">
  <tbody>
    <tr>
      <td>Adınız Soyadınız</td>
      <td>:</td>
      <td><input type="text" name="isimsoyisim"></td>
    </tr>
	  <tr>
      <td>E-mailiniz</td>
      <td>:</td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td>Telefonunuz</td>
      <td>:</td>
      <td><input type="text" name="telefon"></td>
    </tr>
    <tr>
      <td>Adresiniz</td>
      <td>:</td>
      <td><input type="text" name="adres"></td>
    </tr>
    <tr>
      <td>İşlem Türü</td>
      <td>:</td>
      <td><select name="islemturu">
		  <option value="Teknik Servis">Teknik Servis</option>
		  <option value="Muhasebe">Muhasebe</option>
		  <option value="Teslimat">Teslimat</option>
		  </select></td>
    </tr>
    <tr>
      <td>Mesaj</td>
      <td>:</td>
      <td><textarea name="mesaj" cols="50" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" value="Formu gönder"></td>
    </tr>
  
  </tbody>
</table>

	</form>
</body>
</html>