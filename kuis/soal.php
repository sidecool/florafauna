<?php
require("database/db_connect.php");
require("libs/fetch_data.php");

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
		<div class="container">
			<div class="row">
			<div class="col col-lg-12">
								
				<?php
				if (empty($_SESSION["username"])){
					echo "cek 1";exit(); 
					echo "<link href='style.css' rel='stylesheet' type='text/css'>
					<center>Untuk mengakses modul, Anda harus login <br>";
					echo "<a href=index.php><b>Masuk</b></a></center>";
				}
				else{
				//Lakukan Pengecekan Apakah Sudah Pernah Mengerjakan Soal atau belum
						$cek=mysqli_num_rows(mysqli_query($con,"SELECT id_user FROM tbl_nilai WHERE id_user='$_SESSION[iduser]'"));
						
						// print_r("cek ".$cek);exit(); 
						if ($cek > 0) {
								$tampil = mysqli_query($con,"SELECT * FROM tbl_nilai WHERE username='$_SESSION[username]' DESC limit 1");
									$t=mysqli_fetch_array($tampil);
									$username=  ucwords($_SESSION['username']);;

								echo "<h3 style='border:0';><u>$username</u> Sudah Mengerjakan Tes</h3>";
								echo "<br><br><br><div align='center'>
									<table><tr><th colspan=3>Hasil Tes Anda</th></tr>
									<tr><td>Jumlah Jawaban Benar</td><td> : $t[benar]</td>";
									$qry=mysqli_query($con,"SELECT nilai_min FROM tbl_pengaturan_ujian");
									$hasil=mysqli_fetch_array($qry);
									$cek= $hasil['nilai_min'];
									if ($t[score] >= $cek) {
										echo "<td rowspan='4'><h1>Lulus</h1></td></tr>";
									}else {
										echo "<td rowspan='4'><h1>Gagal</h1></td></tr>";
									}
								echo "
									<tr><td>Jumlah Jawaban Salah</td><td> : $t[salah]</td></tr>
									<tr><td>Jumlah Jawaban Kosong</td><td>: $t[kosong]</td></tr>
									<tr><td><b>Nilai anda            </td><td>: $t[score]</b></td></tr></table></div>";

						}else {
					echo '<table><tr><th>Waktu Anda</th></tr>
						 <tr><td align=center><span style="font-size:18px"><span id="menit"></span>:<span id="detik"></span></span> </td></tr></table>';
							echo "<div style='width:100%;  overflow:scroll;height:700px;'>";
							echo '<table width="100%" border="0">';

						$hasil=mysqli_query($con,"select * from tbl_soal WHERE aktif='Y' ORDER BY RAND()");
						$jumlah=mysqli_num_rows($hasil);
						$urut=0;
						while($row =mysqli_fetch_array($hasil))
						{
							$id=$row["id_soal"];
							$pertanyaan=$row["soal"];
							$pilihan_a=$row["a"];
							$pilihan_b=$row["b"];
							$pilihan_c=$row["c"];
							$pilihan_d=$row["d"]; 
							
							?>
							<form name="form1" method="post" action="jawaban.php">
							<input type="hidden" name="id[]" value=<?php echo $id; ?>>
							<input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
							<tr>
								<td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
								<td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
							</tr>
							<?php
								if (!empty($row["gambar"])) {
									echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
								}
							?>
							<tr>
								<td height="21"><font color="#000000">&nbsp;</font></td>
							<td><font color="#000000">
							A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
							<?php echo "$pilihan_a";?></font> </td>
							</tr>
							<tr>
								<td><font color="#000000">&nbsp;</font></td>
							<td><font color="#000000">
							B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
							<?php echo "$pilihan_b";?></font> </td>
							</tr>
							<tr>
								<td><font color="#000000">&nbsp;</font></td>
							<td><font color="#000000">
							C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
							<?php echo "$pilihan_c";?></font> </td>
							</tr>
							<tr>
								<td><font color="#000000">&nbsp;</font></td>
							<td><font color="#000000">
							D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
							<?php echo "$pilihan_d";?></font> </td>
							</tr>
							
						<?php
						}
						?>
							<tr><td> </td></tr>
							<!-- <tr>
								<td>&nbsp;</td>
								<td><input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
							</tr> -->
							
							</table>
							<div class = "form-group" style='text-align:center;'>

							<input type="submit" name="submit" class="btn btn-primary" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">
						    <input type="button" name="button-exit" class="btn btn-danger pull-right" value="KELUAR" onclick="keluar()">
						</div>
				</form>
						</p>
				</div>
					<?php
						$qry=mysqli_query($con,"SELECT * FROM tbl_pengaturan_ujian");
						$r=mysqli_fetch_array($qry);
					?>
				<script> 
					<!-- 
					// 
					var detik=00;
					var menit=<?php echo $r['waktu']; ?>;
					
					//document.counter.d2.value='30' 
					
					function display()
					{ 
						if (menit==0&&detik==0) {
							alert('Waktu habis, klik OK untuk melihat hasil ujian anda.');
							location.href="jawaban.php";
						}
					
					if (detik<=0){ 
						detik=60;
						menit-=1;
					} 
					if (menit<=-1){ 
						detik=0;
						menit+=1;
					} 
					else 
						detik-=1 
						
						detik="" + detik
						menit="" + menit
						var pad = "00"
						document.getElementById("menit").innerHTML=pad.substring(0, pad.length - menit.length) + menit;
						document.getElementById("detik").innerHTML=pad.substring(0, pad.length - detik.length) + detik;
						//document.counter.d2.value=menit;
						//document.counter.d3.value=detik;
						setTimeout("display()",1000) 
					} 
					display() 
					--> 
					</script><?php } } ?>
					
					<!-- -->
					<script>
					function keluar() { 
						var doc; 
						var result = confirm("Anda akan kembali ke halaman utama?"); 
						if (result == true) { 
							location.href="libs/logout.php";
						} else { 
							doc = "Batal"; 
						} 
						 
					} 
					</script>

			</div>
			</div>
		</div>

</body>

</html>			
               
