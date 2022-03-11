<?php

include("koneksi.php");

if(isset($_GET['ID']) ){
	$ID = $_GET['ID'];

	$sql = "DELETE FROM smartphone_tb WHERE ID = '$ID' ";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		header('Location: tampil_datahp.php');
	}
	else{
		echo "gagal Menghapus...";
	}

} else{
	echo "Akses Di larang";
}
