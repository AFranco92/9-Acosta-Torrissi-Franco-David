<?php 
	include_once 'model/CategoriasModel.php';
	include_once 'view/CategoriasView.php';

	class CategoriasController extends Controller {

		function __construct() {
			$this->model = new CategoriasModel();
			$this->view = new CategoriasView();
		}

		public function index() {
			$categorias = $this->model->getCategorias();
			$this->view->showCategorias($categorias);
		}

		public function create() {
			$this->view->showCreateCategorias();
		}

		public function edit() {
			$this->model->updateCategoria();
		}

		public function store() {
			$id_marca = $_POST['id_marca'];
			$nombre = $_POST['nombre'];
			$descripcion = $_POST['descripcion'];
			if (isset($_POST['id_marca'], $_POST['nombre'], $_POST['descripcion']) && !empty($_POST['id_marca'])) {
				$this->model->setCategoria($id_marca, $nombre, $descripcion);
				header('Location: '.HOME.'/categorias');
			}
			else {
			$this->view->showErrorCreateCategoria("El campo id_marca es requerido", $id_marca, $nombre, $descripcion);
			}
		}

		public function destroy($params) {
			$id_marca = $params[0];
			$this->model->deleteCategoria($id_marca);
			header('Location: '.HOME.'/categorias');
		}
	}
 ?>