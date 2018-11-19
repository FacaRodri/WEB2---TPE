{include file="header.tpl"}
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
          <td>{$fila['precio']}</td>
          <td>{$fila['creador']}</td>
          <td>{$fila['localidad']}</td>
        </tr>
      </table>
      <div class="container">
      <h4 class="editar" >AGREGAR COMENTARIO</h4>
      <form method="post" action="InsertCerveza">
        <div class="form-group">
          <label class="editar" for="nombre">Cerveza</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
          <label class="editar" for="precio">Precio</label>
          <input type="text" class="form-control" id="precio" name="precio">
        </div>
         <div class="form-group">
          <label class="editar" for="tituloForm">Distribuidor</label>
    </div>
          </div>
      
          {include file="footer.tpl"}
