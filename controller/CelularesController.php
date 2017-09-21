<?php 
	include_once 'model/CelularesModel.php';
	include_once 'view/CelularesView.php';

	class CelularesController extends Controller {

		function __construct() {
			$this->model = new CelularesModel();
			$this->view = new CelularesView();
		}

		public function index() {
			$celulares = $this->model->getCelulares();
			$this->view->showCelulares($celulares);
		}

		public function create() {
			$this->view->showCreateCelulares();
		}

		public function edit() {
			$this->model->updateCelular();
		}

		public function store() {
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$caracteristicas = $_POST['caracteristicas'];
			$precio = $_POST['precio'];
			$id_marca = $_POST['id_marca'];
			if (isset($_POST['marca'], $_POST['modelo'], $_POST['caracteristicas'], $_POST['precio'], $_POST['id_marca']) && !empty($_POST['marca'])) {
				$this->model->setCelular($marca, $modelo, $caracteristicas, $precio, $id_marca);
				header('Location: '.HOME);
			}
			else {
			$this->view->showErrorCreate("El campo marca es requerido", $marca, $modelo, $caracteristicas, $precio, $id_marca);
			}
		}

		public function destroy($params) {
			$id_celular = $params[0];
			$this->model->deleteCelular($id_celular);
			header('Location: '.HOME);
		}
	}
 ?>