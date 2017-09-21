<?php
	class ConfigApp{
    	public static $ACTION = 'action';
    	public static $PARAMS = 'params';
    	public static $ACTIONS = [
    		'' => 'CelularesController#index',
    		'home' => 'CelularesController#index',
        'celulares' => 'CelularesController#index',
        'categorias' => 'CategoriasController#index',
        'addCategoria' => 'CategoriasController#create',
        'setCategoria' => 'CategoriasController#store',
        'deleteCategoria' => 'CategoriasController#destroy',
      	'addCelular' => 'CelularesController#create',
      	'setCelular' => 'CelularesController#store',
      	'deleteCelular' => 'CelularesController#destroy'
    	];
	}
?>