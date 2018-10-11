<div class="container">
<table class="tablaTipos" align="center">
    <thead>
            <td>
              Nombre
            </td>
            <td>
              Precio
            </td>
          </thead>
      <ul class="list-group">

      </ul>
    </div>
      {foreach from= $cervezas item=cerveza}
        <tr><td>{$cerveza['nombre']}</td><td>{$cerveza['precio']}</td><td> <a href="editarCerveza/{$cerveza['id_cerveza']}">EDITAR</a> </td></tr>

      {/foreach}
    <div class="container">
      <h2>Agregar cerveza</h2>
      <form method="post" action="InsertCerveza">
        <div class="form-group">
          <label for="tituloForm">Cerveza</label>
          <input type="text" class="form-control" id="tituloForm" name="nombre">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Precio</label>
          <input type="text" class="form-control" id="descripcionForm" name="precio">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
      </table>
    </div>