<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Submission 1 </title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>

	<body>
		<div class="container">
			<h2>Tambah Peserta Lawak</h2>
			<a href="list.php"><input value="Lihat Peserta" class="btn btn-info"></a>
			<form action="index.php" method="POST" class="form-group row">
				Nama : <input type="text" name="name" required="required" maxlength="100" class="form-control"><br/>
				Email : <input type="email" name="email" required="required" maxlength="60" class="form-control"><br/>
				Job : <input type="text" name="job" required="required" maxlength="60" class="form-control"><br/>
				<input type="submit" name="tambahpst" value="Simpan" class="btn btn-success">
				<input type="reset" value="Batal" class="btn btn-warning">
			</form>
		</div>
		
	</body>
</html>
<?php
	require('library.php');
	if(isset($_POST['tambahpst'])){
		$name = $_POST['name'];
		$email=$_POST['email'];
		$job=$_POST['job'];
		
		$Lib = new Library();
		
		$add = $Lib->addPeserta($name, $email, $job);
		if($add == "Success"){
			header('Location: List.php');
		}
	}
 
?>
