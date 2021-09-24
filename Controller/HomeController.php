<?php
require_once "Vista/HomeVista.php";

class HomeController{
    private $vista;

    function __construct(){
        $this->vista = new HomeVista();
    }

    function home(){
       $this->vista->traerHome();
    }

    function suscripcion(){
        $this->vista->traerSuscripcion();
    }

    function posiciones(){
        $this->vista->traerPosiciones();
    }

    function entradas(){
        $this->vista->traerEntradas();
    }

   

   
}