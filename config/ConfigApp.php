<?php
	class ConfigApp{
    	public static $ACTION = 'action';
    	public static $PARAMS = 'params';
    	public static $ACTIONS = [
    	    '' => 'CelularesController#index',
    		'home' => 'CelularesController#index',
            'showGuestView' => 'CelularesController#indexcelularesandmarcas',
            'celulares' => 'CelularesController#index',
            'marcas' => 'MarcasController#index',
            'addMarca' => 'MarcasController#create',
            'setMarca' => 'MarcasController#store',
            'deleteMarca' => 'MarcasController#destroy',
      	    'addCelular' => 'CelularesController#create',
      	    'setCelular' => 'CelularesController#store',
      	    'deleteCelular' => 'CelularesController#destroy',
            'setNoStock' => 'CelularesController#noStock'
    	];
	}
?>