<?php require("libs/fetch_data.php");
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
			<div class="row justify-content-md-center">
			
			<div class="col col-lg-10">
					<!--grid blogs below-->
					
					<div class="login-panel panel panel-default">
					<div id="input">Selamat Datang, <?php echo $_SESSION["username"]; ?></div>
                    <div class="panel-heading" style="text-align: left">
                        <h5 class="panel-title"><?php getIntro(); ?></h5>
                    </div>
                  

					<div class = "row justify-content-md-center" style='text-align:center;'>

					<div class="col col-lg-6">
						<form name="fValidate">
								<input type="checkbox" name="agree" id="agree" value="1"> Saya sudah baca peraturan.<br/><br/>
								<div style='text-align:center;'>
									<input type="button" name="button-ok" class="btn btn-primary" value="MULAI TES" onclick="cekForm()">
								</div>
							</form>
						</div>
					<div class="col col-lg-6">
						<label for="">Klik di bawah untuk kembali</label>
						<div style='text-align:center;'>
						<input type="button" name="button-exit" class="btn btn-danger" value="KELUAR" onclick="keluar()">
						</div>
					</div>
								</div>
					</div>
			
				
							</div>
						</div>
					</section>
					<!--//main-->
					
					<!--//footer
					
					 -->

					 

					<!-- -->
					<script>
					function cekForm() {
						if (!document.fValidate.agree.checked) {
									alert("Anda belum menyetujui!");
									return false;
								} else {
									var div = document.getElementById("input");
									var myData = div.textContent;
									location.href="soal.php?username=" + myData;
								}
							}
					</script>
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

					<!-- js -->
					<script src="js/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					

					<!-- requried-jsfiles-for owl -->
					<script>
						$(window).load(function () {
							$("#flexiselDemo1").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script>
						$(window).load(function () {
							$("#flexiselDemo2").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint: 480,
										visibleItems: 1
									},
									landscape: {
										changePoint: 640,
										visibleItems: 2
									},
									tablet: {
										changePoint: 768,
										visibleItems: 3
									}
								}
							});

						});
					</script>
					<script src="js/jquery.flexisel.js"></script>
					<!-- //password-script -->
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
							
							var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									};
									

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