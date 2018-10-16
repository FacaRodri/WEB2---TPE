<div class="container-fluid">
<table class="tablaTipos" align="center">
    <thead>
            <td>
              Distribuidor
            </td>
            <td>
              Localidad
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
      {foreach from=$creador item=distribuidor}
        <tr><td>{$distribuidor['nombre']}</td><td>{$distribuidor['localidad']}</td><td> <a href="editarDistribuidor/{$distribuidor['id_creador']}">EDITAR</a> </td><td> <a href="DeleteDistribuidor/{$distribuidor['id_creador']}">BORRAR</a> </td></tr>
      {/foreach}
    <div class="container">
      <h2>Agregar Distribuidor</h2>
      <form method="post" action="InsertDistribuidor">
        <div class="form-group">
          <label for="tituloForm">Nombre</label>
          <input type="text" class="form-control" id="tituloForm" name="nombre">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Localidad</label>
          <input type="text" class="form-control" id="descripcionForm" name="localidad">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
      </table>
    </div>