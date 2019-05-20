<?php
include "koneksi.php";

$id_berita	= $_POST['id_berita'];
$judul		= $_POST['judul'];
$kategori	= $_POST['kategori'];
$penulis	= $_POST['penulis'];
$isi_berita = $_POST['isi_berita'];

$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "gambar/$nama_file";


if (!empty($lokasi_file)) {
	if (move_uploaded_file($lokasi_file,$direktori)) {
				
		$query_tambah	= mysqli_query($koneksi, "INSERT INTO berita (kategori, judul, penulis, isi_berita, tgl_posting, gambar) VALUES ('$kategori', '$judul', '$penulis', '$isi_berita', NOW(), '$nama_file')");
	
	echo "INSERT INTO berita (kategori, judul, penulis, isi_berita, gambar) VALUES ('$kategori', '$judul', '$penulis', '$isi_berita', '$nama_file')";
		//header("Location: list.php");
	} else {
		$query_tambah	= mysqli_query($koneksi, "INSERT INTO berita VALUES ('', '$kategori', '$judul', '$penulis', '$isi_berita', 'NOW()', '$nama_file')");
	
	echo 1;
	echo 1;
		//header("Location: list.php");
	}
} else {
	$query_tambah	= mysqli_query($koneksi, "INSERT INTO berita VALUES ('', '$kategori', '$judul', '$penulis', '$isi_berita', 'NOW()', '$nama_file')");
	
	echo 1;
	echo 1;
	echo 1;
		//header("Location: list.php");
}
?>