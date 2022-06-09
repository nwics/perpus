<?php
session_start();
require 'config.php';
?>

<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="model.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- icon -->
	<link rel="stylesheet" href="assets/vendor/icofont/icofont.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- JAVASCRIPT -->

     
	
    <title>WEBSITE PERPUS</title>
  </head>
  <body>
	  <!--NAVBAR-->
	  <nav class="navbar navbar-expand-lg fixed-top navbar-dark nav-scrolled-text-shadow " id="navToggler">
 	 <div class="container">
		  <a class="navbar-brand fw-bold" href="#">PUSTAKA</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto text-uppercase fs-4">
					<li class="nav-item m-auto p-1">
						<a class="nav-link bawah p-2" aria-current="page" href="#home">Beranda</a>
					</li>

					<?php
					$level = $_SESSION['level'] == 'user';
					if($level) {
					?>
					<li class="nav-item m-auto p-1">
						<a class="nav-link bawah p-2" href="anggota.php">Anggota</a>
					</li>
					<li class="nav-item m-auto p-1">
						<a class="nav-link bawah p-2" href="peminjaman.php">Peminjaman</a>
					</li>
					<li class="nav-item m-auto p-1">
						<a class="nav-link bawah p-2" href="buku.php">Daftar Buku</a>
					</li>
					<?php }else { ?>
					<li class="nav-item m-auto p-1">	
						<a class="nav-link bawah p-2" href="anggota.php">Anggota User</a>
					</li>
					<li class="nav-item m-auto p-1">
						<a class="nav-link bawah p-2" href="peminjaman.php">Peminjaman User</a>
					</li>
					<li class="nav-item m-auto p-1">
						<a class="nav-link bawah p-2" href="buku.php">Daftar Buku User</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
		
	<!-- jumbotron -->
	<div class="container-fluid jumbotron">
      <div class="container">
        <div class="jumbotron-text text-center">
          <h1 class="m-0">WELCOME TO</h1>
          <h1 class="m-0 fw-bold">PERPUSTAKAAN.</h1>
          <p class="m-0 pt-3">Boost your productivity and build your</p>
          <p class="m-0">mood with a book in the morning.</p>
        </div>
      </div>
    </div>
	
	  <!-- AKHIR NAVBAR -->
	<section class="keterangan">
		<div class="container">
			<div class="row text-center mb-5 ">
				<div class="col">
					<h2 class="fw-bold">INFORMASI TAMBAHAN</h2>	
				</div>
			</div>
		<div class="row justify-content-center fs-5 text-center">
			<div class="col-4">
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus voluptate quos mollitia repudiandae enim soluta. Eveniet debitis sequi suscipit quia?</p>
			</div>
			<div class="col-4">
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt iste hic officia assumenda reiciendis nisi id sed, quibusdam distinctio omnis fuga quis, commodi nulla non.</p>
			</div>
		</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L30,197.3C60,203,120,213,180,202.7C240,192,300,160,360,133.3C420,107,480,85,540,106.7C600,128,660,192,720,229.3C780,267,840,277,900,256C960,235,1020,181,1080,170.7C1140,160,1200,192,1260,202.7C1320,213,1380,203,1410,197.3L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
	</section>

	<!-- ISINYA APA? -->

	<!-- TENTANG KITA -->
	<section class="team">
		<div class="container-fluid pt-5 pb-5">
			<div class="container text-center">
				<h2 class="display-3 fw-bold" id="tim">TIM KAMI</h2>
				<p>yang merupakan anggota adalah</p>
				<div class="row pt-4 gx-4 gy-4">
					<!-- 1 -->
					<div class="col-md-4 text-center">
						<img src="team1.png" class="rounded-circle mb-3" class="card-img-top" width="200" height="200"/>
						<h4>NABIL</h4>
						<p>MATEMATIKA E 2020</p>
					</div>
					<div class="col-md-4 text-center">
						<img src="team1.png" class="rounded-circle mb-3" class="card-img-top" width="200" height="200"/>
						<h4>NABIL</h4>
						<p>MATEMATIKA E 2020</p>
					</div>
					<div class="col-md-4 text-center">
						<img src="team1.png" class="rounded-circle mb-3" class="card-img-top" width="200" height="200"/>
						<h4>NABIL</h4>
						<p>MATEMATIKA E 2020</p>
					</div>
				</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edef" fill-opacity="1" d="M0,96L34.3,90.7C68.6,85,137,75,206,85.3C274.3,96,343,128,411,128C480,128,549,96,617,101.3C685.7,107,754,149,823,154.7C891.4,160,960,128,1029,133.3C1097.1,139,1166,181,1234,165.3C1302.9,149,1371,75,1406,37.3L1440,0L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
	</section>
    
	<!-- FOOTER -->
	<footer class="bg-color fw-bold text-black text-center pb-3">
		<p>MADE WITH LOVE BY kelompok 2 </p>
		
	</footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>