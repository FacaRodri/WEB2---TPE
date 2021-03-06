<?php
/* Smarty version 3.1.33, created on 2018-10-16 23:25:29
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\inscripcionCurso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc657497fde18_47475176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df8ae97f5aec28e94ccbdadac76b574f17dbae59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\inscripcionCurso.tpl',
      1 => 1539357884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc657497fde18_47475176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid" id="container">
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
                <legend class="text-center letraContacto">INSCRIPCIÓN AL CURSO DE FABRICACION</legend>

                <form>
                    <div class="form-row">
                        <div class="col-md-6 ">
                            <label class="colorForm" for="validationDefault01">Nombre</label>
                            <input type="text" class="form-control nombre" id="validationDefault01" placeholder="Nombre" value="" required>
                        </div>
                        <div class="col-md-6 ">
                            <label class="colorForm" for="validationDefault02">Apellido</label>
                            <input type="text" class="form-control apellido" id="validationDefault02" placeholder="Apellido" value="" required>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-3 ">
                            <label class="colorForm" for="validationDefault03">Ciudad</label>
                            <input type="text" class="form-control ciudad" id="validationDefault03" placeholder="Ciudad" required>
                        </div>
                        <div class="col-md-3 ">
                            <label class="colorForm" for="validationDefault04">Provincia</label>
                            <input type="text" class="form-control provincia" id="validationDefault04" placeholder="Provincia" required>
                        </div>
                        <div class="col-md-3 ">
                            <label class="colorForm" for="validationDefault04">Pais</label>
                            <input type="text" class="form-control pais" id="validationDefault04" placeholder="Pais" required>
                        </div>
                        <div class="col-md-3 ">
                            <label class="colorForm" for="validationDefault05">Codigo Postal</label>
                            <input type="text" class="form-control codigoPostal" id="validationDefault05" placeholder="C.P." required>
                        </div>
                    </div>


                </form>
                <div class="row container ">
                    <div class="col-12 mt-4">
                        <button class="btn btn-primary enviarDatos" type="submit">Enviar</button>
                        <button class="btn btn-primary ml-3 enviarDatos3veces" type="submit">Enviar 3 veces</button>
                    </div>
                    <div class="col-12 row mt-4">
                        <div class="col-6 row">
                            <form>

                                <input type="text" class="form-control inputfiltrarPorCiudad" placeholder="Ciudad" required>
                            </form>
                        </div>
                        <div class="col-6 ml-10  ">
                            <button class="btn btn-primary filtrarPorCiudad" type="submit">Filtrar</button>
                        </div>
                    </div>
                </div>

                <div class="container-fluid" id="container">

                    <div class="row mt-4">
                        <div class="container col-12 mt -5 table-responsive ">
                            <table class="table tablaInscriptos table-borderless " >
                                <thead class="thead-dark">
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    <th>CIUDAD</th>
                                    <th>BORRAR</th>
                                    <th>EDITAR</th>
                                </thead>
                                <tbody class="js-tablainscriptos">
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
