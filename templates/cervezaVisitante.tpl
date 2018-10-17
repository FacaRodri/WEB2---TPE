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
      {foreach from=$tabla item=fila}
        <tr><td>{$fila['nombre']}</td><td>${$fila['precio']}</td><td>{$fila['creador']}</td><td>{$fila['localidad']}</td></tr>
      {/foreach}
     
    
    
      </table>
          </div>