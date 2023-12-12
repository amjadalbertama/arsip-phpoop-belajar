<?php
	$id_surat=$_GET['id'];
	$q_tampil_surat=mysqli_query($db,"SELECT * FROM tbsurat WHERE id_surat='$id_surat'");
	$r_tampil_surat=mysqli_fetch_array($q_tampil_surat);
	if(empty($r_tampil_surat['dokumen'])or($r_tampil_surat['dokumen']=='-'))
				$dokumen = "-";
			else
				$dokumen = $r_tampil_surat['dokumen'];
?>
<div id="label-page"><h3><center>Edit Data Surat</h3></div>
<div id="content">
	<form action="proses/surat-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		
		<tr>
			<td class="label-formulir">ID Surat</td>
			<td class="isian-formulir"><input type="text" name="id_surat" size="40" value="<?php echo $r_tampil_surat['id_surat']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">No Surat</td>
			<td class="isian-formulir"><input type="text" name="no_surat" size="40" value="<?php echo $r_tampil_surat['no_surat']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal</td>
			<td class="isian-formulir"><input type="date" name="date" size="40" value="<?php echo $r_tampil_surat['tgl']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tentang</td>
			<td class="isian-formulir"><input type="text" name="tentang" size="40" value="<?php echo $r_tampil_surat['tentang']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis</td>
			<td class="isian-formulir"><input type="text" name="jenis" size="40" value="<?php echo $r_tampil_surat['jenis']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Dokumen</td>
			<td class="isian-formulir">
			<a href="berkassurat/<?php echo $dokumen; ?>">
			<input type="file" name="dokumen" class="isian-formulir isian-formulir-border">
			<input type="hidden" name="dokumen_awal" value="<?php echo $r_tampil_surat['dokumen']; ?>">
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Admin</td>
			<td class="isian-formulir"><input type="text" name="nama_admin" size="40" value="<?php echo $r_tampil_surat['nama_admin']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>