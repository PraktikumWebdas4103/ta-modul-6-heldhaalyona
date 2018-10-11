<?php
include 'koneksi.php';
	
 	if(isset($_POST['simpan'])){

 			$nim 			= $_POST['nim'];
 			$password 		= md5($_POST['password']);
			$nama 			= $_POST['nama'];
			$kelas			= $_POST['kelas'];
			$jeniskelamin	= $_POST['jeniskelamin'];
			$hobi			= $_POST['hobi'];
			$fakultas		= $_POST['fakultas'];
			$alamat			= $_POST['alamat'];

		$sql = "INSERT INTO mhsiswa (nim,password,nama,kelas,jeniskelamin,hobi,fakultas,alamat) values ('$nim','$password','$nama','$kelas','$jeniskelamin','$hobi','$fakultas','$alamat')";
		if (mysqli_query($connect, $sql)){
		echo "Database sudah masuk";
		echo "<a href = 'login.php'> Next </a> -> Log In";
		}else{
			echo "ERROR".$sql."<br>".$connect->error;
		}
	}
?>