<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "studyrar";
$koneksi = new mysqli($host, $db_user, $db_pass, $db_name);
if ($koneksi->connect_error){
	die("error");
}

echo "success";


// function register($email, $username, $password){
// 		$insert = mysqli_query($this->koneksi,"INSERT INTO user VALUES ('', '$email', '$username', '$password')");
// 		return $insert;


?>