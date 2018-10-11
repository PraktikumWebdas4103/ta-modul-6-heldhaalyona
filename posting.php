<form method="POST" action="">
	<center>
	<nav style="height: 5%; bgcolor: brown; border:5%">
		<a href="posting.php">Posting</a>
		<a href="daftarposting.php">Daftar Posting</a>
		<a href="semuaposting.php">Semua Posting</a>
		<a href="editprofile.php">Edit Profile</a>
	</nav>
</center>
</form>
<form action="" method="POST" enctype="multipart/form-data">
	<center>
		<h2>POSTING MAHASISWA</h2>
		<table border="2" cellpadding="2">
				<tr>
					<td>Judul</td>
					<td>: <input type="text" name="judul"></td>
				</tr>
				<tr>
					<td>Masukkan Cerita</td>
					<td>: <textarea name="cerita" cols="80" rows="20" style="border-color: green"></textarea></td>
				</tr>	
				<tr>
					<td>Upload Foto</td>
					<td>: <input type="file" name="foto"></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>: <input type="number" name="nim" row='20' cols='80' style= "border-color: green"></td>
				</tr>	
				<tr>
					<td></td>
					<td><input type="submit" name="post" value="Posting"></td>
				</tr>
		</table>
	</center>
</form>
<?php
include 'prosespost.php';
session_start();
	if (isset($_POST['post'])) {
		$judul 	= $_POST['judul'];
		$komen 	= $_POST['cerita'];
		$foto	= $_FILES["foto"]["name"];
		$nim 	= $_POST['nim'];

		$hasil = str_word_count($komen);

		if ($hasil < 30) {
			echo "ERROR";
		}else{
			echo "Jumlah Kata :" .$hasil;
		}

		if (isset($_POST['post'])) {
		$_SESSION['nim']   = $nim; 
		$_SESSION['judul'] = $judul;
		header("location: daftarposting.php");
	}
		
	}
?>