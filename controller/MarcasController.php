<?php 
	include_once 'model/MarcasModel.php';
	include_once 'view/MarcasView.php';

	class MarcasController extends Controller {

		function __construct() {
			$this->model = new MarcasModel();
			$this->view = new MarcasView();
		}

		public function index() {
			$marcas = $this->model->getMarcas();
			$this->view->showMarcas($marcas);
		}

		public function create() {
			$this->view->showCreateMarcas();
		}

		public function edit() {
			$this->model->updateMarca();
		}

		public function store() {
			$id_marca = $_POST['id_marca'];
			$nombre = $_POST['nombre'];
			$descripcion = $_POST['descripcion'];
			if (isset($_POST['id_marca'], $_POST['nombre'], $_POST['descripcion']) && !empty($_POST['id_marca'])) {
				$this->model->setMarca($id_marca, $nombre, $descripcion);
				header('Location: '.HOME.'/marcas');
			}
			else {
			$this->view->showErrorCreateMarca("El campo id_marca es requerido", $id_marca, $nombre, $descripcion);
			}
		}

		public function destroy($params) {
			$id_marca = $params[0];
			$this->model->deleteMarca($id_marca);
			header('Location: '.HOME.'/marcas');
		}
	}
 ?>