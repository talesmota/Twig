<?php
class Twig_Tpl extends Zend_Controller_Action{
	public $twig;

	public function postDispatch(  ){
		$path = APPLICATION_PATH .'/views/templates';
		if( file_exists($path . "/" .$this->_request->getControllerName() ."/".  $this->_request->getActionName().".html") ){
			require_once APPLICATION_PATH.'/../library/Twig/Autoloader.php';		
			Twig_Autoloader::register();
			$loader = new Twig_Loader_Filesystem( $path );
			$twig = new Twig_Environment($loader, array( 
			      'cache' => APPLICATION_PATH.'/compilation_cache',
			      'auto_reload' => TRUE ));
			$this->_helper->viewRenderer->setNoRender();
		
			$template = $twig->loadTemplate(   $this->_request->getControllerName() ."/".  $this->_request->getActionName().".html" );

			$template->display( (is_array($this->view->data)? $this->view->data : array() ) );
		}
		
	}
}
