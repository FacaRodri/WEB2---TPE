{include file="header.tpl"}

    <div class="container">
      <h2>EDITAR</h2>
      <form action="GuardarEditarCreador/{$distribuidor['id_creador']}" method="post">
        <input type="hidden" class="form-control" id="idFormC">
        <div class="form-group">
          <label for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreFormC" name="nombreFormC" placeholder="{$distribuidor['nombre']}" value="{$distribuidor['nombre']}">
        </div>
        <div class="form-group">
          <label for="precioForm">Editar Localidad</label>
          <input type="text" class="form-control" id="localidadFormC" name="localidadFormC" placeholder="{$distribuidor['localidad']}"  value="{$distribuidor['localidad']}">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>


{include file="footer.tpl"}
