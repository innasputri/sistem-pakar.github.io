<?php
include "admin/koneksi.php";
//--- deklarasi variabel ---
$namauser=$_GET['username_user'];
$password=$_GET['password_user'];
//-------------------------
$sql="SELECT * FROM tb_admin WHERE username_user='$namauser'";
$result=mysqli_query($koneksi,$sql);
$baris=mysqli_fetch_array($result);
//echo $baris;
	//-- cek keadaan namauser
	if(!$baris){
	echo"usersalah";
	header("location: login.php?usr=error&pass=0&bag=pencari");
	}else{
	//-- cek password
	if ($password!=$baris['password']){
		echo"passwordsalah";
	header("location: login.php?usr=0&pass=error&bag=pencari");
		}else{
		echo"sukses";
		}
	}
?>