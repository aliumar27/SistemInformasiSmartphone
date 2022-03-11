<?php

include('koneksi.php');
$ID = $_POST['ID'];
$Merek_Hp = $_POST['Merek_Hp'];
$Deskripsi = $_POST['Deskripsi'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$sql = "UPDATE smartphone_tb SET ID = '$ID', Merek_Hp = '$Merek_Hp', Deskripsi = '$Deskripsi', Harga = '$Harga', Stok = '$Stok' WHERE ID = '$ID' ";


if (mysqli_query($conn, $sql)) {

	header('Location: tampil_datahp.php');
} else {
	echo "Gagal menyimpan perubahan ...";
}
