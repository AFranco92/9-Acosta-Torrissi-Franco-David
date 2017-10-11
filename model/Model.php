<?php 
	class Model {

		protected $db;

		function __construct() {
			try {
				$this->db = new PDO('mysql:host=localhost;'.'dbname=db_celulares;charset=utf8', 'root', '');
			}
			catch (PDOException $e) {
				echo 'Hubo un problema con la conexión a la base de datos', $e->getMessage(), "\n";
			}
		}
	}
 ?>