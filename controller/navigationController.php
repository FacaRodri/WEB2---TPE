<?php

    include_once "./view/navDefaultView.php";
    // require_once  "./view/tiposDeCervezaView.php";
    require_once  "./model/cervezaModel.php";
    require_once  "./model/distribuidorModel.php";

    class navigationController {
        private $navDefaultView;


        function __construct(){
            $this->navDefaultView = new navDefaultView();
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
            $cervezas = $this->CervezasModel->GetAll();
            $creador = $this->DistribuidorModel->GetAll();
            $this->CervezasView->mostrarVisitante($cervezas,$creador);
          
          }
    }





?>