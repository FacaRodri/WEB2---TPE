{include file="header.tpl"}
    <div class="container-fluid" aling=center>
      <h2 class="editar">EDITAR CERVEZA</h2>
      <form action="GuardarEditarCerveza/{$cerveza['id_cerveza']}" method="post">
        <input type="hidden" class="form-control" id="idForm">
        <div class="form-group">
          <label class="editar" for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" placeholder="{$cerveza['nombre']}" value="{$cerveza['nombre']}">
        </div>
        <div class="form-group">
          <label class="editar" for="precioForm">Editar Precio</label>
          <input type="number" class="form-control" id="precioForm" name="precioForm" placeholder="{$cerveza['precio']}"  value="{$cerveza['precio']}">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>

{include file="footer.tpl"}
