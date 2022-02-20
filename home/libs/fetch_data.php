<?php 
include "../config/fungsi_indotgl.php";

function gettagline($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Tagline!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $tagline) {
      	# code...
			echo ''.$tagline['tagline'].'';
		}
	}

	mysqli_close($con);
}
function geticon($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no icon alert
		if ($rowcount==0) {
      		# code...
			echo 'NoIcon';
		}
      	//if there are rows available display all the results
		foreach ($result as $webicon => $icon) {
      	# code...
			echo ''.$icon['icon'].'';
		}
	}

	mysqli_close($con);
}
function getjavascripts($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $jsscripts => $js) {
      	# code...
			echo ''.$js['javascript'].'';
		}
	}

	mysqli_close($con);
}
function getsharingscript($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $sharingscript => $sharing) {
      	# code...
			echo ''.$sharing['sharing_script'].'';
		}
	}

	mysqli_close($con);
}
function getcommentsscript($table){
require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no script alert
		if ($rowcount==0) {
      		# code...
			echo 'No script';
		}
      	//if there are rows available display all the results
		foreach ($result as $commentsscript => $csript) {
      	# code...
			echo ''.$csript['comments_script'].'';
		}
	}

	mysqli_close($con);
}
function getshortdescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['short_description'].'';
		}
	}

	mysqli_close($con);
}
function getcontacts($table,$num){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $contacts) {
      	# code...num
			if ($num==1) {
				# code...
				echo ''.$contacts['address'].'';
			}
			elseif ($num==2) {
				# code...
				echo ''.$contacts['email'].'';
			}
			elseif ($num==3) {
				# code...
				echo ''.$contacts['phone'].'';
			}
			elseif ($num==4) {
				# code...
				echo ''.$contacts['googlemap'].'';
			}
		
		}
	}

	mysqli_close($con);
}
function getdetaileddescription($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Description!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $sdc) {
      	# code...
			echo ''.$sdc['detailed_description'].'';
		}
	}

	mysqli_close($con);
}

function countcategories($category_id){
	require("database/db_connect.php");
	$sql="SELECT * FROM tbl_subkategori WHERE kategori_id='$category_id' LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Belum ada sub kategori';
		}
      	//if there are rows available display all the results
		foreach ($result as $categoriescount => $categorydata) {
				#count how many times each category appears in blogs
			$categoryid=$categorydata['id'];
			$sql="SELECT * FROM tbl_data WHERE subkategori_id='$categoryid' AND aktif='Y'";
			if ($result=mysqli_query($con,$sql)) {
					# code...
				$rowcountcategory=mysqli_num_rows($result);
				$getcatcount=$rowcountcategory;
			}
					# code...show data
			echo '<li class="list-group-item d-flex justify-content-between align-items-center">
			'.$categorydata['nama_subkategori'].'
			<span class="badge badge-success badge-pill">'.$rowcountcategory.'</span>
			</li>';
		}
	}

	mysqli_close($con);
}

