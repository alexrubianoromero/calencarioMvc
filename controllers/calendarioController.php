<?php
 date_default_timezone_set('America/Bogota');
 $raiz = dirname(dirname(dirname(__file__)));
//  die($raiz);
 require_once($raiz.'/calendario/views/calendarioView.php');  

 class calendarioController
 {
    protected $view;

    public function   __construct()
    {
        $this->view = new calendarioView();
        // echo 'bienvenido calendario ';
        if(!$_REQUEST['opcion'])
        {
            $this->view->menuPrincipal(); 
        }
        
    }


 }



?>