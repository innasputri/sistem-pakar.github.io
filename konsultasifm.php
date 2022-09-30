<!DOCTYPE html>
<html>

<head>
	<!-- <title>Balai Kesehatan Umum Al-Manar</title> -->

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<style type="text/css">
		.form {
			width: 99%;
			background: linear-gradient(to left, #FFF, #EEE);
			border: 1px solid #CCC;
			border-radius: 5px 5px;
			padding: 3px 3px 3px 5px;
		}

		.form p {
			font-weight: bold;
			font-size: 12pt;
		}

		p {
			border: 0px solid #03F;
		}

		.Y1 {
			text-align: center;
			border: 1px solid #C30;
			background: #F66;
			float: left;
			width: 220px;
		}

		.Y2 {
			text-align: center;
			border: 1px solid #C30;
			background: #FF9;
			float: left;
			width: 220px;
		}

		.Y1r2 {
			text-align: center;
			border: 1px solid #C30;
			background: #933;
			float: left;
			width: 220px;
			margin-top: -80px;
		}

		.Y2r2 {
			text-align: center;
			border: 1px solid #C30;
			background: #933;
			float: left;
			width: 220px;
			margin-top: -80px;
		}

		.X1 {
			text-align: center;
			border: 1px solid #0F0;
			background: #0C9;
			float: left;
			width: 220px;
		}

		.X2 {
			text-align: center;
			border: 1px solid #33C;
			background: #06F;
			float: left;
			width: 220px;
		}

		.teta1 {
			text-align: center;
			border: 1px dashed #C30;
			background: linear-gradient(to right, #0CF, #39F);
		}

		.teta2 {
			text-align: center;
			border: 1px dashed #9C0;
			background: linear-gradient(to right, #0CF, #39F);
		}

		.X1baris2 {
			border: 1px solid #36F;
		}

		.densitas {
			border: 2px solid #CC0;
			padding: 3px 3px 3px 3px;
			text-align: center;
			display: block;
			float: left;
			width: 220px;
		}

		.kolom2X {
			border: 1px solid #06C;
			margin-top: -100px;
		}
	</style>
</head>

<body style="background-color:#000000;">
	<!-- membuat menu navigasi -->
	

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
		<div style="background-color:#ADD8E6;" class="jumbotron">
			<center>
			<h1><strong> <font face="Candara" color="#35455d" > Proses Konsultasi Gangguan Kesehatan Mental</font></strong></h1>
				<?php include "admin/koneksi.php"; ?>
				<?php include "admin/koneksi2.php"; ?>
				<table width="750" border="1" align="center" class="table table-striped table-bordered">
					<tr>
						<td style="background-color:#87CEFA;" width="786">
						<h3><font face="Candara" color="blue">Petunjuk Pengisian :</font></h3>
						<center><font face="Candara" size="4">Proses konsultasi terdiri dari 21 pertanyaan. Selanjutnya, anda diminta untuk menjawab dengan cara klik opsi "iya" apabila gejala tersebut sesuai dengan kondisi anda dan klik opsi "tidak" apabila gejala tersebut tidak sesuai dengan dengan pengalaman yang anda rasakan selama satu minggu belakangan ini. Bacalah dan jawab setiap gejala dengan teliti dan seksama.</font></center>
						</td>
					</tr>
					<tr>
						<!-- <tr>
						<td style="background-color:#abc4ff;" width="786" style="text-align:justify;">
							<center>Selanjutnya, anda diminta untuk menjawab dengan cara klik opsi "iya" apabila gejala tersebut sesuai dengan kondisi anda dan klik opsi "tidak" apabila gejala tersebut tidak sesuai dengan dengan pengalaman yang anda rasakan selama satu minggu belakangan ini. Bacalah dan jawab setiap gejala dengan teliti dan seksama. </strong></center>
							<p> </p>
						</td>
				

					</tr>
					<tr> -->

						<td id="container" style="padding:3px 3px 7px 3px;background-color:white; padding-top:10px;">

							<form method="post" id="form">
								<?php
								//-- menampilkan daftar gejala
								//$arrKDGejala=array();
								//$arrKDGejalaSelect=array();

								$sqli = "SELECT * FROM tb_gejala ORDER BY id ASC ";
								$result = $db->query($sqli);
								$counter = 0;
								while ($row = $result->fetch_object()) {
									//echo "<input type='checkbox' name='evidence[]' value='{$row->id}'" . (isset($_POST['evidence'])?(in_array($row->id,$_POST['evidence'])?" checked":""):"") . "> {$row->kdgejala} {$row->gejala}<br>";

									//bootstrap flex format
									echo "<div class='align-items-center justify-content-center' style='background-color:white; margin-bottom:10px;'>";
									echo "<input class='form-control' type='checkbox' name='evidence[]' id='form-" . $counter . "' value='{$row->id}' style='display:none;' " . (isset($_POST['evidence']) ? (in_array($row->id, $_POST['evidence']) ? " checked" : "") : "") . ">";
									//print title
									echo "<label class='bg-white border p-2' style='padding:5px;border:1px solid #99ccff; border-radius:5px;display:block;padding-bottom:0;font-size:13pt;' for='form-" . $counter . "'>{$row->id}. {$row->gejala}";
									// echo "Saran : <p style='margin: 10px;max-height:300px;overflow:auto; border:3px solid #99ccff; color:#999999; letter-spacing:2px;'>".$dataS['solusi']."</p><hr>";
									//radio button on switch fill the input, if not fill the input with empty value
									echo '<br><div class="p-2 w-50" style="width:25%;display:inline;margin-right:10px;"><input type="radio" name="form-' . $counter . '" value="' . $row->id . '" onclick="document.getElementById(\'form-' . $counter . '\').checked=true" ' . (isset($_POST['evidence']) ? (in_array($row->id, $_POST['evidence']) ? " checked" : "") : "") . '> <label>Ya</label></div>';
									echo '<br><div class="p-2 w-50" style="width:25%;display:inline;"><input type="radio" name="form-' . $counter . '" value="0" onclick="document.getElementById(\'form-' . $counter . '\').checked=false"> <label>Tidak</label></div></label>';
									echo "</div>";

									$counter++;
								}
								?>

								<center><button type="submit" class="btn btn-primary diagnosa-button" style="margin: 20px 0;">Proses Diagnosa Penyakit</button></center>
							</form>

							<!-- <p style="font-weight:bold; text-align:center; background:#06F;"><strong>Menentukan Nilai Densitas (m) Awal</strong></p> -->
							<!-- <p style="font-weight:bold; text-align:center; background:#FFE4C4;"><strong>Menentukan Hasil Diagnosa</strong></p>"; -->
							<?php

							//mengambil nilai gejala yang dipilih
							if (isset($_POST['evidence'])) {
								if (count($_POST['evidence']) < 2) {
									echo "Pilih minimal 2 gejala";
									echo "<p style='font-weight:bold; text-align:center; background:#FFE4C4;'><strong>Menentukan Hasil</strong></p>";
								} else {
									echo "<br>";
									echo "<p style='font-weight:bold; text-align:center; background:#FFE4C4;'><strong>Menentukan Hasil</strong></p>";
									echo "<div class='form'><p>Gejala Yang dipilih :</p>";
									$arrKDGejalaSelect = $_POST['evidence'];
									foreach ($arrKDGejalaSelect as $kdGSelect) {
										echo $kdGSelect . " | ";
										$queryG = mysqli_query($koneksi, "SELECT * FROM tb_gejala WHERE id='$kdGSelect' ");
										while ($dataG = mysqli_fetch_array($queryG)) {
											echo $dataG['gejala'] . "<br>";
										}
									}
									echo "</div>";
									$sql = "SELECT GROUP_CONCAT(b.kdpenyakit), a.cf, a.id_evidence
			FROM tb_rules a
			JOIN tb_penyakit b ON a.id_problem=b.id
			WHERE a.id_evidence IN(" . implode(',', $_POST['evidence']) . ") 
			GROUP BY a.id_evidence ORDER BY a.id_evidence ASC ";
									$result = $db->query($sql);
									$evidence = array();
									//$gejalaSelect=array();
									while ($row = $result->fetch_row()) {
										//print_r($row[2]);
										$evidence[] = $row;
										//$gejalaSelect[]=$row[0];
										//masukkan kode perhitungannya dibawah ini

									}
									$no = 0;
									echo "<br>";
									// echo "<div class='form'><p>Densitas (m) Awal<p>";
									echo "<div class='form'><p>Menentukan Nilai<p>";
									echo "<table border='1' width='100%' class='table table-striped table-hover table-bordered'> ";
									// echo "<tr><td colspan='5'><center>Tabel 1 Densitas (m) Awal</center</td></tr>";
									echo "<tr><td colspan='5'><center>Tabel Nilai Gejala</td></tr>";
									echo "<tr>";
									echo "<td><strong>No</strong></td>";
									echo "<td><strong>Gejala</strong></td>";
									echo "<td><strong>Penyakit</strong></td>";
									// echo "<td><strong>Densitas</strong></td>";
									echo "<td><strong>Belief</strong></td>";
									echo "<td><strong>Plausability</strong></td>";
									echo "</tr>";
									foreach ($evidence as $kdgejala) {
										echo "<tr>";
										$no = $no + 1;
										echo "<td>$no</td>";
										echo "<td>";
										$queryG = mysqli_query($koneksi, "SELECT * FROM tb_gejala WHERE id='$kdgejala[2]' ");
										$dataG = mysqli_fetch_array($queryG);
										echo $dataG['id'] . " | " . $dataG['gejala'] . "<br>";
										echo "</td>";
										echo "<td>";
										print_r($kdgejala[0]);
										echo "</td>";
										echo "<td>";
										print_r($kdgejala[1]);
										echo "</td>";
										echo "<td>";
										print_r(1 - $kdgejala[1]);
										echo "</td>";
										echo "</tr>";
									}
									unset($kdgejala);
									echo "</table>";
									echo "</div>";
							?>
									<!--<p style="font-weight:bold; text-align:center; background:#06F;"><strong>Menentukan Nilai Densitas (m) Baru</strong></p>
<?php
									//--- menentukan environement
									$sql = "SELECT GROUP_CONCAT(kdpenyakit) FROM tb_penyakit ";
									$result = $db->query($sql);
									$row = $result->fetch_row();
									$fod = $row[0];
									//$densitas_baru=array(); echo "<br>";
									echo "<table border='1' width='750'>";
									//menghitung nilai densitas (m) baru
									while (!empty($evidence)) {
										echo "<tr><td colspan='3'><center>Tabel 2 :Aturan kombinasi untuk m<sub>3</sub></center</td></tr>";
										echo "<tr>";
										//nilai pada Y1 baris atas
										echo "<td width='250'>&nbsp;</td>";
										echo "<td width='250'>";
										$densitas1[0] = array_shift($evidence);
										echo "<span class='Y1'>M<sub>2</sub>";
										echo "{";
										print_r($densitas1[0][0]);
										echo "}<br>";
										print_r($densitas1[0][1]);
										echo "</span>";
										echo "</td>";
										echo "<td width='250'>";
										//nilai pada Y2 baris atas
										$densitas1[1] = array($fod, 1 - $densitas1[0][1]);
										echo "<span class='Y2'>M<sub>2</sub>{&theta;}<br>";
										$Y2 = 1 - $densitas1[0][1];
										echo " $Y2</span>";
										$densitas2 = array();
										echo "</td></tr>";
										echo "<tr>";
										echo "<td>";
										if (empty($densitas_baru)) {
											//nilai pada X1 baris 1
											//echo "tidak ada densitas baru<br>";
											$densitas2[0] = array_shift($evidence);
											echo "<span class='X1'>M<sub>1</sub>";
											echo "{";
											print_r($densitas2[0][0]);
											echo "}<br>";
											echo "";
											print_r($densitas2[0][1]);
											echo "<br>";
											echo "</span><br>";
										} else {
											foreach ($densitas_baru as $k => $r) {
												//nilai pada X1 baris 2; jika ad densitas baru
												if ($k != "&theta;") {
													//print_r($densitas2);echo "<br>";
													$densitas2[] = array($k, $r);
													//echo "<span class='X1'>[nilai X1 baris 2 ";
													echo "<span class='X1'>m<sub>$m</sub>{";
													//print_r($densitas2[0][0]); echo "<br>";
													//print_r($densitas2[0][1]);
													print_r($k);
													echo "}<br>";
													print_r($r);
													echo "</span>";
												}
											}
										}
										echo "</td>"; //bagian y1
										echo "<td valign='top' colspan='2' rowspan='2'>&nbsp;</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<td valign='top'>";
										$theta = 1;
										//nilai X1 baris 2 teta
										foreach ($densitas2 as $d) $theta -= $d[1];
										echo "<span class='X2'>M<sub>1</sub>{&theta;}<br>" . $theta . "</span>";
										$densitas2[] = array($fod, $theta);
										//print_r($theta);
										//echo"<p>densitas2[0] = ".print_r($densitas2[0][0])." | densitas2[1] = ".print_r($densitas2[0][1])."</p>";
										$m = count($densitas2);
										echo "count data M = $m";
										echo "</td>";
										echo "<td colspan='2'>y2&nbsp;</td>";
										echo "</tr>";
										echo "<tr>";
										echo "<td>x2&nbsp;</td>";
										echo "<td colspan='2' valign='top'><div class='kolom2X'>";
										$densitas_baru = array();
										for ($y = 0; $y < $m; $y++) {
											for ($x = 0; $x < 2; $x++) {
												if (!($y == $m - 1 && $x == 1)) {
													$v = explode(',', $densitas1[$x][0]);
													$w = explode(',', $densitas2[$y][0]);
													sort($v);
													sort($w);
													$vw = array_intersect($v, $w);
													//mencari nilai irisan	
													if (empty($vw)) {
														echo "<span class='densitas'>kosong";
														$k = "&theta;";
														echo " $k<br>";
														echo $nilaiX1Y1;
														echo "</span>";
													} else {
														//echo "<td rowspan='2'>";
														//echo "<br><span class='teta2'>jika data vw ADA maka tampilkan ";
														$k = implode(',', $vw); //echo "{".print_r($k)."}= $nilaiX1Y1"; 
														echo "<span class='densitas'>";
														$nilaiX1Y1 = $densitas1[$x][1] * $densitas2[$y][1];
														foreach ($vw as $vwHasil) {
															print_r($vwHasil);
														}
														echo "<br>";
														print_r($nilaiX1Y1);
														echo "</span>";
													}
													if (!isset($densitas_baru[$k])) {
														//echo "data Y1r2";
														//echo "<td> y1 r3 ";
														$densitas_baru[$k] = $densitas1[$x][1] * $densitas2[$y][1];
														//echo "<span class='Y1r2'>Y1r2 = "; 
														$k = implode(',', $vw); //echo $k. "<br>"; 
													} else {
														$densitas_baru[$k] += $densitas1[$x][1] * $densitas2[$y][1];
														//echo "<p>M <sub>3b</sub> : "; print_r($densitas_baru[$k]);echo"|"; print_r($densitas1[$x][1]);
													}
												}
											}
										}
										echo "<span class='densitas'>&theta;<br>";
										$dataX2 = $theta;
										$dataY2 = $Y2;
										$Y3 = $dataX2 * $dataY2;
										echo $Y3 . "</span>";
										echo "</div></td></tr>";
										echo "<tr>";
										echo "<td colspan='3'>";
										echo "<p style=' border:none;'>Merujuk pada rumus [DST-07] evidential conflict-nya belum ada, maka nilainya adalah k=0, sehingga dapat dihitung berdasarkan persamaan [DST-06]:</p>";
										echo "<div style='border:1px solid #ccffcc; padding:3px 3px 3px 5px;' >";
										//print_r($densitas_baru);echo"<br>";
										print_r($k);
										echo "<br>";
										print_r($nilaiX1Y1);
										echo "<br>";
										print_r($k);
										echo "<br>"; //print_r($k);echo"<br>";
										foreach ($densitas_baru as $k => $d) {
											echo $d . "[" . $k . "]";
											if ($k != "&theta;") {
												$densitas_baru[$k] = $d / (1 - (isset($densitas_baru["&theta;"]) ? $densitas_baru["&theta;"] : 0));
												//echo "<p>Densitas baru "; print_r($densitas_baru[$k]); echo"=$d /(1-";  echo "</p>";
												//print_r((1-(isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0))); echo "<br>";
												//print_r($densitas_baru["&theta;"]); echo "<br>";
												echo "m<sub>$m</sub>{";
												print_r($k);
												echo "} =$d /(1-(";
												print_r($d);
												echo "<br>";
												echo "m<sub>$m</sub>{";
												print_r($k);
												echo "} = ";
												print_r($densitas_baru[$k]);
												echo "<br>";
											}
										}
										echo "</div>";

										//hasil perhitungan densitas awal m ke n
										echo "<p style='font-weight:bold; border:none;'>Sehingga dari perhitungan #2 didapatkan :</p>";

										foreach ($densitas_baru as $kdPdensitas => $nilaiPDensitas) {
											echo "m<sub>11</sub>(";
											print_r($kdPdensitas);
											echo ") = ";
											print_r($nilaiPDensitas);
											echo "<br>";
										}
										echo "</td></tr>";
									} //## end --menghitung nilai densitas (m) baru
									echo "</table>";
									//--- perangkingan
									unset($densitas_baru["&theta;"]);
									arsort($densitas_baru);
									//print_r ($densitas_baru);
?>
    <p style="font-weight:bold; text-align:center; background:#06F;"><strong>Hasil Perangkingan</strong></p>-->
							<?php
									$arrPenyakit = array();
									$queryPasien = mysqli_query($koneksi, "SELECT * FROM tbpasien ORDER BY idpasien DESC");
									$dataPasien = mysqli_fetch_array($queryPasien);
									$queryP = mysqli_query($koneksi, "SELECT * FROM tb_penyakit");
									while ($dataP = mysqli_fetch_array($queryP)) {
										$arrPenyakit["$dataP[kdpenyakit]"] = $dataP['nama_penyakit'];
									}
									echo "<br>";
									echo "<p style='text-align:center; font-weight:bold; border:none;'>---=== Hasil Diagnosa ===---</p>";
									//print_r($densitas_baru);echo "<hr>"; 
									$dataSama = array();
									$dataSama = array_intersect_key($arrPenyakit, $densitas_baru);
									//print_r($dataSama); echo "<hr>";
									foreach ($dataSama as $k => $a) {
										foreach ($densitas_baru as $kdpenyakit => $ranking) {
											//echo "m<sub>$m</sub>("; print_r($kdpenyakit); echo ") = "; print_r($ranking); echo "<br>";
											//echo "m<sub>$m</sub>( $kdpenyakit | "; print_r($arrPenyakit["$kdpenyakit"]); echo ") = "; 
											//echo " dengan nilai kepercayaan sebesar ".round($densitas_baru[$kdpenyakit]*100,2)."%<br>";
											if ($k == $kdpenyakit) {
												//mengambil solusi penyakit
												$strS = mysqli_query($koneksi, "SELECT * FROM tb_penyakit WHERE kdpenyakit='$k' ");
												$dataS = mysqli_fetch_array($strS);
												echo "<strong>m<sub>$m</sub>( $kdpenyakit | ";
												print_r($arrPenyakit["$kdpenyakit"]);
												echo ") = ";
												echo " dengan nilai kepercayaan sebesar " . round($densitas_baru[$kdpenyakit] * 100, 2) . "%<br></strong>";

												$persen = round($densitas_baru[$kdpenyakit] * 100, 2);
												//menyimpan data pasien
												$idPasien = $dataPasien['idpasien'];
												$querySimpanP = mysqli_query($koneksi, "INSERT INTO tb_hasil (idpasien,kdpenyakit,persentase,tanggal) VALUES ('$idPasien','$k','$persen', NOW() ) ");
											}
										}
									}
									//--- perangkingan
									unset($densitas_baru["&theta;"]);
									arsort($densitas_baru);
									//print_r($densitas_baru);


									//--- menampilkan hasil akhir
									$codes = array_keys($densitas_baru);
									$final_codes = explode(',', $codes[0]);
									$sql = "SELECT GROUP_CONCAT(nama_penyakit)  
        FROM tb_penyakit  
        WHERE kdpenyakit IN('" . implode("','", $final_codes) . "')";
									$result = $db->query($sql);
									$row = $result->fetch_row();
									echo "<br>";
									echo "<br>";

									echo " Kesimpulan hasil diagnosa tertinggi adalah terdeteksi penyakit <b>{$row[0]}</b> dengan derajat kepercayaan " . round($densitas_baru[$codes[0]] * 100, 2) . "%";

									echo "<br>";
									echo "Saran : <p style='margin: 10px;max-height:300px;overflow:auto; border:3px solid #99ccff; color:#999999; letter-spacing:2px;'>" . $dataS['solusi'] . "</p><hr>";
									echo "<p style='font-size:14px' > </p>";
									echo " Keterangan : <br>";
									echo "Jadwal konsultasi lanjutan dengan psikolog di BKU Al-Manar akan diinformasikan melalui whatsapp yang ada pada data diri anda dalam waktu 2x48 jam. 
		";
									echo "082336617455 (Admin BKU Al-Manar)";
									// echo "<p style='text-align:center; font-weight:bold; border:none;'>Persentase Kesimpulan</p>";
									// echo "<p style='text-align:justify; border:none;'>0%-50%   : Sedikit Kemungkinan atau Kemungkinan Kecil</p>";
									// echo "<p style='text-align:justify; border:none;'>51%-79%  : Pasti</p>";
									// echo "<p style='text-align:justify; border:none;'>80%-90%  : Kemungkinan Besar</p>";
									// echo "<p style='text-align:justify; border:none;'>91%-100% : Kemungkinan Besar</p>";
									// echo "<p>Keterangan : Jadwal konsultasi lanjutan dengan psikolog di BKU Al-Manar akan diinformasikan melalui whatsapp anda dalam waktu 2x48 jam </p>";



								}
							}
							?>
						</td>
					</tr>
					<tr>
						<!-- <td width="786" ><center> <strong> Keterangan : Jadwal konsultasi lanjutan dengan psikolog di BKU Al-Manar akan diinformasikan melalui whatsapp yang ada pada data diri anda dalam waktu 2x48 jam. 
			082336617455 (Admin BKU Al-Manar) </strong></center></td> -->
						<!-- <td>&nbsp;</td> -->
					</tr>
				</table>
				<!-- <p><a class="btn btn-primary btn-lg" href="pasien_add_fm.php" role="button">Konsultasi Ulang</a></p> -->
				<!-- <p><a class="btn btn-primary btn-lg" href="cetak-show2.php" role="button">Cetak</a></p> -->
			</center>
		</div>

		<!-- akhir jumbotron -->

		<div class="col-sm-6 col-md-3">
			<p><a class="btn btn-primary btn-lg" href="pasien_add_fm.php" role="button">Konsultasi Ulang</a></p>
			<p> </p>
			<a class="btn btn-primary btn-lg" href="index.php" role="button">Dashboard</a>
		</div>

		<br><br><br>
		<br><br><br>
	</div>
	<br />


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
	<script>
		const container = document.getElementById("container");
		const form = document.getElementById("form");

		// loop form children
		for (let i = 0; i < form.children.length; i++) {
			// show only first child
			if (i > 0) {
				form.children[i].style.display = "none";
			}

			const button = document.createElement("button");
			button.innerHTML = "Berikutnya";
			button.classList.add("btn", "btn-primary", "btn-block");
			button.setAttribute("type", "submit");
			// add button to form children
			form.children[i].appendChild(button);

			// add event listener to button to show next child
			button.addEventListener("click", function(event) {
				event.preventDefault();
				form.children[i].style.display = "none";
				form.children[i + 1].style.display = "block";
			});

			// last child remove button
			if (i === form.children.length - 1) {
				form.children[i].removeChild(button);
			}
		}
	</script>

</body>

</html>