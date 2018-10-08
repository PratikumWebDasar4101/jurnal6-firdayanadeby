<?php
include_once 'koneksi.php';
if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$hobby = $_POST['hobby'];
	$fakultas = $_POST['fakultas'];
	$Alamat = $_POST['Alamat'];

	$query = "INSERT INTO 'mahasiswa'('nim','nama','kelas','jenis_kelamin','hobby','fakultas','Alamat')
				VALUES 'mahasiswa'('nim','nama','kelas','jenis_kelamin','hobby','fakultas','Alamat')";
	$query_success = mysqli_query($conn,$query);

	if ($query_success) {
		header('location: halamanutama.php');
	}else {
		die(mysqli_error($conn));
	}
}
?>