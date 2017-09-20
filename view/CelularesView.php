<?php
	include_once 'libs/Smarty.class.php';

	class CelularesView {

		private $smarty;

		function __construct() {
			$this->smarty = new Smarty();
			$this->smarty->assign('titulo', 'Celulares');
		}

		function showCelulares($celulares) {
			$this->smarty->assign('celulares', $celulares);
			$this->smarty->display('templates/index.tpl');
		}

		function showCreateCelulares() {
			$this->createCelularForm();
			$this->smarty->display('templates/formCreate.tpl');
		}

		function showErrorCreate($error, $marca, $modelo, $caracteristicas, $precio, $id_marca) {
			$this->createCelularForm($marca, $modelo, $caracteristicas, $precio, $id_marca);
			$this->smarty->assign('error', $error);
			$this->smarty->display('templates/formCreate.tpl');
		}

		private function createCelularForm($marca='', $modelo='', $caracteristicas='', $precio='', $id_marca='') {
			$this->smarty->assign('marca', $marca);
			$this->smarty->assign('modelo', $modelo);
			$this->smarty->assign('caracteristicas', $caracteristicas);
			$this->smarty->assign('precio', $precio);
		}
	}
 ?>