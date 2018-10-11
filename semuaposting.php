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
		<h2>SEMUA POSTINGAN</h2>
		<table border="2" bgcolor="skyblue" cellpadding="2">
			<?php
				$nim 		= $_SESSION['nim'];
				$judul 		= $_SESSION['judul'];
				$semua 		= mysqli_query($connect, "SELECT * FROM posting JOIN mhsiswa WHERE nim = '$nim'");
				while ($semfet = mysqli_fetch_array($semua)) {
			?>
<form action="" method="POST">
	<center>
		<table border="2" cellpadding="2">
			<tr>
				<th>NIM</th>
				<th>NAMA</th>
				<th>JUDUL</th>
				<th>CERITA</th>
			</tr>
			<tr>
				<td><?php echo $semfet[0]; ?></td>
				<td><?php echo $semfet[1]; ?></td>
				<td><?php echo $semfet[2]; ?></td>
				<td><?php echo $semfet[3]; ?></td>
			</tr>
		</table>
		<?php } ?>
	</center>
</form>