{include file="header.tpl"}

<div class="container-fluid text-center" id="container">

    <div class="row">
      <div class="col-md-2">
        <img src="img/Anuncio5.jpg" width="100%" alt="Anuncio">
        <div class="mt-4">
          <img src="img/Anuncio6.jpg" width="100%" alt="Anuncio">
        </div>
        <div class="mt-4">
          <img src="img/Anuncio7.jpg" width="100%" alt="Anuncio">
        </div>
      </div>
      <div class="col-md-8">
        
    <form class="form-signin text-center" method="post" action="verificarLogin">
      <img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">INICIAR SESIOM</h1>
      <label for="inputUser" class="sr-only">Nombre de usuario</label>
      <input type="text" id="nombre" name="nombre" class="form-control" placeholder="User" required="" autofocus="">
      <br>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="Recordarme">Recordarme
        </label>
      </div>
      <h3>{$Message}</h3>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>

    </form>
        
      </div>
      <div class="col-md-2 ">
        <img src="img/Anuncio1.jpg" width="100%" alt="Anuncio">
        <div class="mt-4">
          <img src="img/Anuncio2.jpg" width="100%" alt="Anuncio">
        </div>
        <div class="mt-4">
          <img src="img/Anuncio4.jpg" width="100%" alt="Anuncio">
        </div>

      </div>
    </div>

  </div>
  </div>
  {include file="footer.tpl"}
