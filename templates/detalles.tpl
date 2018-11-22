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
        <tr>
          <td>{$fila['nombre']}</td>
          <td>{$fila['precio']}</td>
          <td>{$fila['creador']}</td>
          <td>{$fila['localidad']}</td>
        </tr>
  </table>
      {include file="imagenCerveza.tpl"}     
      <div class="container">
        <h4 class="editar" >AGREGAR COMENTARIO</h4>
        <div class="comentarios">
        </div>
        <form method="post" action="InsertCerveza">
      </div>  
      <div class="form-group">
          <label class="editar" for="nombre">Comentario</label>
          <input type="text-area" class="form-control" id="nombre" name="nombre">
      </div>         
</div>
      
          {include file="footer.tpl"}
