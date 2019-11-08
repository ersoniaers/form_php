<?php
if ( isset( $_POST['mahasiswa'] ) ) {
	echo $_POST ['nim'];

	echo $_POST ['nama'];
	
	echo $_POST ['jeniskelamin'];
	
	echo $_POST ['Jurusan'];
	
	echo $_POST ['Prodi'];
	
} 

?>
<!DOCTYPE html>
<html>
<head>
	<title>mahasiswa</title>
</head>
<body>
	<h2>Mahasiswa</h2>
	<form action="" method="POST">
		<table>
			<!-- baris untuk nim-->
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td>
					<input type="text" name="nim" placeholder="Masukan NIM Anda">
				</td>
			</tr>
			<!-- baris untuk nama-->
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" placeholder="Masukan Nama Anda">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jeniskelamin" value="laki-laki"><label>laki-laki</label>
					<input type="radio" name="jeniskelamin" value="perempuan"><label>perempuan</label>
				</td>
			</tr>
				<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><select name="Jurusan">
  					<option value="">--Pilih Jurusan--</option>
  					<option value="Teknik Informatika"> Teknik Informatika</option>
 					<option value="Teknik Pendingin"> Teknik Pendingin</option>
  					<option value="Teknik Mesin"> Teknik Mesin</option>
			</tr>
			<tr>
				<td>Program Study</td>
				<td>:</td>
				<td><select name="Prodi">
  					<option value="">--Pilih Prodi--</option>
  					<option value="D3 Teknik Informatika"> D3 Teknik Informatika</option>
 					<option value="D4 Rekayasa Perangkat Lunak" selected> D4 Rekayasa Perangkat Lunak</option>
 					<option value="D3 Teknik Pendingin"> D3 Teknik Pendingin</option>
  					<option value="D3 Teknik Mesin"> D3 Teknik Mesin</option>
  					<option value="D4 Perancangan Manufaktur"> D4 Perancangan Manufaktur</option>
					</select></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="3">
					<input type="submit" name="mahasiswa" value="kirim">	
				</td>
			</tr>
		</table>
	</form>

</body>
</html>