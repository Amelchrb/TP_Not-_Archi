<?php
class Connexion {
	private $conn;
	
	public function getConn() {
		if (this->$conn == null) {
			try {
				$connString = 
			"mysql:host=".DB_HOST.";dbname=Appfilms;
			port=".DB_PORT.";charset=utf8";
				$this->$conn = new PDO($connString, "amelchrb", "");
			}
			catch(PDOException $e) {
				die("Erreur : " . $e->getMessage());
			}
		}

		return $this->$conn;
	}
}
?>