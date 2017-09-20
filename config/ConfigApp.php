<?php
	class ConfigApp{
    	public static $ACTION = 'action';
    	public static $PARAMS = 'params';
    	public static $ACTIONS = [
    		'' => 'index',
    		'home' => 'index',
      		'addCelular' => 'create',
      		'setCelular' => 'store',
      		'deleteCelular' => 'destroy'
    	];
	}
?>