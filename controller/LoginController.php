<?php 
	include_once('model/LoginModel.php');
	include_once('view/LoginView.php');

	class LoginController extends Controller {

	  	function __construct() {
	    	$this->view = new LoginView();
	    	$this->model = new LoginModel();
	  	}

	  	public function index() {
	    	$this->view->showLogin();
	  	}

	  	public function verify() {
	      	$userName = $_POST['usuario'];
	      	$password = $_POST['password'];

	      	if(!empty($userName) && !empty($password)){
	        	$user = $this->model->getUser($userName);
	        	if((!empty($user)) && password_verify($password, $user[0]['password'])) {
	            	session_start();
	            	$_SESSION['USER'] = $userName;
	            	$_SESSION['LAST_ACTIVITY'] = time();
	            	header('Location: '.ABM);
	        	}
	        	else {
	            	$this->view->showLogin('Usuario o password incorrectos');
	        	}
	     	}
	  	}

	  	public function destroy() {
	    	session_start();
	    	session_destroy();
	    	header('Location: '.HOME);
	  	}
	}
 ?>