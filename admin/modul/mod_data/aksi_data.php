<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/library.php";
include "../../../config/fungsi_thumb.php";


$module=$_GET["module"];
$act=$_GET["act"];

// Input data
if ($module=='data' AND $act=='input'){
  
  $lokasi_file      = $_FILES['fupload']['tmp_name'];
//   $lokasi_video     = $_FILES['video']['tmp_name'];
  $lokasi_audio     = $_FILES['audio']['tmp_name'];
  
  $nama_video_unik  = "";
  $nama_audio_unik  = "";
  $nama_file_unik   = "";

  // Apabila ada gambar yang diupload
//   if (!empty($lokasi_video)){
//     $tipe_video      = $_FILES['video']['type'];
//     $nama_video      = $_FILES['video']['name'];
//     $acak             = rand(1,99);
//     $nama_video_unik      = $acak.$nama_video;
  
//     UploadVideo($nama_video_unik);  
//   }

  if (!empty($lokasi_audio)){
    $tipe_audio      = $_FILES['audio']['type'];
    $nama_audio      = $_FILES['audio']['name'];
    $acak           = rand(1,99);
    $nama_audio_unik    = $acak.$nama_audio;

    UploadAudio($nama_audio_unik);
  }

  if (!empty($lokasi_file)){
    
    $tipe_file      = $_FILES['fupload']['type'];
    $nama_file      = $_FILES['fupload']['name'];
    $acak           = rand(1,99);
    $nama_file_unik = $acak.$nama_file;
    
    UploadBanner($nama_file_unik);
  }

  $tanggal = date("Y-m-d");
  $proses = mysqli_query($connect,"INSERT INTO tbl_data(judul, deskripsi,
            gambar, video, audio, kategori_id, subkategori_id, tanggal) 
          VALUES('$_POST[nama]',
          '$_POST[penjelasan]', 
          '$nama_file_unik',
          '$nama_video_unik',
          '$nama_audio_unik',
          '$_POST[kategori]', 
          '$_POST[subkategori]', 
          '$tanggal')");
  if (!$proses) {
      echo("Error description: " . mysqli_error($connect));
  }else{
    header('location:../../media.php?module='.$module);
  }
}
//Hapus Data
elseif ($module=='data' AND $act=='hapus') {
  
  $q=mysqli_query($connect,"SELECT * FROM tbl_data
                WHERE id = '$_GET[id]' LIMIT 1");

  
  $pathGambar;
//   $pathVideo;
  $pathAudio;
    while ($r=mysqli_fetch_array($q)){
        $pathAudio = "../../../../audio/".$r["audio"];
        // $pathVideo = "../../video/".$r["video"];
        $pathGambar = "../../../../foto/".$r["gambar"];

        // unlink($pathAudio);
        // unlink($pathVideo);
        // unlink($pathGambar);

    }
  mysqli_query($connect,"DELETE FROM tbl_data WHERE id='$_GET[id]'");
  
  
  header('location:../../media.php?module='.$module);
}
// Update Data
elseif ($module=='data' AND $act=='update'){
 
  $lokasi_file      = $_FILES['fupload']['tmp_name'];
//   $lokasi_video     = $_FILES['video']['tmp_name'];
  $lokasi_audio     = $_FILES['audio']['tmp_name'];
  
//   $nama_video_unik  = $_POST["videotext"];
  $nama_video_unik = "";
  $nama_audio_unik  = $_POST["audiotext"];
  $nama_file_unik   = $_POST["gambartext"];

  // var_dump($_POST);  var_dump($_FILES); exit();

  // Apabila ada gambar yang diupload
//   if (!empty($lokasi_video)){
//     $tipe_video      = $_FILES['video']['type'];
//     $nama_video      = $_FILES['video']['name'];
//     $acak             = rand(1,99);
//     $nama_video_unik      = $acak.$nama_video;
  
//     UploadVideo($nama_video_unik);  
//   }

  if (!empty($lokasi_audio)){
    $tipe_audio      = $_FILES['audio']['type'];
    $nama_audio      = $_FILES['audio']['name'];
    $acak           = rand(1,99);
    $nama_audio_unik    = $acak.$nama_audio;

    UploadAudio($nama_audio_unik);
  }

  if (!empty($lokasi_file)){
    
    $tipe_file      = $_FILES['fupload']['type'];
    $nama_file      = $_FILES['fupload']['name'];
    $acak           = rand(1,99);
    $nama_file_unik = $acak.$nama_file;
    
    UploadBanner($nama_file_unik);
  }

  //var_dump($nama_file_unik);  var_dump($nama_audio_unik); exit();

  $tanggal = date("Y-m-d");
  $proses = mysqli_query($connect,"UPDATE tbl_data 
            SET judul       = '$_POST[nama]',
                deskripsi   = '$_POST[penjelasan]' ,
                gambar      = '$nama_file_unik',
                video       = '$nama_video_unik',
                audio       = '$nama_audio_unik',
                kategori_id = '$_POST[kategori]',
                subkategori_id = '$_POST[subkategori]'
            WHERE id   = '$_POST[id]'");

  if (!$proses) {
      echo("Error description: " . mysqli_error($con));
  }else{
    header('location:../../media.php?module='.$module);
  }
}
//Pengaktifan dan Pengnonaktifan
elseif ($module=='data' AND $act=='nonaktif'){
    $aktif='N';
    mysqli_query($connect,"UPDATE tbl_data SET aktif  = '$aktif'  WHERE id='$_GET[id]'");
    header('location:../../media.php?module='.$module);
 
  
 }
elseif ($module=='data' AND $act=='aktif'){
$aktif='Y';
    mysqli_query($connect,"UPDATE tbl_data SET aktif  = '$aktif'  WHERE id='$_GET[id]'");
    header('location:../../media.php?module='.$module);
  
 }

}
?>
