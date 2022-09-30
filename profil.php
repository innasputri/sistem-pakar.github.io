<!DOCTYPE html>
<html>
<head>
	<title>Balai Kesehatan Umum Al-Manar</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>	
	<!-- membuat menu navigasi -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><?php include("_header.php");?></a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="pasien_add_fm.php">Konsultasi<span class="sr-only">(current)</span></a></li>
					<!-- <li><a href="pasien_add_fm2.php">Demo</a></li> -->
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="daftar_penyakit.php">Daftar Penyakit</a></li>
					<li><a href="login/index.php">Login</a></li>
					<!-- <li><a href="pasien_add_fm.php">Proses Diagnosa <span class="sr-only">(current)</span></a></li>
					<li><a href="pasien_add_fm2.php">Demo</a></li> -->
					<!-- <li><a href="pasien_add_fm.php">Demo</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="daftar_penyakit.php">Daftar Penyakit</a></li> -->
				</ul>
				
				<ul class="nav navbar-nav navbar-right">					
					<!-- <li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-login">Login Administrator</button></li> -->
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	

	<!-- Modal -->
	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Login</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Login</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Daftar</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Daftar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- akhir modal -->
     
	<!-- akhir menu navigasi -->

    <div class="container">			
		<!-- membuat jumbotron -->
		<div class="jumbotron">
			<center>			
				<h2>Tentang Balai Kesehatan Umum Al-Manar </h2>
				<p align="middle"><img src="images/bku_almanar.jpeg" style="float:center; margin:2px 10px 3px 0px; border-radius:3px 0px 0px 3px;"> <br/>
<p align="justify">Balai Kesehatan Umum (BKU) Al-Manar merupakan layanan kesehatan di Universitas Muhammadiyah Ponorogo yang beridiri sejak tahun 2018 dan beralamat di Jl. Budi Utomo No.10 Ronowijayan. BKU Al-Manar menyediakan fasilitas kesehatan diantaranya pengobatan umum, rawat luka, pemeriksaan laboratorium sederhana (asam urat, gula darah, kolesterol), pengajuan asuransi kesehatan serta layanan konsultasi psikologis. Layanan konsultasi psikologis ini bertujuan untuk memberikan dukungan kepada mahasiswa di Universitas Muhammadiyah Ponorogo yang membutuhkan dukungan psikologis. Layanan konsultasi ini sangat bermanfaat sebagai sarana mengungkapkan emosi, membuka sudut pandang baru, menggali masalah sekaligus solusinya serta menjaga kesehatan fisik untuk menunjang motivasi belajar dan prestasi mahasiswa. </p>
				</p>

			</center>
		</div>
	<!-- akhir jumbotron --></div>
	<br/>
	<br><br><br><br>
	
	<div class="clearfix"></div>
		
	<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
		<div class="container">	
			<center>
				
			<ul class="nav navbar-nav">
				<li><a href="#">Balai Kesehatan Umum Al-Manar</a></li>				
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Develop by Innas Putri Agung</a></li>									
			</ul>
			</center>		
		</div>
	</nav>
	
</body>
</html>