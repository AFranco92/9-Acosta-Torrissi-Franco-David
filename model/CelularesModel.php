<?php 
	class CelularesModel {

		private $db;

		function __construct() {
			$this->db = new PDO('mysql:host=localhost;'.'dbname=db_celulares;charset=utf8', 'root', '');
		}

		function getCelulares() {
			$sentencia = $this->db->prepare('SELECT * FROM Celular');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

		function setCelular($marca, $modelo, $caracteristicas, $precio, $id_marca) {
			$sentencia = $this->db->prepare('INSERT INTO Celular(marca, modelo, caracteristicas, precio, id_marca) VALUES(?,?,?,?,?)');
			$sentencia->execute([$marca, $modelo, $caracteristicas, $precio, $id_marca]);
		}

		function updateCelular(/*parametros*/) {
			$sentencia = $this->db->prepare('UPDATE /*parametros*/./*parametros*/ SET /*parametros*/ = ? WHERE /*parametros*/');	
			$sentencia->execute([/*parametros*/]);
		}

		function deleteCelular($id_celular) {
			$sentencia = $this->db->prepare('DELETE FROM Celular WHERE id_celular = ?');
			$sentencia->execute([$id_celular]);
		}
	}
 ?>