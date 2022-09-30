<!DOCTYPE html>
<html>
<head>
	<title>Balai Kesehatan Umum Al-Manar</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.contoh1 {font-size:10px; line-height: 10px;}

</style>
<body>	
	<div class="container">			
		<!-- membuat jumbotron -->
		<div class="jumbotron">
			<center>			
				<h2>Silahkan Masukkan Data Diri Anda</h2>
				
                <form onSubmit="return validasi(this)" method="post" name="form1" target="_self" action="pasienaddsim.php">
<table class="tab" width="415" style="border:0px;"  border="0" align="center">
    <tr> 
      <td colspan="2"><div align="center"></div></td>
    </tr>
	<tr> </tr>
    <tr>
      <td><p class="contoh1" style="width: 200px; height: 10px;">Nama &#42;</td></p>
      <td><input name="TxtNama" id="TxtNama" type="text" size="35" maxlength="30"><p class="contoh1"></p></td>
    </tr>
    <tr> 
      <td><p class="contoh1" style="width: 200px; height: 10px;">Jenis Kelamin &#42;</td></p>
      <td> 
      <select name="cbojk" id="cbojk">
      <option value="0" selected="selected">-Pilih-</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Wanita">Wanita</option>
      </select>
      <p class="contoh1"></p>
      </td>
    </tr>
	<tr></tr>
    <tr> 
      <td><p class="contoh1" style="width: 200px; height: 10px;">Umur &#42;</td></p> 
      <td><input name="TxtUmur" id="TxtUmur" type="text" size="2" maxlength="3"> Tahun<p class="contoh1"></p></td>
    </tr>
	<tr> 
      <td width="76"><p class="contoh1" style="width: 200px; height: 10px;">No.Whatsapp &#42;</td></p>
      <td width="312"> 
      <input name="TxtWhatsapp" id="TxtWhatsapp" type="text" size="35" maxlength="60"><p class="contoh1"></p></td>
    </tr>
    <tr> 
      <td width="76"><p class="contoh1" style="width: 200px; height: 10px;">Alamat Domisili &#42;</td></p>
      <td width="312"> 
      <input name="TxtAlamat" id="TxtAlamat" type="text" size="35" maxlength="60"><p class="contoh1"></p></td>
    </tr>
    <tr>
      <td width="76"><p class="contoh1" style="width: 200px; height: 10px;">Nama Orang Tua &#42;</td></p>
      <td width="">
      <input type="text" name="textnamaorangtua" id="textnamaorangtua" size="35" maxlength="25"><p class="contoh1"></p></td>
    </tr>
	<tr> 
      <td width="76"><p class="contoh1" style="width: 200px; height: 10px;">Program Studi &#42;</td></p>
      <td width="312"> 
      <input name="TxtProdi" id="TxtProdi" type="text" size="35" maxlength="60"><p class="contoh1"></p></td>
    </tr>
	<tr> 
      <td><p class="contoh1" style="width: 200px; height: 10px;">Semester &#42;</td></p> 
      <td><input name="TxtSemester" id="TxtSemester" type="text" size="2" maxlength="2"><p class="contoh1"></p></td>
    </tr>
	<tr> 
      <td><p class="contoh1" style="width: 350px; height: 10px;">Kepemilikan Asuransi Kesehatan &#42;</td></p>
      <td> 
      <select name="asuransi" id="asuransi">
      <option value="0" selected="selected">-Pilih-</option>
      <option value="BPJS Mandiri">BPJS Mandiri</option>
      <option value="KIS">KIS</option>
	  <option value="ASKES">ASKES</option>
	  <option value="Tidak Punya">Tidak Punya</option>
      </select>
      <p class="contoh1"></p>
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" class="btn btn-primary" name="Submit" value="Lanjut">
        <input type="reset" class="btn btn-warning" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form><br/><br/>
			</center>
		</div>
		<!-- akhir jumbotron -->

		<div class="col-sm-6 col-md-3">
	  
		</div>

		<br><br><br>
        <br><br><br>
	</div>
	<br/>
	
	
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