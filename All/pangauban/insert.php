<?php 
require 'connect.php';
if (isset($_POST["submit"]) ) {
	if(insert($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php'; 
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan');
				document.location.href = 'index.php'; 
			</script>
		";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Tambah Data</title>
</head>
<body style="font-family: cambria;">
	<h2>Halaman Tambah Data</h2>
	<table cellpadding="5" cellspacing="0">
		<form action="" method="post">
			<tr>
				<td>
					<label for="nama">Nama</label>
				</td>
				<td>
					<input type="text" name="nama" id="nama" autocomplete="off" required autofocus>
				</td>
			</tr>
			<tr>
				<td>
					<label for="usia">Usia</label>
				</td>
				<td>
					<input type="number" name="usia" id="usia" autocomplete="off" required="">
				</td>
			</tr>
			<tr>
				<td>
					<label for="jenis_kelamin">Jenis Kelamin</label>
				</td>
				<td>
					<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" required="">Laki-laki
					<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>
					<label for="golongan_darah">Gol. Darah</label>
				</td>
				<td>
					<select style="font-size: 12pt; font-family: cambria;"name="golongan_darah" id="golongan_darah" required="">
						<option value="">Pilihan</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
						<option value="O">O</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="kontak">Kontak</label>
				</td>
				<td>
					<input type="number" name="kontak" id="kontak" autocomplete="off" required="">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit" name="submit">Simpan</button>
					<button><a style="text-decoration: none; color: black;" href="index.php">Batal</a></button>
				</td>
			</tr>
		</form>
	</table>
</body>
</html>