<?php
include 'koneksi.php';
	
 	if (isset($_POST['post'])) {
		$judul 	= $_POST['judul'];
		$komen 	= $_POST['cerita'];
		$foto	= $_FILES["foto"]["name"];
		$nim 	= $_POST['nim'];

		$sqli = "INSERT INTO posting (judul,cerita,foto,nim) values ('$judul','$komen','$foto','$nim')";
		if (mysqli_query($connect, $sqli)){
		echo "Database sudah masuk";
		}else{
			echo "ERROR".$sql."<br>".$connect->error;
		}
	}
?>