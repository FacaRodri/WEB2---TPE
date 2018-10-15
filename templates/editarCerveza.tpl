{include file="header.tpl"}

    <div class="container">
      <h2>EDITAR</h2>
      <form action="GuardarEditarCerveza" method="post">
        <div class="form-group">
          <label for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$cerveza["nombre"]}">
        </div>
        <div class="form-group">
          <label for="precioForm">Editar Precio</label>
          <input type="number" class="form-control" id="precioForm" name="precioForm" value="{$cerveza["precio"]}">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>

{include file="footer.tpl"}
