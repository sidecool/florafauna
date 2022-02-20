<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>Profil kami</h3>
					<p><?php getshortdescription("titles"); ?></p>
					<div class="read">
						<a href="about.php" class="btn btn-primary read-m">Baca selengkapnya</a>
					</div>
				</div>
				
				
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="<?php getlinks("links","facebook");?>">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="<?php getlinks("links","twitter");?>">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p> Situs ini diupdate tahun <?php $current=date("Y"); print_r($current);?> | dikembangkan oleh						<a href="">Nama Mahasiswa</a>
					</p>

				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>