<?php

	class CelularesView extends View {

		function showCelulares($celulares) {
			$this->smarty->assign('celulares', $celulares);
			$this->smarty->display('templates/index.tpl');
		}

		function showCelularesAndMarcas($celulares, $marcas) {
			$this->smarty->assign('celulares', $celulares);
			$this->smarty->assign('marcas', $marcas);
			$this->smarty->display('templates/guestview.tpl');
		}

		function showCreateCelulares($marcas) {
			$this->createCelularForm($marcas);
			$this->smarty->display('templates/formCreate.tpl');
		}

		function showErrorCreate($error, $marcas, $modelo, $caracteristicas, $precio, $stock, $id_marca) {
			$this->createCelularForm($marcas, $modelo, $caracteristicas, $precio, $stock, $id_marca);
			$this->smarty->assign('error', $error);
			$this->smarty->display('templates/formCreate.tpl');
		}

		private function createCelularForm($marcas, $modelo='', $caracteristicas='', $precio='', $stock = 0, $id_marca='') {
			$this->smarty->assign('modelo', $modelo);
			$this->smarty->assign('caracteristicas', $caracteristicas);
			$this->smarty->assign('precio', $precio);
			$this->smarty->assign('stock', $stock);
			$this->smarty->assign('id_marca', $id_marca);
			$this->smarty->assign('marcas', $marcas);
		}
	}
 ?>