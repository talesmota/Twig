<?php

class IndexController extends Twig_Tpl
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    public function templateAction()
    {
      $nome = new StdClass();
      $nome->nomes = array( "nomes" => array("Tales", "Mota", "Machado" ) );	
      $this->view->data =  $nome->nomes ;
      
      /*$this->view->data = array( "nomes" => 
				array("Tales", "Mota", "Machado") 
		);*/
    }
	public function novaAction(){

	}


}

