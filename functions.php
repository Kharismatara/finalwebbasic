<?php 
//koneksi 
$conn = mysqli_connect("localhost", "root", "", "bukutamu");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function inset($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$alamat = htmlspecialchars($data["alamat"]);
	
   
	$query = "INSERT INTO tamu
	VALUES
	('', '$nama', '$email', '$jurusan', '$alamat')
   ";
   
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tamu WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function update($data) {
	global $conn;
	
	$id = $data['id'];
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$alamat = htmlspecialchars($data["alamat"]);


	$query = "UPDATE tamu SET
				
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				alamat ='$alamat'
			
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}
function search($keyword) {
	$query = "SELECT * FROM tamu
				WHERE
			  nama LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  jurusan LIKE '%$keyword%' OR
			  alamat LIKE '%$keyword%'
			";
	return query($query);
}
?>