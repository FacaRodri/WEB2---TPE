<div class="container-fluid">
<table class="tablaTipos" aling="center">
    <thead>
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
      {foreach from=$creador item=distribuidor}
        <tr><td>{$distribuidor['nombre']}</td><td>{$distribuidor['localidad']}</td></tr>
      {/foreach}
    
      </table>
    </div>