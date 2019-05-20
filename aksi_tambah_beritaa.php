<?php

include "koneksi.php";

$id_berita		= $_POST['id_berita'];
$judul			= $_POST['judul'];
$kategori		= $_POST['kategori'];
$penulis		= $_POST['penulis'];
$isi_berita		= $_POST['isi_berita'];

$lokasi_file	= $_FILES['gambar']['tmp_name'];
$tipe_file		= $_FILES['gambar']['type'];
$nama_file	= $_FILES['gambar']['name'];
$direktori		= "gambar/$nama_file";

if (!empty($lokasi_file)) {
	if (move_uploaded_file($lokasi_file, $direktori)) {
		$query_tambah = mysqli_query($koneksi, "Insert into berita values ('', '$kategori','$judul','$penulis','$isi_berita', NOW(),'$nama_file')");
		header ("location: list.php");
	} else {
		$query_tambah = mysqli_query($koneksi, "Insert into berita values ('', '$kategori','$judul','$penulis','$isi_berita', NOW(),'$nama_file')");
		header ("location: list.php");
	} 
} else {
	$query_tambah = mysqli_query($koneksi, "Insert into berita values ('', '$kategori','$judul','$penulis','$isi_berita', NOW(),'$nama_file')");
	header ("location: list.php");
}
		



?>