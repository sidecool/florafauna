<?php
session_start();
include "../../../config/koneksi.php";
include "../../../config/fungsi_thumb.php";

$module=$_GET[module];
$act=$_GET[act];

// Update user
if ($module=='users' AND $act=='update'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  
  if (!empty($lokasi_file)){
    UploadBanner($nama_file);
    move_uploaded_file($lokasi_file,"foto/$nama_file");

    mysqli_query($connect,"UPDATE user SET statusaktif  = '$_POST[statusaktif]',
								 nama = '$_POST[nama]',
								 pangkat = '$_POST[pangkat]',
								 nrp = '$_POST[nrp]',
								 password = '$_POST[password]',
								 jabatan = '$_POST[jabatan]',
								 gambar = '$nama_file'
								  WHERE  id_user     = '$_POST[id]'");
	
	}
	else {
    mysqli_query($connect,"UPDATE user SET statusaktif  = '$_POST[statusaktif]',
								 nama = '$_POST[nama]',
								 pangkat = '$_POST[pangkat]',
								 nrp = '$_POST[nrp]',
								 password = '$_POST[password]',
								 jabatan = '$_POST[jabatan]'
								  WHERE  id_user     = '$_POST[id]'");
	
	}
  header('location:../../media.php?module='.$module);
}
elseif ($module=='users' AND $act=='hapus') {
	mysqli_query($connect,"DELETE FROM tbl_user WHERE id_user='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}
elseif ($module=='users' AND $act=='input'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  
  if (!empty($lokasi_file)){
    UploadBanner($nama_file);
    move_uploaded_file($lokasi_file,"foto/$nama_file");
  
	  mysqli_query($connect,"INSERT INTO user(nama,pangkat,nrp,password,jabatan,gambar,level) 
	  VALUES('$_POST[nama]','$_POST[pangkat]','$_POST[nrp]','$_POST[password]',
	  '$_POST[jabatan]','$nama_file','user')");
  }
  else {
	  mysqli_query($connect,"INSERT INTO user(nama,pangkat,nrp,password,jabatan,level) 
	  VALUES('$_POST[nama]','$_POST[pangkat]','$_POST[nrp]','$_POST[password]',
	  '$_POST[jabatan]','user')");
  }
  header('location:../../media.php?module='.$module);
}
//Pengaktifan dan Pengnonaktifan
elseif ($module=='users' AND $act=='nonaktif'){
$aktif='N';
    mysqli_query($connect,"UPDATE tbl_user SET statusaktif  = '$aktif'  WHERE id_user='$_GET[id]'");
  header('location:../../media.php?module='.$module);
  
 }
elseif ($module=='users' AND $act=='aktif'){
$aktif='Y';
    mysqli_query($connect,"UPDATE tbl_user SET statusaktif  = '$aktif'  WHERE id_user='$_GET[id]'");
  header('location:../../media.php?module='.$module);
  
 }

?>

