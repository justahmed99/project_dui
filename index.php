<!DOCTYPE html>
<html>
	<head>
		<meta charshet="utf-8">
		<meta mane="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="source/css/bootstrap.min.css">
		<link rel="stylesheet" href="custom/custom.css">
        <style>
            br {
                margin: 2em;
                font-size: 24%;
            }
             .bg-3 {
                 background-color: #ffffff; /* White */
                 color: #555555;
             }
             .navbar-default .navbar-fnt {
                    color: #ffcc00;
            }
             .navbar-default .navbar-backgrnd {
                color: #000033;
            }

            .dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}

			.dropdown-content a {
				float: none;
				color: black;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
				text-align: left;
			}

			.dropdown-content a:hover {
				background-color: #ddd;
			}

			.dropdown:hover .dropdown-content {
				display: block;
			}
        </style>
	</head>
	<body style="background-color: #000033;">
        <!-- Header -->
        <div class="container-fluid" style="background-color: #000033;">
            <!-- Jumbotron -->
            <div class="jumbotron" style="background-color: #000033;">
                <div class="container">
                    <h1><img class="d-block w-100" src="image/gambar/header.png" alt="First slide"></h1>
                </div>
            </div>

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-fnt navbar-backgrnd" style="border-style: solid;padding-bottom: 10px;padding-top:20px;border-top-color:white;border-right-color: transparent;border-left-color: transparent;border-bottom-color:white;">
                <a class="navbar-brand" href="#">IF</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <div class="dropdown">
                            <li class="nav-item"><a class="nav-link" href="page/Visi%20&%20Misi.php">Visi dan Misi</a></li>
                            <div class="dropdown-content">
                                <a class="nav-link" href="page/Visi%20&%20Misi.php">Visi dan Misi</a>
                                <a href="page/Tujuan%20&%20Sasaran.php">Tujuan dan Sasaran</a>
                                <a href="page/Rencana%20Strategis.php">Rencana Strategis</a>
                            </div>
                        </div>

                        <li class="nav-item"><a class="nav-link" href="#">Struktur Kepemimpinan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sumber Daya Manusia</a></li>

                        <div class="dropdown">
							<li class="nav-item active">
							<a class="nav-link" href="#">Mahasiswa dan Lulusan</a>
							</li>
							<div class="dropdown-content">
							  <a href="page/php/data_mhs.php">Data Mahasiswa</a>
							  <a href="page/php/prestasi_mhs.php">Prestasi Mahasiswa</a>
							  <a href="page/php/layanan_mhs.php">Layanan Mahasiswa</a>
							  <a href="page/php/eval_lulusan.php">Evaluasi Lulusan</a>
							</div>
						</div>
                        <li class="nav-item"><a class="nav-link" href="#">Kurikulum</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sarana Prasarana</a></li>
                        <div class="dropdown">
							<li class="nav-item active">
							<a class="nav-link" href="#">Penelitian dan Pengabdian</a>
							</li>
							<div class="dropdown-content">
							  <a class="nav-link" href="page/penelitian.php">Penelitian dan Pengabdian</a>
							  <a href="page/Kerjasama.php">Kerjasama</a>
							</div>
						</div>
                    </ul>

                    <!-- Searching form in Navbar -->
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" arial-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>

        <!-- Carousel -->
		<div class="container-fluid" style="padding-bottom:20px;padding-top:20px;">
			<div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="5000">

				<!-- Carousel list indicator -->
				<ol class="carousel-indicators">
					<li data-target="#carouselExample" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExample" data-slide-to="1"></li>
					<li data-target="#carouselExample" data-slide-to="2"></li>
				</ol>
				<!-- Carousel image components -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="image/slide/slide1.jpg" alt="First slide">
						<!-- Image caption -->
						<div class="carousel-caption d-none d-md-block">
							<h3>Gunung Kilimanjaro</h3>
							<p>Gunung Kilimanjaro, sebuah gunung berapi indah di benua Afrika.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/slide/slide2.jpg" alt="Second slide">
						<!-- Image caption -->
						<div class="carousel-caption d-none d-md-block">
							<h3>Foto Bulet-bulet</h3>
							<p>Foto yang tidak jelas bagaimana mengambilnya dan untuk apa.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="image/slide/slide3.jpg" alt="Third slide">
						<!-- Image caption -->
						<div class="carousel-caption d-none d-md-block">
							<h3>Gurun Pasir</h3>
							<p>Tempat yang panas dan susah menemukan air.</p>
						</div>
					</div>
				</div>

				<!-- Next button -->
				<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<!--<span class="glyphicon glyphicon-chevron-left"></span>-->
                    <span class="sr-only">Previous</span>
				</a>

				<!-- Prev button -->
				<a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

        <!-- Carousel of Gallery-->
		<div class="container-fluid" style="padding-top: 20px;padding-bottom: 20px;">
            <h3 class="text-center">Gallery</h3>
        </div>

        <!-- Post -->
		<div class="container" style="border-style: solid;padding-top: 20px;border-top-color: white;border-right-color: transparent;border-left-color: transparent;border-bottom-color: transparent;">
			<div class="row justify-content-md-center" style="padding-bottom:20px;">
				<div class="col">
                    <h3 class="text-center" style="color:cornflowerblue">BERITA</h3>
					<ul class="list-group">
                        <li class="list-group-item"><a href="#">Berita A</a></li>
                        <li class="list-group-item"><a href="#">Berita B</a></li>
                        <li class="list-group-item"><a href="#">Berita C</a></li>
                        <li class="list-group-item"><a href="#">Berita D</a></li>
                        <li class="list-group-item"><a href="#">Berita E</a></li>
                        <li class="list-group-item"><a href="#">AMADI Research</a></li>
                        <li class="list-group-item"><a href="#"><button type="button" class="btn btn-primary btn-sm">Berita lain</button></a></li>
                    </ul>
                </div>
				<div class="col">
                    <h3 class="text-center" style="color:cornflowerblue">TAUTAN</h3>
					<ul class="list-group">
                        <li class="list-group-item"><a href="#">Sistem Informasi Akademik Terpadu (SIAT)</a></li>
                        <li class="list-group-item"><a href="#">Microsoft Image</a></li>
                        <li class="list-group-item"><a href="#">Pangkalan Data Dikti (PD-DIKTI)</a></li>
                        <li class="list-group-item"><a href="#">SIM Penelitian PKM</a></li>
                        <li class="list-group-item"><a href="#">Sistem Informasi Staff, e-Office, dan Kinerja</a></li>
                        <li class="list-group-item"><a href="#">AMADI Research</a></li>
                        <li class="list-group-item"><a href="#">Sistem Penilaian Angka Kredit Dosen</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3 class="text-center" style="color:cornflowerblue">KALENDER AKADEMIK</h3>
					<ul class="list-group">
                        <li class="list-group-item">Semester Genap</li>
                        <li class="list-group-item">Her Registrasi Mahasiswa 26 Januari s.d. 6 Februari 2017</li>
                        <li class="list-group-item">Masa Perkuliahan 15 Februari s.d. 14 Juni 2017</li>
                        <li class="list-group-item">Ujian Tengah Semester 25 April s.d. 12 Mei 2017</li>
                        <li class="list-group-item">Ujian Akhir Semester 31 Mei 2017 s.d. 14 Juni 2017</li>
                        <li class="list-group-item"><a href="#"><button type="button" class="btn btn-primary btn-sm">Lihat kalender lengkap</button></a></li>
                    </ul>
                </div>
			</div>
        </div>

        <!-- Map and contact -->
        <div class="container-fluid">
            <div class="row justify-content-md-center" style="padding-bottom:20px;padding-top: 20px;background-color: white;border-style: solid;border-bottom-color: black;border-top-color: transparent;border-left-color: transparent;border-right-color: transparent;">
				<div class="col">
					<h3 class="text-center">Lokasi dan Gedung</h3>
                    <div class="row justify-content-md-center">
                        <div class="col-3">
                            <p class="text-center"><a href="image/gambar/peta.jpg"><img class="img-responsive" src="image/gambar/peta.jpg" style="width: 100px;height: 140px;" alt="First slide"></a></p>
                        </div>
                        <div class="col-3">
                            <p class="text-center"><a href="image/gambar/denah.jpg"><img class="img-responsive" src="image/gambar/denah.jpg" style="width: 100px;height: 140px;" alt="First slide"></a></p>
                        </div>
                    </div>
				</div>
				<div class="col">
					<h3 class="text-center">Himpunan Mahasiswa</h3>
                    <p class="text-center" style="padding-top: 20px;"><a href="http://himatif.fmipa.unpad.ac.id/"><img class="img-responsive" src="image/gambar/himatif.png" style="width: 140px;height: 140px;" alt="First slide"></a></p>
				</div>
			</div>
		</div>

        <!-- Footer -->
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col">
                    <p class="text-right"><img src="image/gambar/footer.png" alt="footer" style="width: 90px;height: 100px;"></p>
                </div>
                <div class="col">
                    <p style="color:white"><font size="2">Program Studi S1 Teknik Informatika<br>Kampus Unpad Jatinangor<br>Jalan Raya Bandung-Sumedang Km.21<br>Jatinangor, 45363<br>Gedung Ilmu Komputer (PPBS D)</font></p>
                </div>
                <div class="col">
                    <p style="color: white"><font size="2">Contact <img src="image/icon/phone.svg" style="width: 20px; height: 20px;-webkit-filter: invert(100%);"> <br>T : (+62)22 - 7798983<br>T : (+62)22 - 7794545<br>M : (+62)81 - 1234734<br>S : (+62)81 - 22323328</font></p>
                </div>
                <div class="col">
                    <p style="color: white"><font size="2"><br><img src="image/icon/email.svg" style="width: 20px; height: 20px;-webkit-filter: invert(100%);"> informatika@unpad.ac.id<br><img src="image/icon/globe.svg" style="width: 20px; height: 20px;-webkit-filter: invert(100%);">  informatika.unpad.ac.id</font></p>
                </div>
            </div>
        </div>

		<script src="source/assets/js/vendor/jquery-slim.min.js"></script>
		<script src="source/assets/js/vendor/popper.min.js"></script>
		<script src="source/js/bootstrap.min.js"></script>
	</body>
</html>
