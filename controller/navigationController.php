<?php

    include_once "./view/navDefaultView.php";


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
    }





?>