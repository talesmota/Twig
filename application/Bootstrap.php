<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	 protected function _initAutoloader() {

		// Registrando o namespace da aplicação
		$autoloader = new Zend_Application_Module_Autoloader(array(
		    'namespace' => '',
		    'basePath' => APPLICATION_PATH
		));
	}
	public function _initA() {
		$this->bootstrap('frontController');
		require_once APPLICATION_PATH . '/controllers/TemplateControllerPlugin.php';
		$plugin = new TemplateControllerPlugin();
		$front = Zend_Controller_Front::getInstance();
		$front->registerPlugin($plugin);
		return $plugin;
	    }
}

