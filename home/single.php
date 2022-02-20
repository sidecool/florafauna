<?php require("libs/fetch_data.php");
    
include("database/conn.php");//database config file
$id=$_REQUEST['id']; $query="SELECT * from tbl_data where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['judul'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php echo $row['judul']; ?>|<?php getwebname("titles");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="../foto/<?php echo $row['gambar']; ?>">
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
	<link rel="stylesheet" href="css/single.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
	<!--additional javascripts will be placed here-->
	<?php getjavascripts("links"); ?>
</head>

<body>
	<!--Header-->
	<?php include("header.php");?> 
	<!--//header-->
<!--
	<div class="banner-inner">
	</div> -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Blog</li>
	</ol>

	<!--//banner-->
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="#">
									<img src="../foto/<?php echo $row['gambar']; ?>" 
										class="img-fluid" alt="image not available" style="width:100%;height:auto">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i>  <?php echo tgl_indo($row['tanggal']); ?></a>
										</li>
										
									

												</ul>
											</div>
									

									
										</div>

										

										<h3>
											<a href="single.html"><?php echo $row['judul']; ?></a>
										</h3>
										<!--sharing script-->
										<?php getsharingscript("links"); ?>
										<?php echo $row['deskripsi']; ?>
										<?php if($row['audio'] != ""){ ?>

											
										<div><b><label for="">Audio</label></b><br>
											<audio controls >
											<source src='../audio/<?php echo $row['audio']; ?>' type='audio/mpeg'>
											Your browser does not support the audio element.
											</audio>
										</div>

										<?php } ?> 
										
									 <?php 	
									 
									    //if($row['video'] != ""){
										
										?>

										<!--<div><b><label for="">Video</label></b><br>-->
										<!--	<video width='100%' height='auto' controls>-->
										<!--	<source src='../video/<?php echo $row['video']; ?>' type='video/mp4'>-->
										<!--	Your browser does not support the video tag.-->
										<!--	</video>-->
										<!--</div>-->
										
										<?php 
										//} 
										?>
										
										<h5><strong>Cetak</strong></h5>
                						<div class="tech-btm widget_social">
                							<a class="btn btn-primary" href="cetak_single.php?param=id&id=<?php echo $id; ?>" target='_blank'>
                										<i class="fa fa-print"></i>
                										<span class="count"></span> Cetak </a>
                						</div>
									</div>
								</div>

								<!--//left-->
								<!--right-->
								<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<h4><strong>Kategori</strong></h4>
						<ul class="list-group single">
							<?php getcategoriesmenu("tbl_kategori");?>
						</ul>
						<div class="tech-btm widget_social">
							<h4>Stay Connected</h4>
							<ul>

								<li>
									<a class="twitter" href="<?php getlinks("links","twitter");?>">
										<i class="fab fa-twitter"></i>
										<span class="count"></span> Twitter</a>
									</li>
									<li>
										<a class="facebook" href="<?php getlinks("links","facebook");?>">
											<i class="fab fa-facebook-f"></i>
											<span class="count"></span> Facebook</a>
										</li>
										
											</ul>
										</div>
										<div class="tech-btm">
											<h4>Older Posts</h4>
											<?php getrandomdata("tbl_data");?>
											<!--olderpostsendhere-->
										</div>
									</div>
								</aside>
												<!--//right-->
											</div>
										</div>
									</section>
									<!--//main-->
									<!--footer-->
									<?php include("footer.php");?>
									<!---->
									<!-- js -->
									<script src="js/jquery-2.2.3.min.js"></script>
									<!-- //js -->
									<!--/ start-smoth-scrolling -->
									<script src="js/move-top.js"></script>
									<script src="js/easing.js"></script>
									<script>
										jQuery(document).ready(function ($) {
											$(".scroll").click(function (event) {
												event.preventDefault();
												$('html,body').animate({
													scrollTop: $(this.hash).offset().top
												}, 900);
											});
										});
									</script>
									<!--// end-smoth-scrolling -->

									<script>
										$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});

							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>

							 <!-- //Custom-JavaScript-File-Links -->
							 <script src="js/bootstrap.js"></script>


							</body>

							</html>