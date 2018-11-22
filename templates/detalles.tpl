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
        <div class="comentarios">
        </div>
      </div>      
</div>
          {include file="comentarios.tpl"}
          {include file="footer.tpl"}
