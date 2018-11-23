<div class="container">
<table class="tablaTipos" aling="center">
    <thead>
            <td>
              Nombre
            </td>
            <td>
              Precio
            </td>
            <td>
              Editar
            </td>
            <td>
              Borrar
            </td>
            <td>
              Detalles
            </td>
          </thead>

         {foreach from= $usuarios item=user}
        <tr>
        <td>{$cerveza['nombre']}</td>
        <td>{$cerveza['precio']}</td>
        <td> <a href="editarCerveza/{$user['id_cerveza']}">EDITAR</a> </td>
        <td> <a href="Delete/{$user['id_cerveza']}">BORRAR</a> </td>
        
        </tr>

      {/foreach}