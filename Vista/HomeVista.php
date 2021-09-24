<?php
require_once "libreria/smarty-3.1.39/libs\Smarty.class.php";

class HomeVista{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function traerHome(){
        $this->smarty->assign('titulo',"inicio");
        $this->smarty->display("templates/home.tpl");
    }

    function traerSuscripcion(){
        $this->smarty->assign('titulo',"suscripcion");
        $this->smarty->display("templates/suscripcion.tpl");
    }

    
    function traerPosiciones(){
        $this->smarty->assign('titulo',"posiciones");
        $this->smarty->display("templates/posiciones.tpl");
    }

     
    function traerEntradas(){
        $this->smarty->assign('titulo',"entradas");
        $this->smarty->display("templates/entradas.tpl");
    }

}