<?php 
	include_once 'model/CelularesModel.php';
	include_once 'view/CelularesView.php';
	define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

	class CelularesController {

		private $model;
		private $view;

		function __construct() {
			$this->model = new CelularesModel();
			$this->view = new CelularesView();
		}

		public function index() {
			$celulares = $this->model->getCelulares();
			$this->view->showCelulares($celulares);
		}

		public function create() {
			$this->view->ShowCreateCelulares();
		}

		public function edit() {
			/*a completar*/
		}

		public function store() {
			/*parametro*/ = $_POST[/*parametro*/];
			/*parametro*/ = $_POST[/*parametro*/];
			if (isset($_POST[/*parametro*/]) && !empty ($_POST[/*parametro*/])) {
				$this->model->setCelular(/*parametros*/);
				header('Location: '.HOME);
			}
			else {
			$this->view->showErrorCreate("El campo nombre es requerido", /*parametros*/);
			}
		}

		public function destroy($params) {
			$id_celular = $params[0];
			$this->model->deleteCelular($id_celular);
			header('Location: '.HOME);
		}
	}
 ?>