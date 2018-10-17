<?php
class LoginView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }


  function mostrarLogin($message = '', $nombre = ' '){
    $this->Smarty->assign('nombre', $nombre); 
    $this->Smarty->assign('Message',$message); 
    $this->Smarty->display('templates/login.tpl');
  }
}

 ?>
