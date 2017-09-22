<?php

	class MarcasView extends View {

		function showMarcas($marcas) {
			$this->smarty->assign('marcas', $marcas);
			$this->smarty->display('templates/marcas/index.tpl');
		}

		function showCreateMarcas() {
			$this->createMarcaForm();
			$this->smarty->display('templates/marcas/formCreateMarca.tpl');
		}

		function showErrorCreateMarca($id_marca, $nombre, $descripcion) {
			$this->createMarcaForm($id_marca, $nombre, $descripcion);
			$this->smarty->assign('error', $error);
			$this->smarty->display('templates/marcas/formCreateMarca.tpl');
		}

		private function createMarcaForm($id_marca='', $nombre='', $descripcion='') {
			$this->smarty->assign('id_marca', $id_marca);
			$this->smarty->assign('nombre', $nombre);
			$this->smarty->assign('descripcion', $descripcion);
		}
	}
 ?>