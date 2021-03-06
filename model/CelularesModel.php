<?php 
	class CelularesModel extends Model {

		function getCelulares() {
			$sentencia = $this->db->prepare('SELECT * FROM Celular');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

		function setCelular($modelo, $caracteristicas, $precio, $stock, $id_marca) {
			$sentencia = $this->db->prepare('INSERT INTO Celular(modelo, caracteristicas, precio, stock, id_marca) VALUES(?,?,?,?,?)');
			$sentencia->execute([$modelo, $caracteristicas, $precio, $stock, $id_marca]);
		}

		function setNoStock($id_celular) {
    		$sentencia = $this->db->prepare('UPDATE Celular SET stock = 1 WHERE id_celular = ?');
    		$sentencia->execute([$id_celular]);
  		}

		function deleteCelular($id_celular) {
			$sentencia = $this->db->prepare('DELETE FROM Celular WHERE id_celular = ?');
			$sentencia->execute([$id_celular]);
		}
	}
 ?>