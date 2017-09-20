<?php 
	include_once 'model/CelularesModel.php';
	include_once 'view/CelularesView.php';
	include_once 'controller/CelularesController.php';

	$celular = new CelularesView();

		$celular->showCelulares($celulares);
 ?>