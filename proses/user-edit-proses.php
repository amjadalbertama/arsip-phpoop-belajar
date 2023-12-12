<?php
include'../koneksi.php';

If(isset($_POST['simpan'])){

	$id_user=$_POST['id_user'];
	$nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $password = $_POST['password'];
    $username = $_POST['username'];
	
	mysqli_query($db,
		"UPDATE tbuser SET nama='$nama',jabatan='$jabatan',username='$username',password='$password'
		WHERE iduser='$id_user'"
	);
	header("location:../index.php?p=user");
}
?>
