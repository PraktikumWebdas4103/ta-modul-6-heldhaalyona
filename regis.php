<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi Mhs</title>
</head>
<body>
<form action="" method="POST">
	<center>
		<h2>REGISTRASI DATA MAHASISWA</h2>
	<table cellpadding="2" border="2">
		<tr>
			<td>NIM</td>
			<td>: <input type="number" name="nim"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>: <input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>: <input type="text" name="nama" ></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>: <input type="radio" name="kelas" value="MI41-01"> MI41-01
				  <input type="radio" name="kelas" value="MI41-02"> MI41-02
				  <input type="radio" name="kelas" value="MI41-03"> MI41-03
				  <input type="radio" name="kelas" value="MI41-04"> MI41-04
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>: 	<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki</input>
					<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</input>
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>: <input type="checkbox" name="hobi" value="Basket">Basket
				  <input type="checkbox" name="hobi" value="Menari">Menari
				  <input type="checkbox" name="hobi" value="Menggambar">Menggambar
				  <input type="checkbox" name="hobi" value="Menyanyi">Menyanyi
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>: <select name="fakultas">
				<option value="Ilmu Terapan">Ilmu Terapan</option>
				<option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
				<option value="Komunikasi dan Bisnis">Komunikasi dan Bisnis</option>
				<option value="Teknik Elektro">Teknik Elektro</option>
				<option value="Informatika">Informatika</option>
				<option value="Rekayasa Industri">Rekayasa Industri</option>
				<option value="Industri Kreatif">Industri Kreatif</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td><input type="submit" name="simpan" value="Simpan"></td>
		</tr>
	</table>
	</center>
</form>
</body>
</html>
<?php
include 'proses.php';
?>