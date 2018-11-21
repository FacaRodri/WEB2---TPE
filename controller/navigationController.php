<?php

    include_once "./view/navDefaultView.php";
    require_once  "./model/cervezaModel.php";
    require_once  "./model/distribuidorModel.php";
    require_once "./model/imagenModel.php";

    class navigationController{
        private $navDefaultView;
        private $CervezasModel;
        private $DistribuidorModel;
        private $ImagenModel;


        function __construct(){
            $this->navDefaultView = new navDefaultView();
            $this->CervezasModel = new cervezaModel();
            $this->DistribuidorModel = new distribuidorModel();
            $this->ImagenModel = new ImagenModel();

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
        
        function mostrarCervezaVisitante(){
            $tabla = $this->CervezasModel->GetAllTable();
            $this->navDefaultView->mostrarVisitante($tabla);
            
          }

        function creador($id_creador){
            $creador = $this->CervezasModel->filtroCreador($id_creador);
            $this->navDefaultView->mostrarVisitante($creador);
        }

        function detalles($id_cerveza){
            $imagenes = $this->ImagenModel->GetImagenCerveza($id_cerveza);
            $fila = $this->CervezasModel->getDetalles($id_cerveza);
            $this->navDefaultView->mostrarDetalles($fila, $imagenes);
        }


    }





?>