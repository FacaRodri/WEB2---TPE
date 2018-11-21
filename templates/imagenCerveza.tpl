 <div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      {foreach from=$imagenes item=imagen}
        <figure class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <img width="90%" height="200px" src="{$imagen['source']}" alt="Image">
          <figcaption>
          <a class="btn btn-danger link" href="BorrarImagen/{$imagen['id_imagen']}">Delete</a>
         </figcaption>
        </figure>
      {/foreach}
    </div>
  </div>
</div> <!-- Fin container -->
