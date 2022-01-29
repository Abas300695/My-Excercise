<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="main">
		<div class="middle">
			<center>
				<h2>Selamat Datang</h2><br>
				<hr width="500">
			</center>
			<br><br>
			<center>
				<table border="0">
					<tr valign="top">
						<td width="140" height="35">Petugas</td>
						<td width="10">:</td>
						<td width="350"><?php echo $_SESSION['namalengkap']; ?></td>
					</tr>
					<tr valign="top">
						<td height="35">Username</td>
						<td>:</td>
						<td><?php echo $_SESSION['username']; ?></td>
					</tr>
					<tr valign="top">
						<td height="35"></td>
						<td></td>
						<td></td>
					</tr>
					<tr valign="top">
						<td height="35">Waktu</td>
						<td>:</td>
						<td><?php date_default_timezone_set('Asia/Jakarta'); $date = date("l, d F Y - H:i:s a"); echo "$date"; ?></td>
					</tr>
				</table>
			</center>
		</div>
	</div>
</body>
</html>