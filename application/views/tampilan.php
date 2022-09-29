<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SendMail</title>
</head>
<body>

<h2>Contoh Pengiriman menggunakan SMTP Gmail</h2>
<form action="<?php echo base_url(); ?>welcome/kirim_email" method="post">
	<table>
		<tr>
			<td>Dari</td>
			<td>:</td>
			<td><input type="text" name="dari"></td>
		</tr>
		<tr>
			<td>Kirim Ke</td>
			<td>:</td>
			<td><input type="text" name="ke"></td>
		</tr>
		<tr>
			<td>Subject</td>
			<td>:</td>
			<td><input type="text" name="subjek"></td>
		</tr>
		<tr>
			<td>Pesan</td>
			<td>:</td>
			<td><textarea name="pesan"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Kirim"></td>
		</tr>
	</table>
</form>

</body>
</html>