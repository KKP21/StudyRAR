<?php 

$conn = mysqli_connect("localhost", "root", "", "creatsoal");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}






function tambah($data) {
	global $conn;

	

	$pertanyaan = $data["pertanyaan"];
	
	$kunci = $data["kunci"];

	$query = "INSERT INTO soal
				VALUES
				('', '$pertanyaan',  '$kunci', '$aksi')
			";
	
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}




function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM soal WHERE nomor = $id");
	return mysqli_affected_rows($conn);

}












 ?>
