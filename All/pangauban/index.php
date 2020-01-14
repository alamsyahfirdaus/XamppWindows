<?php 
require 'connect.php';
$goldar = query("SELECT * FROM goldar ORDER BY user_id DESC");


$jumlahDataPerHalaman = 10;
$jumlahData = count(query("SELECT * FROM goldar"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$goldar = query("SELECT * FROM goldar LIMIT $awalData, $jumlahDataPerHalaman");

if( isset($_POST["search"]) ) {
	$goldar = search($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Administrator</title>
</head>
<body style="font-family: cambria;">
	<h2>Halaman Administrator</h2>
	<form action="" method="post">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>
					<input type="text" name="keyword" placeholder="Pencarian" autocomplete="off" autofocus size="25">
				</td>
				<td>
					<button type="submit" name="search" style="font-weight: bold; ">Cari</button>
				</td>
				<td>
					<button>
						<a style="text-decoration: none; color: black; font-weight: bold;" href="index.php">Refresh</a>
					</button>
				</td>
				<td>
					<button>
						<a style="text-decoration: none; color: black; font-weight: bold;" href="insert.php">Tambah Data</a>
					</button>
				</td>
			</tr>
		</table>
	</form>
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Usia</th>
		<th>Jenis Kelamin</th>
		<th>Gol. Darah</th>
		<th>No. Handphone</th>
		<th colspan="2">Aksi</th>
	</tr>
	<tr>
	<?php $user_id = 1; ?>
	<?php foreach( $goldar as $row) : ?>
	<tr>
		<td><?= $user_id; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["usia"]; ?> Tahun</td>
		<td><?= $row["jenis_kelamin"]; ?></td>
		<td><?= $row["golongan_darah"]; ?></td>
		<td><?= $row["kontak"]; ?></td>
		<td>
			<a style="text-decoration: none; color: black;" href="edit.php?user_id=<?= $row["user_id"]; ?>">Edit</a>
		<td>
			<a style="text-decoration: none; color: black;" href="delete.php?user_id=<?= $row["user_id"]; ?>" onclick="return confirm('yakin ingin menghapus data ini?');">Delete</a>
		</td>
	</tr>
	<?php $user_id++ ?>
	<?php endforeach; ?>
	</table>
	<br>
		<?php if( $halamanAktif > 1 ) : ?>
			<a href="?halaman=<?= $halamanAktif - 1; ?>" style="text-decoration: none; color: black;">&laquo;</a>
		<?php endif; ?>

		<?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
			<?php if( $i == $halamanAktif ) : ?>
				<a href="?halaman=<?= $i; ?>" style="text-decoration: none; color: black; font-weight: bold;">Halaman <?= $i; ?></a>
			<?php else : ?>
			<!-- 	<a href="?halaman=<?= $i; ?>" style="text-decoration: none; color: black;"><?= $i; ?></a> -->
			<?php endif; ?>
		<?php endfor; ?>

		<?php if( $halamanAktif < $jumlahHalaman ) : ?>
			<a href="?halaman=<?= $halamanAktif + 1; ?>" style="text-decoration: none; color: black;">&raquo;</a>
		<?php endif; ?>
		<!-- <a href="?halaman=<?= $jumlahHalaman; ?>">Akhir</a> -->
</body>
</html>