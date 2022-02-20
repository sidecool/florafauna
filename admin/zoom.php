<!DOCTYPE html>
<html lang="zxx">
<head>
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/single.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>
<body>

<div class="container">
			<div class="row">

<?php
  include "../config/koneksi.php";
  $view=mysqli_query($connect,"SELECT * FROM tbl_data WHERE id='$_GET[id]'");
		$t=mysqli_fetch_array($view);
		
		echo "<table>
                  <tr>
                      <td>$t[judul]</td>
                  </tr>
                  <tr><td><td><img src='../foto/$t[gambar]'  width='100' height='100'></td></tr>
                  <tr><td><audio controls>
                      <source src='../audio/$t[audio]' type='audio/mpeg'>
                      Your browser does not support the audio element.
                      </audio></td>
                  </tr>
                  <tr>
                      <td><video width='320' height='240' controls>
                      <source src='../video/$t[video]' type='video/mp4'>
                      Your browser does not support the video tag.
                      </video></td>
                    </tr>
              </table>";

?>
</div>
</body>

							</html>
