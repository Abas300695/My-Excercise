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
	<?php
		session_start();

		if (isset($_SESSION['username'])) {

		}else {
			header('location:login.php');
		}
	?>

	<?php
		include "admin/connect.php";
		include "header.php";
	?>

	<div class="container">
		<?php
			include "menu.php";
		?>
		<div>
			<?php
				$halaman=$_GET['halaman'];
				if ($halaman==''){
					$halaman=='home';
				}

				switch($halaman)
				{
					case ($halaman=='buku'):
						include "admin/buku.php";
					break;
					case ($halaman=='santri'):
						include "admin/santri.php";
					break;
					case ($halaman=='user'):
						include "admin/user.php";
					break;
					case ($halaman=='pinjam'):
						include "admin/pinjam.php";
					break;
					case ($halaman=='kembali'):
						include "admin/kembali.php";
					break;
					case ($halaman=='keluar'):
						include "logout.php";
					break;
					default :
						include "admin/home.php";
				}
			?>
		</div>
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>