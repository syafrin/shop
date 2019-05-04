<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>List Pelawak</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>

	<body>
		<div class="container">
			<h2>Daftar Nama Peserta Lawak</h2>
			<a href="index.php" class="btn btn-success">Tambah Peserta Lawak</a>
			<table class="table">
				<tr>
					<td>NO</td>
					<td>Name</td>
					<td>Email</td>
					<td>Job</td>
					<td>Date</td>
				</tr>
				<?php
				require("library.php");
				//instansiasi class library
				$Lib = new Library();
				//memanggil method untuk menampilkan record
				$show = $Lib->showPeserta();
				$no=1;
				while($data = $show->fetch(PDO::FETCH_OBJ)){
				echo "
				<tr>
					<td>$no++</td>
					<td>$data->name</td>
					<td>$data->email</td>
					<td>$data->job</td>
					<td>$data->Date</td>
				</tr>";
				};
				?>
			</table>
			
		</div>
	</body>
</html>
 
