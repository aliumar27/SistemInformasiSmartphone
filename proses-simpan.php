<?php

$ID = $_POST['ID'];
$Merek_Hp = $_POST['Merek_Hp'];
$Deskripsi = $_POST['Deskripsi'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];


include('koneksi.php');


$sql = "INSERT INTO smartphone_tb (ID, Merek_Hp, Deskripsi, Harga, Stok) VALUES ('$ID ', '$Merek_Hp', '$Deskripsi', '$Harga','$Stok')";

if (mysqli_query($conn, $sql)) {
	header('Location: tampil_datahp.php');
} else {
	echo "Data gagal di simpan" . $sql . "<br>" . mysqli_error($koneksi);
}
