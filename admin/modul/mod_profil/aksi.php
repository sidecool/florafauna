<?php
session_start();
include "../../../config/koneksi.php";
include "../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Update profil
if ($module=='profil' AND $act=='update'){

  
   mysqli_query($connect,"UPDATE titles SET 
									   short_description = '$_POST[short]',
									   detailed_description = '$_POST[detailed]',
									   address = '$_POST[address]',
									   phone = '$_POST[phone]',
									   email = '$_POST[email]'
                            WHERE id       = '$_POST[id]'");
                            
  header('location:../../media.php?module='.$module);
}
?>
