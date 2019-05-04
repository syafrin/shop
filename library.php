<?php
	class Library{
		public function __construct(){
			//$this->db = new PDO('mysql:host=localhost;dbname=crud_oop','root','');
			$this->db = new PDO("sqlsrv:server = tcp:webserversyafrin.database.windows.net,1433; Database = dbwebapp", "syafrin", "Android_123");
			//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}
		public function addPeserta($name, $email,$job){
			$tanggal = date('d-m-Y');
			$sql = "INSERT INTO peserta (name, email, job, date) VALUES('$name', '$email','$job','$tanggal')";
			$query = $this->db->query($sql);
			if(!$query){
				return "Failed";
			}
			else{
				return "Success";
			}
		}
			 
		public function showPeserta(){
			$sql = "SELECT * FROM peserta";
			$query = $this->db->query($sql);
			return $query;
		}
		
	}
?>
