<?php
session_start();
require("../database/db_connect.php");

if (!empty($_POST["username"])) {
	$username=$_POST['username'];

	// $qry=mysqli_query($connect,"SELECT * FROM tbl_user WHERE username='$username' AND password='$password' AND statusaktif='Y'");
	$qry=mysqli_query($con,"INSERT INTO tbl_user (username, nama, statusaktif) 
			VALUES ('$username','$username', 'Y')");

	if($qry){
		$lastId =  $con->insert_id;
		
		
		$_SESSION["username"]= $username;
		$_SESSION["iduser"]= $lastId;
		
		header('location:../intro.php');
	}else{
		echo '<script language="javascript">
		alert("Belum sukses insert data");
		window.location="index.php";
		</script>';
		exit();
	}
	
	
}
else {
	echo '<script language="javascript">
	alert("Masukkan username");
	window.location="index.php";
	</script>';
	exit();
}
?>