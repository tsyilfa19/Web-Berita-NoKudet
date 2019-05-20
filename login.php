<?php 
include 'koneksi.php';
 
$username = @$_POST['username'];
$password = @$_POST['password'];
 
$query = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);

if($cek>0) {
	echo "<script>alert('Login Berhasil')</script>";
} else {
	echo "<script>alert('Login Gagal, Silahkan kembali ke')</script>";
}

if ($cek) {
	header ('location:list.php');
}

?>