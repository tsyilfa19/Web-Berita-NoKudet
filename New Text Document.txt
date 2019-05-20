<?php 
	include ('koneksi');

    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysqli_query("select * from sepatu where nama like '%".$cari."%'"); 
    } else {
        $data = mysqli_query("select * from sepatu"); 
    }
?>