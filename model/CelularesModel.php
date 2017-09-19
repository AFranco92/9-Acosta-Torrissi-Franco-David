<?php 
	class CelularesModel {

		private $db;

		function __construct() {
			$this->db = new PDO('mysql:host=localhost;'.'dbname=db_celulares;charset=utf8','root','');
		}

		function getCelulares() {
			$sentencia = $this->db->prepare('SELECT * FROM celular');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

		function setCelular(/*parametros*/) {
			$sentencia = $this->db->prepare('INSERT INTO celular('/*parametros*/') VALUES('/*???*/')');
			$sentencia->execute([/*parametros*/]);
		}

		function updateCelular(/*parametros*/) {
			$sentencia = $this->db->prepare('UPDATE /*parametros*/./*parametros*/ SET /*parametros*/ = ? WHERE /*parametros*/');
			$sentencia->execute([/*parametros*/]);
		}

		function deleteCelular($id_celular) {
			$sentencia = $this->db->prepare('DELETE FROM celular WHERE id_celular = ?');
			$sentencia->execute([$id_celular]);
		}
	}
 ?>