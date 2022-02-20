<?php
session_start();
include "../config/koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];


$qry=mysqli_query($connect,"SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ");
$jumpa=mysqli_num_rows($qry);
$r=mysqli_fetch_array($qry);

if ($jumpa > 0) {
	$_SESSION["username"]= $r["username"];
	$_SESSION["idadmin"]= $r["id_admin"];
	header('location:media.php?module=home');
}
else {
	echo '<script language="javascript">
	alert("Userid atau Password Yang anda Masukkan Salah atau Acount Sudah Diblokir");
	window.location="index.php";
	</script>';
	exit();
}
?>