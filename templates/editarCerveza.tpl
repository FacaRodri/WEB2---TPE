{include file="header.tpl"}

    <div class="container">
      <h2>EDITAR</h2>
      <form method="post" action="{$home}/guardarEditar">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$cerveza["id"]}">
        <div class="form-group">
          <label for="tituloForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$nombre["nombre"]}">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Editar Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm" value="{$precio["precio"]}">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>

{include file="footer.tpl"}
