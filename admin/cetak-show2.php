<?php
require_once("../assets/fpdf/fpdf.php");
require_once("koneksi.php");

// ambil dari url
$get_id_pasien = $_GET['idpasien'];
// ambil dari database
$query = "SELECT * FROM tbpasien WHERE idpasien = $get_id_pasien";
$hasil = mysqli_query($koneksi, $query);


// anyar
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(10,10); 


$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
// Logo
$pdf->Image('../images/pratama2.png',15,8,25);
$pdf->Cell(220,8,'Laporan Pasien Hasil Deteksi Awal Gangguan Kesehatan Mental',0,1,'C');
$pdf->Cell(220,8,'Balai Kesehatan Umum Al-Manar',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(220,8,'Jalan Budi Utomo No.10 Ronowijayan Siman Ponorogo 63471 Jawa Timur Indonesia',0,1,'C');


$pdf->Ln(6);

// Membuat garis lurus untuk kop surat
$pdf->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $pdf->Cell(0,0,'',1,1,'C');
        }

$pdf->Ln(5);


$pdf->SetFont('Arial','',10);
// $pdf->Cell(20,10,'Nama',1,0,'C');
// $pdf->Cell(25,10,'Jenis Kelamin',1,0,'C');
// $pdf->Cell(15,10,'Umur',1,0,'C');
// $pdf->Cell(20,10,'Alamat',1,0,'C');
// $pdf->Cell(20,10,'Tanggal',1,0,'C');
// $pdf->Cell(95,10,'Hasil Diagnosa',1,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->cell(45,10,'Data Diri Pasien',0,1,'L');


// $thas = mysqli_query($koneksi, "SELECT persentase FROM tb_hasil WHERE idpasien = $get_id_pasien");
$thas = mysqli_query($koneksi, "SELECT * FROM `tb_hasil` INNER JOIN `tb_penyakit` ON tb_hasil.kdpenyakit = tb_penyakit.kdpenyakit WHERE idpasien = $get_id_pasien");
while($data = mysqli_fetch_array($hasil)) {

    $pdf->SetFont('Arial','',10);
    
    $pdf->cell(45,10,'Nama',0,0,'L');
    $pdf->cell(2,10,':',0,0,'L');
    $pdf->Cell(45,10,$data['nama'],0,1,'L');

    $pdf->cell(45,10,'Jenis Kelamin',0,0,'L');
    $pdf->cell(2,10,':',0,0,'L');
    $pdf->Cell(45,10,$data['kelamin'],0,1,'L');

    $pdf->cell(45,10,'Umur',0,0,'L');
    $pdf->cell(2,10,':',0,0,'L');
    $pdf->Cell(45,10,$data['umur'].' Tahun ',0,1,'L');

    $pdf->cell(45,10,'Alamat Domisili',0,0,'L');
    $pdf->cell(2,10,':',0,0,'L');
    $pdf->Cell(45,10,$data['alamat'],0,1,'L');

    $pdf->cell(45,10,'Nama Orang Tua',0,0,'L');
    $pdf->cell(2,10,':',0,0,'L');
    $pdf->Cell(45,10,$data['namaorangtua'],0,1,'L');

    $pdf->cell(45,10,'Program Studi',0,0,'L');
    $pdf->cell(2,10,':',0,0,'L');
    $pdf->Cell(45,10,$data['prodi'],0,1,'L');

    $pdf->cell(45,10,'Semester',0,0,'L');
    $pdf->cell(2,10,':',0,0,'L');
    $pdf->Cell(45,10,$data['semester'],0,1,'L');

    $pdf->cell(45,10,'Kepemilikan Asuransi',0,0,'L');
    $pdf->cell(2,10,':',0,0,'L');
    $pdf->Cell(45,10,$data['asuransi'],0,1,'L');

    $pdf->cell(45,10,'Tanggal Pemeriksaan',0,0,'L');
    $pdf->cell(2,10,':',0,0,'L');
    $pdf->Cell(45,10,$data['tanggal'],0,1,'L');

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',10);
    $pdf->cell(45,10,'Hasil Diagnosa',0,0,'L');
    $pdf->cell(2,10,':',0,1,'L'); 
    // while($datas = mysqli_fetch_array($thas)) {
    //     $pdf->Cell(45,10,'>'.' '.$datas['nama_penyakit'].''.$datas['persentase'].'%',0,1,'L');
    //     }
    $pdf->SetFont('Arial','',10);
    while($datas = mysqli_fetch_array($thas)) {
        // $pdf->Cell(20,10,$datas['persentase'],1,1,'C');
        $pdf->Cell(95,10,$datas['nama_penyakit'].' = '.$datas['persentase'].'%',1,1,'L');
    }


    $pdf->Ln(15);
    $pdf->SetFont('Arial','',10);
    $pdf->Text(150,220, 'Ponorogo, ' . $data['tanggal']);
    $pdf->Text(150,225, 'Admin BKU Al-Manar');
    $pdf->Text(150,230, 'Bayu Nuryanto, S.Kep., Ns.');
    





    

    //$pdf->Cell(25,10,$data['kelamin'],1,0,'C');
    //$pdf->Cell(15,10,$data['umur'],1,0,'C');
    //$pdf->Cell(20,10,$data['alamat'],1,0,'C');
    //$pdf->Cell(20,10,$data['tanggal'],1,0,'C');
    //$pdf->Cell(30,10,$data['namaorangtua'],1,0,'C');
    //while($datas = mysqli_fetch_array($thas)) {
        // $pdf->Cell(20,10,$datas['persentase'],1,1,'C');
        // $pdf->Cell(95,10,$datas['nama_penyakit'].' = '.$datas['persentase'].'%',1,1,'C');


    
    // $pdf->Cell(20,10,$data['nama'],1,0,'C');
    // $pdf->Cell(25,10,$data['kelamin'],1,0,'C');
    // $pdf->Cell(15,10,$data['umur'],1,0,'C');
    // $pdf->Cell(20,10,$data['alamat'],1,0,'C');
    // $pdf->Cell(20,10,$data['tanggal'],1,0,'C');
    // //$pdf->Cell(30,10,$data['namaorangtua'],1,0,'C');
    // while($datas = mysqli_fetch_array($thas)) {
    //     // $pdf->Cell(20,10,$datas['persentase'],1,1,'C');
    //     $pdf->Cell(95,10,$datas['nama_penyakit'].' = '.$datas['persentase'].'%',1,1,'C');
    }

