<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			$this->conn = mysqli_connect('localhost','root','','rizsa');
			
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			$query = "SELECT * from mahasiswa";
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			$query = "SELECT * from mahasiswa where nim = '$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query update nim, nama, angkatan, fakultas, prodi
			$query = "UPDATE mahasiswa SET nama='$nama',angkatan='$angkatan',fakultas='$fakultas',program='$prodi' WHERE nim='$nim'";
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			//query delete berdasarkan nim
			$query = "DELETE from mahasiswa where nim = '$nim'";
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query insert nim,nama, angkatan, fakultas, prodi
			$query = "INSERT into mahasiswa (nim,nama,angkatan,fakultas,program) values ('$nim','$nama','$angkatan','$fakultas','$prodi')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>