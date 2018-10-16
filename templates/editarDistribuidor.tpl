{include file="header.tpl"}

    <div class="container">
      <h2>EDITAR</h2>
      <form action="GuardarEditarDistribuidor/{$creador['id_creador']}" method="post">
        <input type="hidden" class="form-control" id="idFormC">
        <div class="form-group">
          <label for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreFormC" name="nombreFormC" placeholder="{$creador['nombre']}" value="{$creador['nombre']}">
        </div>
        <div class="form-group">
          <label for="precioForm">Editar Localidad</label>
          <input type="text" class="form-control" id="localidadFormC" name="localidadFormC" placeholder="{$creador['localidad']}"  value="{$creador['localidad']}">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>
    {print_r($creador)}

{include file="footer.tpl"}
