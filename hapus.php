<?php
include "koneksi.php";

$query_hapus = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita = '".$_GET['id_berita']."'");

header("Location: list.php");

?>