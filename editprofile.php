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
<center>
	<h2>EDIT PROFILE</h2>
</center>
<?php
	include 'koneksi.php';

	if (isset([$_POST['simpan']])) {
		$nim 			= $_POST['nim'];
 		$password 		= $_POST['password'];
		$nama 			= $_POST['nama'];
		$kelas			= $_POST['kelas'];
		$jeniskelamin	= $_POST['jeniskelamin'];
		$hobi			= $_POST['hobi'];
		$fakultas		= $_POST['fakultas'];
		$alamat			= $_POST['alamat'];

		$queri	= "UPDATE mhsiswa SET nim = '$nim', password = '$password', nama = '$nama', kelas = '$kelas', jeniskelamin = '$jeniskelamin', hobi = '$hobi', fakultas = '$fakultas', alamat = '$alamat', WHERE nim = '$nim'";
		$hsil	= mysqli_query($queri);

		if ($hsil) {
			include 'regis.php';
			echo "<b>Update Data Mahasiswa sukses</b>";
		}
	}
?>