function countcategoriesmain(){
	require("database/db_connect.php");
	$sql="SELECT * FROM tbl_kategori LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Belum ada kategori';
		}
      	//if there are rows available display all the results
		foreach ($result as $categoriescount => $categorydata) {
				#count how many times each category appears in blogs
			$categoryid=$categorydata['id'];
			$sql="SELECT * FROM tbl_data WHERE kategori_id='$categoryid' AND aktif='Y'";
			if ($result=mysqli_query($con,$sql)) {
					# code...
				$rowcountcategory=mysqli_num_rows($result);
				$getcatcount=$rowcountcategory;
			}
					# code...show data
			echo '<li class="list-group-item d-flex justify-content-between align-items-center">
			'.$categorydata['nama_kategori'].'
			<span class="badge badge-success badge-pill">'.$rowcountcategory.'</span>
			</li>';
		}
	}

	mysqli_close($con);
}
function getbannertext($table,$position){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Hello World!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $bannertext) {
      	# code...
			if ($position==1) {
					# code...
				echo ''.$bannertext['bannertext1'].'';
			}
			elseif ($position==2) {
					# code...
				echo ''.$bannertext['bannertext2'].'';
			}
			elseif ($position==3) {
					# code...
				echo ''.$bannertext['bannertext3'].'';
			}
			elseif ($position==4) {
					# code...
				echo ''.$bannertext['bannertext4'].'';
			}
		}
	}

	mysqli_close($con);
}
function getwebname($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Name!!';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $blogname) {
      	# code...
			echo ''.$blogname['website_name'].'';
		}
	}

	mysqli_close($con);
}
function getkeywords($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Nothing';
		}
      	//if there are rows available display all the results
		foreach ($result as $titles => $keywords) {
      	# code...
			echo ''.$keywords['keywords'].'';
		}
	}

	mysqli_close($con);
}
function getlinks($table,$platform){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo '#';
		}
      	//if there are rows available display all the results
		foreach ($result as $link => $site) {
      	# code...
			if ($platform=="facebook") {
					# code...
				echo ''.$site['facebook'].'';
			}
			elseif ($platform=="twitter") {
					# code...
				echo ''.$site['twitter'].'';
			}
			

		}
	}

	mysqli_close($con);
}
function getcategoriesmenu($table)
{
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no categories alert
		if ($rowcount==0) {
      		# code...
			echo 'No Categories';
		}
      	//if there are rows available display all the results
		foreach ($result as $blog_categories => $category) {
      	# code...
			echo '<a class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['nama_kategori'].'</a>
			<div class="dropdown-divider"></div>';
		}
	}

	mysqli_close($con);
}
function getbottomsliderposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Belum ada data';
		}else{
			  	//if there are rows available display all the results
			foreach ($result as $sliderposts => $slideritem) {
			# code...fetch actual category from categories table
			  $category_id=$slideritem['kategori_id'];
			  $sql="SELECT * FROM tbl_kategori WHERE id='$category_id'";
			  if ($result2=mysqli_query($con,$sql))
			  {
				  foreach ($result2 as $results => $actualcategory) {
					  $ctgry=$actualcategory['nama_kategori'];
				  }
			  }

			  // print_r($result2); exit();
  
  
				  #code...display the results
			  echo '<li>
			  <div class="blog-item"> 
			  <a href="single.php?id='.$slideritem['id'].'">
			  <img src="../foto/'.$slideritem['gambar'].'" alt="fantastic cms" 
					  class="img-fluid" style="width:100%;height:320px"/>
			  </a>
			
			  <div class="floods-text">
			  <a href="single.php?id='.$slideritem['id'].'">
				<h3>'.$slideritem['judul'].'
				<span>'.$ctgry.'
				<label>|</label>
				<i>'.$slideritem['tanggal'].'</i>
				</span>
			  </h3>
			  </a>
			  </div>
			  </div>
			  </li>';
		  }
		}
    
	}

	mysqli_close($con);
}
function getblogridposts($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE aktif='Y' ORDER BY id  DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Belum ada data';
		}else{
			      	//if there are rows available display all the results
		foreach ($result as $bloggrid => $griditem) {
			# code...
			  echo '<div class="col-md-6 blog-grid-top">
			  <div class="b-grid-top">
			  <div class="blog_info_left_grid">
			  <a href="single.php?id='.$griditem['id'].'">
			  <img src="../foto/'.$griditem['gambar'].'" class="img-fluid" alt="fantastic cms" style="width:100%;height:auto">
			  </a>
			  </div>
			  <h3>
			  <a href="single.php?id='.$griditem['id'].'">'.$griditem['judul'].'</a>
			  </h3>
			  </div>
			  <ul class="blog-icons">
			  <li>
			  <a href="#">
			  <i class="far fa-clock"></i>  '.tgl_indo($griditem['tanggal']).'</a>
			  </li>
			  
			 
			  </ul>
			  </div>';
		  }
  
		}
	}

	mysqli_close($con);

}
function getolderposts($table, $category_id){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE aktif='Y' ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $olderposts => $op) {
      	# code...
			echo '<div class="blog-grids row mb-3">
			<div class="col-md-5 blog-grid-left">
			<a href="single.php?id='.$op['id'].'">
			<img src="../foto/'.$op['gambar'].'" class="img-fluid" alt="fantastic cms">
			</a>
			</div>
			<div class="col-md-7 blog-grid-right">

			<h5>
			<a href="single.php?id='.$op['id'].'">'.$op['judul'].'</a>
			</h5>
			<div class="sub-meta">
			<span>
			<i class="far fa-clock"></i> '.$op['tanggal'].'</span>
			</div>
			</div>

			</div>';
		}
	}

	mysqli_close($con);
}

