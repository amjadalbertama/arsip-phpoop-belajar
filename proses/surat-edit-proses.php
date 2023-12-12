<?php
include'../koneksi.php';

If(isset($_POST['simpan'])){
	$id_surat=$_POST['id_surat'];
	$no_surat=$_POST['no_surat'];
	$date=$_POST['tgl'];
	$tentang=$_POST['tentang'];
	$jenis=$_POST['jenis'];
	$nama_admin=$_POST['nama_admin'];

		extract($_POST);
		$nama_file   = $_FILES['dokumen']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['dokumen']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_dokumen = $id_staf.".".$tipe_file;
		// Tentukan folder untuk menyimpan file
		$folder = "../berkassurat/$file_dokumen";
		@unlink ("$folder");
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_dokumen = $dokumen_awal;
	
	mysqli_query($db,
		"UPDATE tbsurat
		SET no_surat='$no_surat',tgl='$date',tentang='$tentang',jenis='$jenis', nama_admin = '$nama_admin'
		WHERE id_surat='$id_surat'"
	);
	header("location:../index.php?p=surat");
}
?>
