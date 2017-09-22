<?php 
	include_once 'model/CelularesModel.php';
	include_once 'view/CelularesView.php';

	class CelularesController extends Controller {

		function __construct() {
			$this->model = new CelularesModel();
			$this->view = new CelularesView();
			$this->modelmarca = new MarcasModel();
		}

		public function index() {
			$celulares = $this->model->getCelulares();
			$this->view->showCelulares($celulares);
		}

		public function create() {
			$marcas = $this->modelmarca->getMarcas();
			$this->view->showCreateCelulares($marcas);
		}

		public function edit() {
			$this->model->updateCelular();
		}

		public function store() {
			$marcas = $this->modelmarca->getMarcas();
			$modelo = $_POST['modelo'];
			$caracteristicas = $_POST['caracteristicas'];
			$precio = $_POST['precio'];
			$id_marca = $_POST['id_marca'];
			if (isset($_POST['modelo'], $_POST['caracteristicas'], $_POST['precio'], $_POST['id_marca'])) {
				$this->model->setCelular($modelo, $caracteristicas, $precio, $id_marca);
				header('Location: '.HOME);
			}
			else {
			$this->view->showErrorCreate("Hay campos vacíos o hubo un error", $marcas, $modelo, $caracteristicas, $precio, $id_marca);
			}
		}

		public function destroy($params) {
			$id_celular = $params[0];
			$this->model->deleteCelular($id_celular);
			header('Location: '.HOME);
		}
	}
 ?>