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
          </thead>
      <ul class="list-group">

      </ul>
    </div>
      {foreach from= $cervezas item=cerveza}
        <tr>
        <td>{$cerveza['nombre']}</td>
        <td>{$cerveza['precio']}</td>
        <td> <a href="editarCerveza/{$cerveza['id_cerveza']}">EDITAR</a> </td>
        <td> <a href="Delete/{$cerveza['id_cerveza']}">BORRAR</a> </td></tr>
      {/foreach}
     
    <div class="container">
      <h4 class="editar" >AGREGAR CERVEZA</h4>
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
           <select name="id_creador">
                    {foreach from=$creador item=creadores}
                          <option value="{$creadores['id_creador']}" > {$creadores['nombre']} </option>
                    {/foreach}  
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
      </table>
    </div>