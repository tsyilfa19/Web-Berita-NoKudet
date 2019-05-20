<?php
include "koneksi.php";

$id_berita	= $_POST['id_berita'];
$judul		= $_POST['judul'];
$kategori	= $_POST['kategori'];
$penulis	= $_POST['penulis'];
$isi_berita		= $_POST['isi_berita'];

$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar/$nama_file";

if (!empty($lokasi_file)) {
	if (move_uploaded_file($lokasi_file,$direktori)) {
		
		$query_ambil_file_gambar_lama	= mysqli_query($koneksi, "SELECT gambar FROM berita WHERE id_berita = '$id_berita'");
		$data_file_gambar_lama			= mysqli_fetch_array($query_ambil_file_gambar_lama);
		
		unlink("gambar/".$data_file_gambar_lama['gambar']);
		
		$query_update	= mysqli_query($koneksi, "UPDATE berita SET judul = '$judul', kategori = '$kategori', penulis = '$penulis', isi_berita = '$isi_berita', gambar = '$nama_file' WHERE id_berita = '$id_berita'");
	
		header("Location: list.php");
	} else {
		$query_update	= mysqli_query($koneksi, "UPDATE berita SET judul = '$judul', kategori = '$kategori', penulis = '$penulis', isi_berita = '$isi_berita', gambar = '$nama_file' WHERE id_berita = '$id_berita'");
	
		header("Location: list.php");
	}
} else {
	$query_update	= mysqli_query($koneksi, "UPDATE berita SET judul = '$judul', kategori = '$kategori', penulis = '$penulis', isi_berita = '$isi_berita', gambar = '$nama_file' WHERE id_berita = '$id_berita'");
	
		header("Location: list.php");
}
?>