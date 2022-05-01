<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "u8192524_brian", "5=Co?IB~(.!h", "u8192524_brian");

//ambil data dari tabel
$result = mysqli_query($conn, "SELECT * FROM formpesan");
// var_dump($result);
// if( !$result ) {
// 	echo "<script>alert('lol');</script>";
// }

$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$service = $_POST['service'];
$pesan = $_POST['pesan'];


$query = mysqli_query($conn, "INSERT INTO formpesan VALUES('','$nama','$email','$subject', '$service', '$pesan')");
if ($query) {
	header("location:index.php?pesan=inputberhasil");
} else {
	header("location:index.php?pesan=inputgagal");
}


?>