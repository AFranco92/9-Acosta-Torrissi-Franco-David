<?php
	class ConfigApp{
    	public static $ACTION = 'action';
    	public static $PARAMS = 'params';
    	public static $ACTIONS = [
    		'' => 'index',
      		'home' => 'index',
      		'showCreateCelulares' => 'create',
      		'setCelular' => 'store',
      		'deleteCelular' => 'destroy'
    	];
	}
?>