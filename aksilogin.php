<?php 
include"koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];

// echo $user.$pass;

$sql=mysqli_query($koneksi, "Select * from admin where username = '$user'
				   and password = '$pass' ");

$cek=mysqli_num_rows($sql);

if ($cek >0){
	session_start();
	$_SESSION['username']=$user;
	$_SESSION['password']=$pass;
	echo "<center>Selamat datang <b>$user</b> Anda berhasil Login <br>";
	echo "Silahkan <a href=logout.php>Logout</a></center>";
}else{
	echo "<center> Username dan Password Anda Salah <br>";
	echo "Silakan <a href=index.php> Login</a> Kembali";
}

 ?>