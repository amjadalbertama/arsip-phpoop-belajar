<?php
include'../koneksi.php';
	
if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    $sql = "INSERT INTO tbuser (nama, jabatan, username, password) VALUES ('$nama', '$jabatan', '$username', '$password')";
    $query = mysqli_query($db, $sql);

    if($query){
        echo "Data berhasil disimpan.";
        header("Location: ../index.php?p=user");
        exit();
    } else {
        echo "Terjadi kesalahan. Data tidak dapat disimpan.";
    }
}
?>