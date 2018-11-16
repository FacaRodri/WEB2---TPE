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
            <td>
            Ver detalles
            </td>
          </thead>
      <ul class="list-group">
      </ul>
    </div>
      {foreach from=$tabla item=fila}
          <tr>
           <td>{$fila['nombre']}</td>
            <td>${$fila['precio']}</td>
            <td><a href="creador/{$fila['id_creador']}">{$fila['creador']}</a></td>
            <td>{$fila['localidad']}</td>
            <td><a href="detalles/{$fila['id_creador']}">Mostrar</a></td>
          </tr>
      {/foreach}
      </table>
          </div>