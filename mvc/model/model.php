<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			//buatlah koneksi seperti modul 9 kemarin
			
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			//query select*from 
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			//query select mahasiswa berdasarkan nim
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query update nim, nama, angkatan, fakultas, prodi
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			//query delete berdasarkan nim
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query insert nim,nama, angkatan, fakultas, prodi
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