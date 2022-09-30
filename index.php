<!DOCTYPE html>
<html>
<head>
	<title>Gangguan Kesehatan Mental</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function(){
//alert('asdkfj');
	var namauser;
	var password;
	$("#txtuser").val("");
	$("#txtpassword").val("");
	$("#txtuser").focus();
	// ketika tombol login dikliks
	$("#btnlogin").click (function(){
	namauser=$("#txtuser").val();
	password=$("#txtpass").val();
	if (namauser==''){
		alert("Masukkan Username Anda..!");
		$("#txtuser").focus();
		return false;
		exit();
	}
	if (password==''){
		alert("Masukkan Password Anda..!");
		$("#txtpass").focus();
		return false;
		exit();
	}
	//Cek data base ke file cekuser.php
	$("#status").show();
	datanya = "&namauser="+namauser+"&password="+password;
	$.ajax({
		url: "cekuser.php",
		data: datanya,
		cache: false,
		success: function(msg){
			if (msg=="usersalah"){
				//alert("User salah..");
				$("#lbluser").show();
				$("#txtuser").focus();
				$("#status").hide();
				return false;
				exit();
				}
			if (msg=="passwordsalah"){
				//alert("Password Salah..!");
				$("#lbluser").hide();
				$("#lblpassword").show();
				$("#status").hide();
				exit();
				}
			if (msg=="sukses"){
				//alert("Sukses..!");
				//$("#lblpassword").hide();
				//alert("sukses");
				//$("#status").hide();
				$("#form1").submit();;
				}
		}
	});		
	});
});
</script>
</head>
<body>	
	<!-- membuat menu navigasi -->
	<nav class="navbar navbar-default">
		<div class="container" >
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
					
				</ul>
				
				<!-- <ul class="nav navbar-nav navbar-right">					
					<li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-login">Login Administrator</button></li>
				</ul> -->
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	

	<!-- Modal -->
	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Login Administrator</h4>
				</div>
				<div class="modal-body">
					<form name="form1" method="post" target="_blank" action="admin/index.php">
						<div class="form-group">
							<label>Username :</label>
							<input type="text" class="form-control" id="txtuser">
                            <div id="lbluser" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      Username salah..!
                    </div>
						</div>
						<div class="form-group">
							<label>Password : </label>
							<input type="password" class="form-control" id="txtpass">
                            <div id="lblpassword" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                      Password salah..!
                    </div>
						</div>						
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" id="btnlogin">Login</button>
				</div></form>
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
				<h2><font color="#fbbc05">Selamat Datang di Sistem Deteksi Awal Gangguan Kesehatan Mental </font></h2>
				<p align="middle"><img src="images/mental_health.png" style="float:center; margin:2px 10px 3px 0px; border-radius:3px 0px 0px 3px;"> <br/>
<p align="justify">Gangguan kesehatan mental terdiri dari berbagai masalah, dengan berbagai gejala yang umumnya dicirikan oleh beberapa kombinasi abnormal pada pikiran, emosi, perilaku dan hubungan dengan orang lain. Berikut ini beberapa jenis gangguan kesehatan mental yang akan dibahas yaitu :</p>
<p align="justify"><strong>1. Gangguan Kecemasan Umum (Generalized Anxiety Disorder)</strong> </p>
<p align="justify"> Kecemasan adalah perasaan subjektif dari ketegangan,
ketakutan, kegugupan, dan kekhawatiran yang terkait dengan gairah sistem saraf. Pada konteks pendidikan, kecemasan studi adalah situasi khusus yang merujuk pada kondisi kecemasan yang dialami selama proses studi dan bisa menjadi gangguan kinerja akademik. </p>
<p align="justify"><strong>2. Gangguan Stres </strong></p>
<p align="justify">Stres merupakan pengalaman subyektif yang didasarkan pada persepsi seseorang terhadap situasi yang dihadapinya. Stres berkaitan dengan kenyataan yang tidak sesuai dengan harapan atau situasi yang menekan. Kondisi ini mengakibatkan perasaan cemas, marah dan frustrasi.</p>
<p align="justify"><strong>3. Gangguan Depresi </strong></p>
<p align="justify">Depresi adalah gangguan mental yang umumnya ditandai dengan perasaan depresi, kehilangan minat atau kesenangan, penurunan energi, perasaan bersalah atau rendah diri, sulit tidur atau nafsu makan berkurang, perasaan kelelahan dan kurang konsentrasi. Kondisi tersebut dapat menjadi kronis dan berulang, dan secara substansial dapat mengganggu kemampuan individu dalam menjalankan tanggung jawab sehari- hari.</p>
<p align="justify">
Agar dapat mengetahui jenis gangguan kesehatan mental yang kita derita, maka kita perlu mengenali gejala-gejalanya sejak awal. Urutan tingkatan gangguan mental dari yang paling rendah yaitu berawal dari gangguan kecemasan, kemudian gangguan stres dan yang lebih parah adalah gangguan depresi. </p>
<p align="justify"><strong>Tujuan Sistem :</strong> Sistem ini digunakan untuk mendeteksi awal jenis gangguan kesehatan mental, berdasarkan analisis gejala-gejala yang dialami oleh mahasiswa</p>
<p align="justify"><strong>Manfaat Sistem :</strong> Memberikan informasi prediksi deteksi awal jenis gangguan kesehatan mental kepada mahasiswa yang akan melakukan konsultasi psikologis di Balai Kesehatan Umum Al-Manar.</p>
<p>
</p>
<p><a class="btn btn-primary btn-lg" href="pasien_add_fm.php" role="button">Mulai Konsultasi</a></p>
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