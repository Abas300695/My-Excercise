<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
    include 'admin/connect.php';
    
      $username=$_POST['username'];
      $password=md5($_POST['password']);

      $result=mysql_query("SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
      $cek=mysql_num_rows($result);
      $r=mysql_fetch_array($result);

      if($cek > 0){
        session_start();
        $_SESSION['username']=$r['username'];
        $_SESSION['namalengkap']=$r['nama_lengkap'];
        header('location:index.php?halaman=home');
      }else{
        header('location:login.php');
      }
  ?>
</body>
</html>