<!DOCTYPE html>
<html>
	<script src="/source/js/w3.js"></script>
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">IF</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Pendidikan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Penelitian</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Pengabdian</a></li>
                        
						<div class="dropdown">
							<li class="nav-item active">
							<a class="nav-link">Kemahasiswaan</a>
							</li>
							<div class="dropdown-content">
							  <a href="data_mhs.php">Data Mahasiswa</a>
							  <a href="prestasi_mhs.php">Prestasi Mahasiswa</a>
							  <a href="#">Layanan Mahasiswa</a>
							  <a href="eval_lulusan.php">Evaluasi Lulusan</a>
							</div>
						</div>
						
                        <li class="nav-item"><a class="nav-link" href="#">Kerjasama</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Prestasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">E-Learning</a></li>
                    </ul>

                    <!-- Searching form in Navbar -->
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" arial-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        
        
        
        <!-- Carousel of Gallery-->
		<div class="container-fluid" style="padding-top: 20px;padding-bottom: 20px;">
            <h3 class="text-center" style="color:white">Layanan kepada Mahasiswa</h3>
        </div>
        
        <!-- Post -->
		<div class="container" style="background-color: white; border-style: solid;padding-top: 20px;border-top-color: white;border-right-color: transparent;border-left-color: transparent;border-bottom-color: transparent;">
			<div class="row justify-content-md-center" style="padding-bottom:20px;">
				<div class="col">
                    <h3 class="text-center" style="color:cornflowerblue">Bimbingan dan Konseling</h3><br>
					<h3 class="text-center" style="color:cornflowerblue">Minat dan Bakat(Ektra kurikuler)</h3><br>
					<h3 class="text-center" style="color:cornflowerblue">Pembinaan Soft Skill</h3><br>
					<h3 class="text-center" style="color:cornflowerblue">Beasiswa</h3><br>
					<h3 class="text-center" style="color:cornflowerblue">Kesehatan</h3><br>
				</div>
			</div>
        </div>
        
        <!-- Footer -->
        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col">
                    <p class="text-right"><img src="image/gambar/footer.png" alt="footer" style="width: 80px;height: 90px;"></p>
                </div>
                <div class="col">
                    <p style="color:white"><font size="2">Program Studi S1 Teknik Informatika<br>Kampus Unpad Jatinangor<br>Jalan Raya Bandung-Sumedang Km.21<br>Jatinangor, 45363<br>Gedung Ilmu Komputer (PPBS D)</font></p>
                </div>
                <div class="col">
                    <p style="color: white"><font size="2">Contact</font></p>
                    <p style="color: white"><font size="2">T : (+62)22 - 7798983<br>T : (+62)22 - 7794545<br>M : (+62)81 - 1234734<br>S : (+62)81 - 22323328</font></p>
                </div>
                <div class="col">
                    <p>xxxxxxx</p>
                </div>
            </div>
        </div>
		
		<script src="source/assets/js/vendor/jquery-slim.min.js"></script>
		<script src="source/assets/js/vendor/popper.min.js"></script>
		<script src="source/js/bootstrap.min.js"></script>
	</body>
</html>