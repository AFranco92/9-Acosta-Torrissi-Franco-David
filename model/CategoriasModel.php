<?php 
	class CategoriasModel extends Model {

		function getCategorias() {
			$sentencia = $this->db->prepare('SELECT * FROM Marca');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

		function setCategoria($id_marca, $nombre, $descripcion) {
			$sentencia = $this->db->prepare('INSERT INTO Marca(id_marca, nombre, descripcion) VALUES(?,?,?)');
			$sentencia->execute([$id_marca, $nombre, $descripcion]);
		}

		function updateCategoria(/*parametros*/) {
			$sentencia = $this->db->prepare('UPDATE /*parametros*/./*parametros*/ SET /*parametros*/ = ? WHERE /*parametros*/');	
			$sentencia->execute([/*parametros*/]);
		}

		function deleteCategoria($id_marca) {
			$sentencia = $this->db->prepare('DELETE FROM Marca WHERE id_marca = ?');
			$sentencia->execute([$id_marca]);
		}
	}
 ?>