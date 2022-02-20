<?php
include "../../../config/koneksi.php";
include "../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Update kategori
if ($module=='kategori' AND $act=='update'){
  	mysqli_query($connect,"UPDATE tbl_kategori SET nama_kategori  = '$_POST[nama]'
								  WHERE  id     = '$_POST[id]'");
	
	header('location:../../media.php?module='.$module);
}
elseif ($module=='kategori' AND $act=='hapus') {
	mysqli_query($connect,"DELETE FROM tbl_kategori WHERE id='$_GET[id]'");
	header('location:../../media.php?module='.$module);
}
elseif ($module=='kategori' AND $act=='input'){
  
	mysqli_query($connect,"INSERT INTO tbl_kategori(nama_kategori) 
	  VALUES('$_POST[nama]')");
  
	header('location:../../media.php?module='.$module);
}


?>

