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

		function showErrorCreate($error, /*parametros*/) {
			$this->createCelularForm(/*parametros*/);
			$this->smarty->assign('error', $error);
			$this->smarty->display('templates/formCreate.tpl');
		}

		private function createCelularForm() {
			$this->smarty->assign(/*parametros*/);
			$this->smarty->assign(/*parametros*/);
			$this->smarty->assign(/*parametros*/);
			$this->smarty->assign(/*parametros*/);
		}
	}
 ?>