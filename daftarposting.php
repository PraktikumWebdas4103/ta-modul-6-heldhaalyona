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
<form method="">
<?php
include 'koneksi.php';
session_start();
?>
<form action="" method="POST">
	<center>
		<h2>POSTINGAN CERITA</h2>
		<table border="2" bgcolor="skyblue" cellpadding="2">
			<?php
				$nim 			= $_SESSION['nim'];
				$judul 			= $_SESSION['judul'];
				$postdata		= mysqli_query($connect, "SELECT * FROM posting WHERE judul = '$judul'");
				while ($fetchpost = mysqli_fetch_array($postdata)) {
			?>
		<tr>
			<th>JUDUL</th>
			<th>CERITA</th>
			<th>FOTO</th>
			<th>NIM</th>
		</tr>
			<td><?php echo $fetchpost[0]; ?></td>
			<td><?php echo $fetchpost[1]; ?></td>
			<td><?php echo $fetchpost[2]; ?></td>
			<td><?php echo $fetchpost[3]; ?></td>
		</tr>
		</table>
	<?php } ?>
	</center>
</form>
</form>