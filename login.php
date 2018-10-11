<?php
include ('koneksi.php');
?>
<form action=" " method="POST">
		<center>
			<h2>LOG IN MAHASISWA</h2>
		<table border="1">
			<tr>
				<td>NIM</td>
				<td>: <input type="number" name="nim"></td>
			</tr>	
			<tr>
				<td>Password</td>
				<td>: <input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
		</center>	
</form>
<?php
session_start();
if (isset(($_POST['login']))) {
	$nim 		= $_POST['nim'];
	$password 	= md5($_POST['password']);

	$data		= mysqli_query($connect, "SELECT * FROM mhsiswa WHERE nim = '$nim' AND password = '$password' ");
	$baris 		= mysqli_num_rows($data);

	if (isset($baris)) {
		$_SESSION['nim'] = $nim; 
		header("location: halamanawal.php");
	}
}