//}

$pdf->Output();
?>

<!-- set penomoran
$nomor = 1;
    $pdf->cell(45,7,'NIK',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['nik_warga']), 0, 1, 'L');

    $pdf->cell(45,7,'Nama',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['nama_warga']),0 , 17), 0, 1, 'L');

    $pdf->cell(45,7,'Tempat Lahir',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_warga[0]['tempat_lahir_warga']), 0, 1, 'L');

    $pdf->cell(45,7,'Tanggal Lahir',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, ($data_warga[0]['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($data_warga[0]['tanggal_lahir_warga'])) : '', 0, 1, 'L');

    $pdf->cell(45,7,'Jenis Kelamin',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['jenis_kelamin_warga']), 0, 1), 0, 1, 'L');

    $pdf->cell(45,7,'Alamat KTP',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['alamat_ktp_warga']), 0, 50), 0, 1, 'L');

    $pdf->cell(45,7,'Alamat',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['alamat_warga']), 0, 50), 0, 1, 'L');

    $pdf->cell(45,7,'Desa/Kelurahan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['desa_kelurahan_warga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Kecamatan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['kecamatan_warga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Kabupaten/Kota',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['kabupaten_kota_warga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Provinsi',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['provinsi_warga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Negara',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_warga[0]['negara_warga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'RT',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(7, 7, strtoupper($data_warga[0]['rt_warga']), 0, 1, 'L');

    $pdf->cell(45,7,'RW',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(7, 7, strtoupper($data_warga[0]['rw_warga']), 0, 1, 'L');

    $pdf->cell(45,7,'Agama',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(20, 7, strtoupper($data_warga[0]['agama_warga']), 0, 1, 'L');

    $pdf->cell(45,7,'Pendidikan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(16, 7, strtoupper($data_warga[0]['pendidikan_terakhir_warga']), 0, 1, 'L');

    $pdf->cell(45,7,'Pekerjaan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(20, 7, strtoupper($data_warga[0]['pekerjaan_warga']), 0, 1, 'L');

    $pdf->cell(45,7,'Status Kependudukan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(24, 7, strtoupper($data_warga[0]['status_warga']), 0, 1, 'L');

	$pdf->Ln(10); -->