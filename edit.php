<?php 
include "koneksi.php";
$query_ambil_berita	= mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '".$_GET['id']."'"); 
$data_berita 		= mysqli_fetch_array($query_ambil_berita); 
?>

<html>
<head>
<title>Edit berita</title>
</head>

<body>
	<form action="aksi_edit_beritaa.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id_berita" value="<?php echo $data_berita['id_berita']; ?>">
	
		<table border="0">
			<tr><td>Judul</td><td><input type="text" name="judul" size="50" required value="<?php echo $data_berita['judul']; ?>"></td></tr>
			<tr><td>Kategori</td><td>
				<select name="kategori">
					<option value="">-- Kategori --</option>
					<option value="Music">Music</option>
					<option value="Film">Film</option>
				</select>
			</td></tr>
			<tr><td>Penulis</td><td><input type="text" name="penulis" size="10" required value="<?php echo $data_berita['penulis']; ?>"></td></tr>
			<tr><td>File Gambar</td><td><input type="file" name="gambar" required></td></tr>
			<tr><td>Isi</td><td><textarea name="isi_berita" rows="15" cols="40" required><?php echo $data_berita['isi_berita']; ?></textarea></td></tr>
			<tr><td></td><td><input type="submit" value="Simpan"></td></tr>
		</table>
		
	</form>
</body>
</html>