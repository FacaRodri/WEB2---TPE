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
<body>
{include file="nav.tpl"}
<div class="container-fluid">
<table class="tablaTipos" aling="center">
    <thead>
            <td>
              Nombre
            </td>
            <td>
              Precio
            </td>
            <td>
              Distribuidor
            </td>
            <td>
              Localidad
            </td>
          </thead>
      <ul class="list-group">

      </ul>
    </div>
        <tr>
          <td>{$fila['nombre']}</td>
          <td>${$fila['precio']}</td>
          <td>{$fila['creador']}</td>
          <td>{$fila['localidad']}</td>
        </tr>
      </table>
          </div>
          {include file="footer.tpl"}
