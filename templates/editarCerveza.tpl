{include file="header.tpl"}

    <div class="container">
      <h2>EDITAR</h2>
      <form action="GuardarEditarCerveza/{$cerveza['id_cerveza']}" method="post">
        <input type="hidden" class="form-control" id="idForm">
        <div class="form-group">
          <label for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" placeholder="{$cerveza['nombre']}" value="{$cerveza['nombre']}">
        </div>
        <div class="form-group">
          <label for="precioForm">Editar Precio</label>
          <input type="number" class="form-control" id="precioForm" name="precioForm" placeholder="{$cerveza['precio']}"  value="{$cerveza['precio']}">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>
    {print_r($cerveza)}

{include file="footer.tpl"}
