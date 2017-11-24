	<?php 
 require_once 'koneksi.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
 	$id = $_POST['id'];
 	$nama = $_POST['nama'];
 	$email = $_POST['email'];
 	$password = $_POST['password'];

 	$query = "UPDATE  tb_datauser SET nama = '$nama',email = '$email', password = '$password' WHERE id='$id'";

 	$exeQuery = mysqli_query($konek, $query); 

 	echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'data berhasil update')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal diupdate'));
 }
 else
 {
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid'));
 }

 ?>
