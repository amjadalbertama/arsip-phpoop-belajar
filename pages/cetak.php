<?php
include "../koneksi.php";

?>
<link rel="stylesheet" type="text/css" href="../style.css">
<h3>Data staf</h3></div>
<div id="content">
<table border="1" id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>ID staf</th>
			<th>Nama</th>
			<th>Foto</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
		</tr>
		
		<?php		
		$nomor=1;
		$query="SELECT * FROM tbstaf ORDER BY idstaf DESC";
		$q_tampil_staf = mysqli_query($db, $query);
		if(mysqli_num_rows($q_tampil_staf)>0)
		{
		while($r_tampil_staf=mysqli_fetch_array($q_tampil_staf)){
			if(empty($r_tampil_staf['foto'])or($r_tampil_staf['foto']=='-'))
				$foto = "admin-no-photo.jpg";
			else
				$foto = $r_tampil_staf['foto'];
		?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $r_tampil_staf['idstaf']; ?></td>
			<td><?php echo $r_tampil_staf['nama']; ?></td>
			<td><img src="../images/<?php echo $foto; ?>" width=70px height=70px></td>
			<td><?php echo $r_tampil_staf['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_staf['alamat']; ?></td>		
		</tr>		
		<?php $nomor++; } 
		}?>		
	</table>
	<script>
		window.print();
	</script>
</div>
