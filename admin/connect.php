<?php
$host='localhost';
$user='root';
$pass='';
$db='perpust';
mysql_connect($host,$user,$pass)
	or die ("Gagal terkoneksi ke server");
mysql_select_db($db)
	or die ("Gagal mengakses databse");
?>