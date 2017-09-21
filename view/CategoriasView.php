<?php

	class CategoriasView extends View {

		function showCategorias($categorias) {
			$this->smarty->assign('categorias', $categorias);
			$this->smarty->display('templates/categorias/index.tpl');
		}

		function showCreateCategorias() {
			$this->createCategoriaForm();
			$this->smarty->display('templates/categorias/formCreateCategoria.tpl');
		}

		function showErrorCreateCategoria($id_marca, $nombre, $descripcion) {
			$this->createCategoriaForm($id_marca, $nombre, $descripcion);
			$this->smarty->assign('error', $error);
			$this->smarty->display('templates/categorias/formCreateCategoria.tpl');
		}

		private function createCategoriaForm($id_marca='', $nombre='', $descripcion='') {
			$this->smarty->assign('id_marca', $id_marca);
			$this->smarty->assign('nombre', $nombre);
			$this->smarty->assign('descripcion', $descripcion);
		}
	}
 ?>