<?php
include 'koneksi.php';
//simpan data ke variabel
$nama_lengkap 	= $_POST['nama_lengkap'];
$no_ktp 	    = $_POST['no_ktp'];
$no_hp			= $_POST['no_hp'];
$tempat_wisata 	= $_POST['tempat_wisata'];
$tgl            = $_POST['tgl'];
$p_dewasa       = $_POST['p_dewasa'];
$p_anak         = $_POST['p_anak'];
$harga_tiket    = $_POST['harga_tiket'];
$total_bayar    = $_POST['total_bayar'];

$query = "INSERT INTO pengunjung (nama_lengkap, no_ktp, no_hp, tempat_wisata, tgl, p_dewasa, p_anak, harga_tiket, total_bayar)
          VALUES ('$nama_lengkap', '$no_ktp', '$no_hp', '$tempat_wisata', '$tgl', '$p_dewasa', '$p_anak', '$harga_tiket', '$total_bayar')";
$result = mysqli_query($conn, $query);


     // periksa query apakah ada error
if(!$result){
     die ("Query gagal dijalankan: ".mysqli_error($conn).
          " - ".mysqli_error($conn));
     }else{
     echo "<script>window.location='tiket.php';</script>";
     }
?>