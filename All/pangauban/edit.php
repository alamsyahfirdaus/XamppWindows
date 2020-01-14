<?php 
require 'connect.php';

$user_id = $_GET["user_id"];

$goldar = query("SELECT * FROM goldar WHERE user_id = $user_id")[0];

if (isset($_POST["submit"]) ) {
	if(edit($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diperbaharui');
				document.location.href = 'index.php'; 
			</script>
		";
	} else {
		echo " 
		<script>
				alert('data gagal diperbaharui');
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
	<title>Halaman Edit Data</title>
</head>
<body style="font-family: cambria;">
	<h2>Halaman Edit Data</h2>
	<table cellpadding="5" cellspacing="0">
		<form action="" method="post">
			<input type="hidden" name="user_id" value="<?= $goldar["user_id"] ?>">
			<tr>
				<td>
					<label for="nama">Nama</label>
				</td>
				<td>
					<input type="text" name="nama" id="nama" required="" value="<?= $goldar['nama']; ?> " htmlspecialchars>
				</td>
			</tr>
			<tr>
				<td>
					<label for="usia">Usia</label>
				</td>
				<td>
					<input type="text" name="usia" id="usia" required="" value="<?= $goldar['usia']; ?> ">
				</td>
			</tr>
			<tr>
				<td>
					<label for="jenis_kelamin">Jenis Kelamin</label>
				</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="<?= $goldar['jenis_kelamin']; ?>" required="">Laki-laki
					<input type="radio" name="jenis_kelamin" value="<?= $goldar['jenis_kelamin']; ?>">Perempuan
				</td>
			</tr>
			<tr>
				<td>
					<label for="golongan_darah">Gol. Darah</label>
				</td>
				<td>
					<select style="font-family: cambria; font-size: 12pt;" name="golongan_darah" id="golongan_darah" value="<?=$goldar['golongan_darah']; ?>">
						<option>Pilihan</option>
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
					<input type="text" name="kontak" id="kontak" autocomplete="off" value="<?= $goldar['kontak']; ?>">
				</td>
			</tr>
			<tr>
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