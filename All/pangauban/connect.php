<?php 
$conn = mysqli_connect("localhost", "root", "", "sidpangauban");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function search($keyword) {
	$query = "SELECT * FROM goldar
			WHERE 
			nama LIKE '%$keyword%' OR 
			usia LIKE '%$keyword%' OR
			jenis_kelamin LIKE '%$keyword%' OR
			golongan_darah LIKE '$keyword'
			";
	return query($query);
}



function insert($data) {
	global $conn;
	$nama = ucwords($data["nama"]);
	$usia = htmlspecialchars($data["usia"]);
	$jenis_kelamin = ($data["jenis_kelamin"]);
	$golongan_darah = ($data["golongan_darah"]);
	$kontak = ($data["kontak"]);

	$query = "INSERT INTO goldar SET
				nama = '$nama',
				usia = '$usia',
				jenis_kelamin = '$jenis_kelamin',
				golongan_darah = '$golongan_darah',
				kontak = '$kontak'
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);
}

function edit($data) {
	global $conn;
	$user_id = $data["user_id"];
	$nama = ucwords($data["nama"]);
	$usia = htmlspecialchars($data["usia"]);
	$jenis_kelamin = ($data["jenis_kelamin"]);
	$golongan_darah = ($data["golongan_darah"]);
	$kontak = ($data["kontak"]);
	$query = "UPDATE goldar SET
				nama = '$nama',
				usia = '$usia',
				jenis_kelamin = '$jenis_kelamin',
				golongan_darah = '$golongan_darah',
				kontak = '$kontak'
				WHERE user_id = $user_id
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function delete($user_id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM goldar WHERE user_id = $user_id");

	return mysqli_affected_rows($conn);

}



?>