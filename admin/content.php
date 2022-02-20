<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";

// Bagian User
if ($_GET[module]=='home'){
  include "sidebar.php";
  include "modul/mod_home/home.php";
}elseif ($_GET[module]=='data'){
  include "sidebar.php";
  include "modul/mod_data/data.php";
}
elseif ($_GET[module]=='soal'){
  include "sidebar.php";
  include "modul/mod_soal/soal.php";
}
elseif ($_GET[module]=='profil'){
  include "sidebar.php";	
  include "modul/mod_profil/profil.php";
}
elseif ($_GET[module]=='komentar'){
  include "sidebar.php";	
  include "modul/mod_komentar/komentar.php";
}
elseif ($_GET[module]=='hasilujian'){
  include "sidebar.php";	
  include "modul/mod_hasilujian/hasilujian.php";
}
elseif ($_GET[module]=='pengaturanujian'){
  include "sidebar.php";	
  include "modul/mod_pengaturanujian/pengaturanujian.php";
}
elseif  ($_GET[module]=='profil') {
	include "sidebar.php";
	include "modul/mod_profil/profil.php";
}
elseif ($_GET[module]=='users') {
	include "sidebar.php";
	include "modul/mod_users/users.php";
}
elseif ($_GET[module]=='data') {
	include "sidebar.php";
	include "modul/mod_data/data.php";
}elseif ($_GET[module]=='kategori') {
	include "sidebar.php";
	include "modul/mod_kategori/kategori.php";
}elseif ($_GET[module]=='subkategori') {
	include "sidebar.php";
	include "modul/mod_subkategori/subkategori.php";
}
// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
