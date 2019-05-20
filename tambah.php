<html>
<head>
<title>Tambah berita</title>
</head>

<body>
	<form action="aksi_tambah_beritaa.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id_berita" value="">
	
		<table border="0">
			<tr><td>Judul</td><td><input type="text" name="judul" size="50" required value=""></td></tr>
			<tr><td>Kategori</td><td>
				<select name="kategori" required>
					<option value="">-- Kategori --</option>
					<option value="Music">Music</option>
					<option value="Film">Film</option>

				</select>
			</td></tr>
			<tr><td>Penulis</td><td><input type="text" name="penulis" size="10" required value=""></td></tr>
			<tr><td>File Gambar</td><td><input type="file" name="gambar" required></td></tr>
			<tr><td>Isi</td><td><textarea name="isi_berita" rows="15" cols="40" required></textarea></td></tr>
			<tr><td></td><td><input type="submit" value="Simpan"></td></tr>
		</table>
		
	</form>
</body>
</html>