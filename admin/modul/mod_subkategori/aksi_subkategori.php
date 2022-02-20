<?php
session_start();
include "../../../config/koneksi.php";
include "../../../config/fungsi_thumb.php";

$module		=mysqli_real_escape_string($connect,$_GET['module']);
$act		=mysqli_real_escape_string($connect,$_GET['act']);

// Update kategori
if ($module=='subkategori' AND $act=='update'){
    mysqli_query($connect,"UPDATE tbl_subkategori SET nama_subkategori  = '$_POST[nama]',
								 kategori_id = '$_POST[kategori]'
								  WHERE  id     = '$_POST[id]'");
	
	
  header('location:../../media.php?module='.$module);
}
elseif ($module=='subkategori' AND $act=='hapus') {
	mysqli_query($connect,"DELETE FROM tbl_subkategori WHERE id='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}
elseif ($module=='subkategori' AND $act=='input'){
  
	  mysqli_query($connect,"INSERT INTO tbl_subkategori(nama_subkategori,kategori_id) 
	  VALUES('$_POST[nama]','$_POST[kategori]')");
  
  header('location:../../media.php?module='.$module);
}


?>

