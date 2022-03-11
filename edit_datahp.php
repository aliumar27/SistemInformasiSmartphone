<?php
include("koneksi.php");

if (!isset($_GET['ID'])) {
	header('Location: tampil_datahp.php');
}

$ID = $_GET['ID'];

$sql = "SELECT * FROM smartphone_tb WHERE ID = '$ID'";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
	$data = mysqli_fetch_array($query);
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Form Edit</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

	<div class="col-md-6 mx-auto mt-5 container">
		<div class="card">
			<div class="card-header bg-primary text-white">Form Input List Hp Terbaru</div>
			<div class="card-body">

				<form action="proses-edit.php" method="POST">
					<div class="mb-3">
						<label for="exampleFormControlID" class="form-label">ID</label>
						<input type="number" class="form-control" name="ID" id="exampleFormControlID" value="<?php echo ($data['ID']); ?>">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlMerek_Hp" class="form-label">Merek_Hp</label>
						<input type="text" class="form-control" name="Merek_Hp" id="exampleFormControlMerek_Hp" value="<?php echo ($data['Merek_Hp']); ?>">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlDeskripsi" class="form-label">Deskripsi</label>
						<input type="text" class="form-control" name="Deskripsi" id="exampleFormControlDeskripsi" value="<?php echo ($data['Deskripsi']); ?>">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlHarga" class="form-label">Harga</label>
						<input type="text" class="form-control" name="Harga" id="exampleFormControlHarga" value="<?php echo ($data['Harga']); ?>">

					</div>

					<div class="mb-3">
						<label for="exampleFormControlStok" class="form-label">Stok</label>
						<input type="number" class="form-control" name="Stok" id="exampleFormControlStok" value="<?php echo ($data['Stok']); ?>">
					</div>

					<button type="submit" class="btn btn-primary">Update</button>





			</div>



			</form>
		</div>
	</div>
	</div>


</body>

</html>