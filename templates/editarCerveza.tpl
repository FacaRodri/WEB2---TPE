<!DOCTYPE html>
<html lang="en">
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
{include file="nav.tpl"}
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

{include file="footer.tpl"}
