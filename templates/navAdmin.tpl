<nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand homeLogo" class=".home" href="#">
                <img src="img/logo.png" height="70" width="70" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link home" href="home">HOME
                            <span class="sr-only">(current)</span>
                        </a>
                        {if (isset($smarty.session.nombre))}
                            <li class="nav-item">
                                <a class="nav-link" href="logout">LOGOUT</a>
                            </li>
                            {else}
                            <li class="nav-item">
                                <a class="nav-link" href="login">LOGIN</a>
                            </li>
                        {/if}
                    </li>
                    <li class="nav-item">
                             
                            <li class="nav-item">
                                <a class="nav-link" href="tiposDeCerveza">TIPOS DE CERVEZA</a>
                            </li>
                                       
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            CURSO DE FABRICACION
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item infoCurso" href="informacionCurso">INFORMACION DEL CURSO</a>
                            <a class="dropdown-item inscripcion" href="inscripcionCurso">INSCRIPCION </a>

                            <li class="nav-item">
                                <a class="nav-link contacto" href="contacto">CONTACTANOS</a>
                            </li>
                            
                        </div>
                </ul>
            </div>
        </nav>