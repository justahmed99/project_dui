<!DOCTYPE html>
<html>
	<head>
		<meta charshet="utf-8">
		<meta mane="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="../source/css/bootstrap.min.css">
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
                    <h1><img class="d-block w-100" src="../image/gambar/header.png" alt="First slide"></h1>
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
                        <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
                        <div class="dropdown">
                            <li class="nav-item"><a class="nav-link" href="../page/Visi%20&%20Misi.php">Visi dan Misi</a></li>
                            <div class="dropdown-content">
                                <a class="nav-link" href="../page/Visi%20&%20Misi.php">Visi dan Misi</a>
                                <a href="../page/Tujuan%20&%20Sasaran.php">Tujuan dan Sasaran</a>
                                <a href="../page/Rencana%20Strategis.php">Rencana Strategis</a>
                            </div>
                        </div>
                        
                        <li class="nav-item"><a class="nav-link" href="#">Struktur Kepemimpinan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sumber Daya Manusia</a></li>
                        
                        <div class="dropdown">
							<li class="nav-item active">
							<a class="nav-link" href="#">Mahasiswa dan Lulusan</a>
							</li>
							<div class="dropdown-content">
							  <a href="../page/php/data_mhs.php">Data Mahasiswa</a>
							  <a href="../page/php/prestasi_mhs.php">Prestasi Mahasiswa</a>
							  <a href="../page/php/layanan_mhs.php">Layanan Mahasiswa</a>
							  <a href="../page/php/eval_lulusan.php">Evaluasi Lulusan</a>
							</div>
						</div>
                        <li class="nav-item"><a class="nav-link" href="#">Kurikulum</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sarana Prasarana</a></li>
                        <div class="dropdown">
							<li class="nav-item active">
							<a class="nav-link" href="#">Penelitian dan Pengabdian</a>
							</li>
							<div class="dropdown-content">
							  <a class="nav-link" href="../page/penelitian.php">Penelitian dan Pengabdian</a>
							  <a href="../page/Kerjasama.php">Kerjasama</a>
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
        <!-- Post -->
		<div class="container-fluid" style="border-style: solid; background-color:white; padding-top: 20px;border-top-color: #ffcc00;border-right-color: transparent;border-left-color: transparent;border-bottom-color: #ffcc00">
			<div class="row justify-content-md-center" style="padding-bottom:20px;">
				<div class="col">
                    <h3 class="text-center" style="color:cornflowerblue">Rencana Strategis</h3>
					<ul class="list-group:inline-block; width: 100px">
                        <li><a href="https://drive.google.com/open?id=0Bx4uEsniwF4KcWQzM2pIdjJ0Q0E">Rencana Strategis UNPAD 2015-2019</a></li>
						<li><a href="https://drive.google.com/open?id=0Bx4uEsniwF4KRlVfS2I4Ql9ub0U">Rencana Strategis Fakultas MIPA 2017-2021</a></li>
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
                            <p class="text-center"><a href="../image/gambar/peta.jpg"><img class="img-responsive" src="../image/gambar/peta.jpg" style="width: 100px;height: 140px;" alt="First slide"></a></p>
                        </div>
                        <div class="col-3">
                            <p class="text-center"><a href="image/gambar/denah.jpg"><img class="img-responsive" src="../image/gambar/denah.jpg" style="width: 100px;height: 140px;" alt="First slide"></a></p>
                        </div>
                    </div>
				</div>
				<div class="col">
					<h3 class="text-center">Himpunan Mahasiswa</h3>
                    <p class="text-center" style="padding-top: 20px;"><a href="http://himatif.fmipa.unpad.ac.id/"><img class="img-responsive" src="../image/gambar/himatif.png" style="width: 140px;height: 140px;" alt="First slide"></a></p>
				</div>
			</div>
		</div>
        
        <!-- Footer -->
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col">
                    <p class="text-right"><img src="../image/gambar/footer.png" alt="footer" style="width: 90px;height: 100px;"></p>
                </div>
                <div class="col">
                    <p style="color:white"><font size="2">Program Studi S1 Teknik Informatika<br>Kampus Unpad Jatinangor<br>Jalan Raya Bandung-Sumedang Km.21<br>Jatinangor, 45363<br>Gedung Ilmu Komputer (PPBS D)</font></p>
                </div>
                <div class="col">
                    <p style="color: white"><font size="2">Contact <img src="../image/icon/phone.svg" style="width: 20px; height: 20px;-webkit-filter: invert(100%);"> <br>T : (+62)22 - 7798983<br>T : (+62)22 - 7794545<br>M : (+62)81 - 1234734<br>S : (+62)81 - 22323328</font></p>
                </div>
                <div class="col">
                    <p style="color: white"><font size="2"><br><img src="../image/icon/email.svg" style="width: 20px; height: 20px;-webkit-filter: invert(100%);"> informatika@unpad.ac.id<br><img src="../image/icon/globe.svg" style="width: 20px; height: 20px;-webkit-filter: invert(100%);">  informatika.unpad.ac.id</font></p>
                </div>
            </div>
        </div>
		
		<script src="../source/assets/js/vendor/jquery-slim.min.js"></script>
		<script src="../source/assets/js/vendor/popper.min.js"></script>
		<script src="../source/js/bootstrap.min.js"></script>
	</body>
</html>