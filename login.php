<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Simpus Wali Barokah</title>
	<link rel="icon" type="image/png" href="favicon.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="cek_login.php" method="post">
		<br><br>
		<div class="containerlogin">
			<center>
				<div class="login">
					<h1>LOGIN SIMPUS</h1>
					<strong>PONPES WALI BAROKAH</strong><BR>
					<small>KOTA KEDIRI - JAWA TIMUR</small>
				</div>
			</center>
		</div>

		<div class="containerlogin">
			<center>
				<div class="login">
					<br>
					<table border="0">
						<tr>
							<td height="20"><input class="logininput" type="text" name="username" placeholder="Username"></td>
						</tr>
						<tr>
							<td height="20"></td>
						</tr>
						<tr>
							<td height="20"><input class="logininput" type="password" name="password" placeholder="Password"></td>
						</tr>
					</table>
					<br>
				</div>
			</center>
		</div>

		<div class="containerlogin">
			<center>
				<div class="login">
					<button class="loginbtn" type="submit" name="submit">
						Login
					</button>
				</div>
			</center>
		</div>
	</form>
</body>
</html>