function getrandomdata($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE aktif='Y' ";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $olderposts => $op) {
      	# code...
			echo '<div class="blog-grids row mb-3">
			<div class="col-md-5 blog-grid-left">
			<a href="single.php?id='.$op['id'].'">
			<img src="../foto/'.$op['gambar'].'" class="img-fluid" alt="fantastic cms">
			</a>
			</div>
			<div class="col-md-7 blog-grid-right">

			<h5>
			<a href="single.php?id='.$op['id'].'">'.$op['judul'].'</a>
			</h5>
			<div class="sub-meta">
			<span>
			<i class="far fa-clock"></i> '.$op['tanggal'].'</span>
			</div>
			</div>

			</div>';
		}
	}

	mysqli_close($con);
}
function getfour($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 4";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $thefour => $fourdata) {
      	# code...
			echo '<li>
			<a href="../foto/'.$fourdata['gambar'].'">
			<img src="../foto/'.$fourdata['gambar'].'" alt="fantastic cms" data-desoslide-caption="<h3>Latest Post '.$fourdata['id'].'</h3>">
			<div class="mid-text-info">
			<h4 style="height:40px;overflow:hidden;text-overflow:ellipsis">'.$fourdata['judul'].'</h4>
			<p>'.$fourdata['judul'].'</p>
			<div class="sub-meta">
			<span>
			<i class="far fa-clock"></i> '.$fourdata['tanggal'].'</span>
			</div>
			</div>
			</a>
			</li>';
		}
	}

	mysqli_close($con);
}
function getonelatest($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 1";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No posts to fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $onelatest => $onedata) {
      	# code...
			echo '<div class="blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			<a href="single.php?id='.$onedata['id'].'">
			<img src="../foto/'.$onedata['gambar'].'" class="img-fluid" alt="fantastic cms" style="width:900px;height:500px">
			</a>
			</div>
			<div class="blog-info-middle">
			<ul>
			<li>
			<a href="#">
			<i class="far fa-calendar-alt"></i> '.$onedata['tanggal'].'</a>
			</li>
			<li class="mx-2">
			<a href="#">
			<i class="far fa-check"></i> '.$onedata['tag'].'</a>
			</li>
			<li>
			<a href="#">
			<i class="far fa-user"></i> '.$onedata['judul'].'</a>
			</li>

			</ul>
			</div>
			</div>

			<h3>
			<a href="single.php?id='.$onedata['id'].'">'.$onedata['judul'].'</a>
			</h3>
			<a href="single.php?id='.$onedata['id'].'" class="btn btn-primary read-m">Read More</a>
			</div>';
		}
	}

	mysqli_close($con);
}
function geteditorschoice($table){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $edschoice => $choice) {
			#get actual blog post data
			$postid=$choice['blog'];
			$sql="SELECT * FROM blogs WHERE id='$postid'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $posts => $postdata) {
					# code...display actual posts
					echo '<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.php?id='.$postdata['id'].'">
										<img src="blogadmin/images/'.$postdata['photo'].'" class="img-fluid" alt="fantastic cms">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.php?id='.$postdata['id'].'"> '.$postdata['title'].'</a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> '.$postdata['date'].'</span>
									</div>
								</div>
								
							</div>';
				}
			}
      	# code...
		}
	}

	mysqli_close($con);
}
function getcategoryblogs($table,$id){
	require("database/db_connect.php");
	$sql="SELECT * FROM $table WHERE kategori_id='$id'AND aktif='Y' ORDER BY id DESC LIMIT 10";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'Belum ada data';
		}
      	//if there are rows available display all the results
		foreach ($result as $categories => $cdata) {
      	# code...
			echo '<div class="col-md-6 card">
							<a href="single.php?id='.$cdata['id'].'">
								<img src="../foto/'.$cdata['gambar'].'" class="card-img-top img-fluid" alt="fantastic cms" style="width:480px;height:300px">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> '.tgl_indo($cdata['tanggal']).'</a>
									</li>
									

								</ul>
								<h5 class="card-title ">
									<a href="single.php?id='.$cdata['id'].'">'.$cdata['judul'].'</a>
								</h5>
								<a href="single.php?id='.$cdata['id'].'" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>';
		}
	}

	mysqli_close($con);
}
function getpopularposts($table){
	require("database/db_connect.php");
	#get most viewed 3 pages from pagehits
	$sql="SELECT * FROM $table ORDER BY count DESC LIMIT 3";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Pots To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $pagehits => $hits) {
      	# code...get actual blog from blogs db
			$storepage=$hits['page'];
			$sql="SELECT * FROM blogs WHERE title='$storepage'";
			if ($result=mysqli_query($con,$sql)) {
				# code...
				foreach ($result as $allblogs => $specificblog) {
					# code...display the results
					echo '<div class="blog-grids row mb-3">
							<div class="col-md-5 blog-grid-left">
								<a href="single.php?id='.$specificblog['id'].'">
									<img src="blogadmin/images/'.$specificblog['photo'].'" class="img-fluid" alt="fantastic cms">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.php?id='.$specificblog['id'].'">'.$specificblog['title'].' </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> '.$specificblog['date'].'</span>
								</div>
							</div>
							
						</div>';
				}
			}
		}
	}

	mysqli_close($con);

}


?>
