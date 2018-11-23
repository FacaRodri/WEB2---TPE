<?php

require_once "config/ConfigApp.php";
require_once "controller/navigationController.php";
require_once "controller/cervezaController.php";
require_once "controller/loginController.php";
require_once "controller/usuarioController.php";

function db(){
    try{
      $connection = new PDO('mysql:host=localhost;dbname=wikibeer;charset=utf8', 'root', '');
    }catch(Exception $e){
      $db = new PDO('mysql:host=localhost;charset=utf8', 'root', '');
          $sql = file_get_contents('wikibeer.sql');
          $db->exec($sql);
          }
    }
    db();


function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];

  #borrar/1/2/3/4
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){
   #$urlData[ACTION] = borrar
   #$urlData[PARAMS] = [1,2,3,4]

    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]); //Array[0] -> TareasController [1] -> BorrarTarea
        $controller = new $action[0]();
        $metodo = $action[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params);
        }
        else{
            echo $controller->$metodo();
        }
    }else{
      $controller =  new navigationController();
      echo $controller->home();
    }
}
 ?>
