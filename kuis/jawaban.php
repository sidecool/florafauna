<?php
require("database/db_connect.php");
require("libs/fetch_data.php");

include "../config/koneksi.php";
include "../config/library.php";

session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>
<body>
	<?php include("header.php");?>
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				
				<div class="col col-lg-12">
			<?php

			if(isset($_POST['submit']) && isset($_POST["pilihan"])){
					$pilihan=$_POST["pilihan"];
					$id_soal=$_POST["id"];
					$jumlah=$_POST['jumlah'];
					
					$score=0;
					$benar=0;
					$salah=0;
					$kosong=0;
					
					for ($i=0;$i<$jumlah;$i++){
						//id nomor soal
						$nomor=$id_soal[$i];
						
						//jika user tidak memilih jawaban
						if (empty($pilihan[$nomor])){
							$kosong++;
						}else{
							//jawaban dari user
							$jawaban=$pilihan[$nomor];
							
							//cocokan jawaban user dengan jawaban di database
							$query=mysqli_query($connect,"select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
							
							$cek=mysqli_num_rows($query);
							
							if($cek){
								//jika jawaban cocok (benar)
								$benar++;
							}else{
								//jika salah
								$salah++;
							}
							
						} 
						/*RUMUS
						Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
						hasil= 100 / jumlah soal * jawaban yang benar
						*/
						
						$result=mysqli_query($connect,"select * from tbl_soal WHERE aktif='Y'");
						$jumlah_soal=mysqli_num_rows($result);
						$score = 100/$jumlah_soal*$benar;
						$hasil = number_format($score,1);
					}
					
					//Lakukan Pengecekan  Data  dalam Database
			$cek=mysqli_num_rows(mysqli_query($connect,"SELECT id_user FROM tbl_nilai WHERE id_user='$_SESSION[iduser]'"));
				if ($cek < 1) {
				//Pemberian kondisi lulus/ tidak lulus
				$qry2=mysqli_query($connect,"SELECT nilai_min FROM tbl_pengaturan_ujian");
				$q2=mysqli_fetch_array($qry2);
				$ceknilai= $q2['nilai_min'];
				if ($hasil >= $ceknilai) {
				//Lakukan Penyimpanan Kedalam Database
						$iduser= ucwords($_SESSION['iduser']);
						$username= $_SESSION['username'];
						$res = mysqli_query($connect,"INSERT INTO tbl_nilai 
						(benar,salah,kosong,score,tanggal,keterangan,username) 
						Values ('$benar','$salah','$kosong','$hasil','$tgl_sekarang','Lulus', '$username')");
						// print($res." ".$benar." ".$username);
						// var_dump($res.$benar);
						// exit();
					}else {
				//Lakukan Penyimpanan Kedalam Database
						$iduser= ucwords($_SESSION['iduser']);
						$res = mysqli_query($connect,"INSERT INTO tbl_nilai (id_user,benar,salah,kosong,score,tanggal,keterangan) Values ('$iduser','$benar','$salah','$kosong','$hasil','$tgl_sekarang','Tidak Lulus')");

						// print($res);
						// exit();
				}
			}
				
				//Menampilkan Hasil Ujian Kompetensi
				$username=  ucwords($_SESSION['username']);
				echo "<div align='center'>
				<h3 style='border:0';>Selesai, <u>$username</u></h3></div>";
				echo "<br><br><br><div align='center'>
				<table><tr><th colspan=3>Hasil Tes Anda</th></tr>
				<tr><td><b>Nilai anda            </td><td>: $hasil</b></td>";
				$qry=mysqli_query($connect,"SELECT nilai_min FROM tbl_pengaturan_ujian");
				$q=mysqli_fetch_array($qry);
				$cek= $q['nilai_min'];
				if ($hasil >= $cek) {
					echo "<td rowspan='4'><h1>Lulus</h1></td></tr>";
				}else {
					echo "<td rowspan='4'><h1>Tidak Lulus</h1></td></tr>";
				}
			echo "
				<tr><td>Jumlah Jawaban Benar</td><td> : $benar </td></tr>
				<tr><td>Jumlah Jawaban Salah</td><td> : $salah</td></tr>
				<tr><td>Jumlah Jawaban Kosong</td><td>: $kosong</td></tr>
				</table></div>";
				?>
				</div>
					
			

			</div>
			<br><br><br>

			<div class = "row justify-content-md-center" style='text-align:center;'>

					<!--<div class="col col-lg-2">-->
					<!--	<form method="POST" action="soal.php">-->
					<!--			<div style='text-align:center;'>-->
					<!--				<input type="submit" name="button-ok" class="btn btn-primary" value="Ulangi" >-->
					<!--			</div>-->
					<!--		</form>-->
					<!--	</div>-->
					<div class="col col-lg-4">
						<form method="POST" action="logout.php">
						<div style='text-align:center;'>
						<input type="submit" name="button-exit" class="btn btn-danger" value="Beranda">
						</div>
						</form>
					</div>
			<?php
				}else{?>
				 <script language="javascript">
				 
  var r = confirm("Maaf Belum Inpu Jawaban!\nKembali ke halaman selanjutny?");
  if (r == true) {
    window.history.back();
  } else {
   window.location="../home/index.php";
  }
	
	</script>   
			<?php	}
			?>	
		</div>
	</section>

</body>

</html>			      
	


                        