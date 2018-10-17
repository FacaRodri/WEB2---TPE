<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
=======

>>>>>>> 54ff3a51a34e914a863c338388873327ab4f8da6
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <base href="http://localhost/WikiBeerTPE/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="http://{$smarty.server.SERVER_NAME}/WikiBeerTPE/">
    <title>WikiBeer!</title>
</head>
<<<<<<< HEAD
{include file="nav.tpl"}
=======


{include file="nav.tpl"}

>>>>>>> 54ff3a51a34e914a863c338388873327ab4f8da6
    <div class="container-fluid">
      <h2>EDITAR</h2>
      <form action="GuardarEditarCerveza/{$cerveza['id_cerveza']}" method="post">
        <input type="hidden" class="form-control" id="idForm">
        <div class="form-group">
          <label for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" placeholder="{$cerveza['nombre']}" value="{$cerveza['nombre']}">
        </div>
        <div class="form-group">
          <label for="precioForm">Editar Precio</label>
          <input type="number" class="form-control" id="precioForm" name="precioForm" placeholder="{$cerveza['precio']}"  value="{$cerveza['precio']}">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>
    {print_r($cerveza)}

{include file="footer.tpl"}
