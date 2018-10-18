{include file="header.tpl"}
    <div class="container-fluid">
      <h2 class="editar">EDITAR DISTRIBUIDOR</h2>
      <form action="GuardarEditarDistribuidor/{$creador['id_creador']}" method="post">
        <input type="hidden" class="form-control" id="idFormC">
        <div class="form-group">
          <label class="editar" for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreFormC" name="nombreFormC" placeholder="{$creador['nombre']}" value="{$creador['nombre']}">
        </div>
        <div class="form-group">
          <label class="editarLabel" for="precioForm">Editar Localidad</label>
          <input type="text" class="form-control" id="localidadFormC" name="localidadFormC" placeholder="{$creador['localidad']}"  value="{$creador['localidad']}">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>

{include file="footer.tpl"}
