<?php

// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'php/koneksi.php';
 
// menangkap data yang dikirim dari form login
$divisi = $_POST['divisi'];
$password = $_POST['pass'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login where divisi='$divisi' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['divisi'] = $divisi;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:data_barang.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="user"){
		// buat session login dan username
		$_SESSION['divisi'] = $divisi;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:update_barang.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>