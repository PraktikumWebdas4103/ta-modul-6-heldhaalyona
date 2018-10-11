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
<?php
include 'koneksi.php';
session_start();
?>
<form action="" method="POST">
	<center>
		<h2>DATA MAHASISWA</h2>
		<table border="2" bgcolor="skyblue" cellpadding="2">
			<?php
				$nim 		= $_SESSION['nim'];
				$data		= mysqli_query($connect, "SELECT * FROM mhsiswa WHERE nim = '$nim'");
				while ($fetch = mysqli_fetch_array($data)) {
			?>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Hobi</th>
			<th>Fakultas</th>
			<th>Alamat</th>
		</tr>
			<td><?php echo $fetch[0]; ?></td>
			<td><?php echo $fetch[2]; ?></td>
			<td><?php echo $fetch[3]; ?></td>
			<td><?php echo $fetch[4]; ?></td>
			<td><?php echo $fetch[5]; ?></td>
			<td><?php echo $fetch[6]; ?></td>
			<td><?php echo $fetch[7]; ?></td>
		</tr>
		</table>
	<?php } ?>
	</center>
</form>