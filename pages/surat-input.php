<div id="label-page"><h3><center>Input Data Surat</h3></div>
<div id="content">
	<form action="proses/surat-input-proses.php" method="post" enctype="multipart/form-data">
	
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID surat</td>
			<td class="isian-formulir"><input type="text" size="40" name="id_surat" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">No Surat</td>
			<td class="isian-formulir"><input type="text" size="40" name="no_surat" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal</td>
			<td class="isian-formulir">
				<input type="date" name="tgl" value="">
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Tentang</td>
			<td class="isian-formulir"><input type="text" size="40" name="tentang" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis</td>
			<td class="isian-formulir"><select name="jenis" class="isian-formulir isian-formulir-border">
				<option value="Surat Masuk">Surat Masuk</option>
				<option value="Surat Keluar">Surat Keluar</option>
			</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Dokumen</td>
			<td class="isian-formulir"><input type="file" size="40" name="dokumen" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama Admin</td>
			<td class="isian-formulir">
			<select name="nama_admin" id="nama_admin" class="form-control" required>
				<option value="BLANK" selected="selected">.....</option>
				<?php
					$sql="SELECT * from tbuser order BY iduser";
					$query=mysqli_query($db, $sql) or die ("Query Salah : ".msyql_error());
					while($data= mysqli_fetch_array($query)) {
					echo "<option value = '$data[nama]'> 
					$data[nama] </option>";
				}
				?>
			</select></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>