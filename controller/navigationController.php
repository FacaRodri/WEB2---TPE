<?php

    include_once "./view/navDefaultView.php";
    require_once  "./model/cervezaModel.php";
    require_once  "./model/distribuidorModel.php";

    class navigationController {
        private $navDefaultView;
        private $CervezasModel;
        private $DistribuidorModel;


        function __construct(){
            $this->navDefaultView = new navDefaultView();
            $this->CervezasModel = new cervezaModel();
            $this->DistribuidorModel = new distribuidorModel();
        }

        function home(){
            $this->navDefaultView->home();
        }

        function contacto(){
            $this->navDefaultView->contacto();
        }
        function informacionCurso(){
            $this->navDefaultView->informacionCurso();
        }
        function inscripcionCurso(){
            $this->navDefaultView->inscripcionCurso();

        }
        function login(){
            $this->navDefaultView->login();

        }
        function mostrarCervezaVisitante(){
            $tabla = $this->CervezasModel->GetAllTable();
            echo print_r($tabla);
            $this->navDefaultView->mostrarVisitante($tabla);
            
          }
    }





?>