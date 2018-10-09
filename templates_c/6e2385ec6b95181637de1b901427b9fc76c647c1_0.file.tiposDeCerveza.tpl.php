<?php
/* Smarty version 3.1.33, created on 2018-10-09 21:56:50
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\tiposDeCerveza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbd0802076079_72408001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e2385ec6b95181637de1b901427b9fc76c647c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\tiposDeCerveza.tpl',
      1 => 1539114991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bbd0802076079_72408001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
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
        <h3 class="letraTiposDeCerveza">TIPOS DE CERVEZA</h3>

        <table class="tablaTipos" align="center">
          <thead>
            <td>
              ESTILOS
            </td>
            <td>
              CONTENIDO ALCOHOLICO
            </td>
            <td>
              IBU*
            </td>
            <td>
              OG*
            </td>
          </thead>

          <tr>
            <td>
              KOLSCH
            </td>
            <td>
              5,0%
            </td>
            <td>
              22
            </td>
            <td>
              1045
            </td>
          </tr>

          <tr>
            <td>
              SCOTCH
            </td>
            <td>
              6,0%
            </td>
            <td>
              18
            </td>
            <td>
              1056
            </td>
          </tr>

          <tr>
            <td>
              PORTER
            </td>
            <td>
              5,5%
            </td>
            <td>
              27
            </td>
            <td>
              1052
            </td>
          </tr>

          <tr>
            <td>
              HONEY BEER
            </td>
            <td>
              7,5%
            </td>
            <td>
              22
            </td>
            <td>
              1062
            </td>
          </tr>

          <tr>
            <td>
              BARLEY WINE
            </td>
            <td>
              10,0%
            </td>
            <td>
              53
            </td>
            <td>
              1090
            </td>
          </tr>

          <tr>
            <td>
              IMPERIAL STOUT
            </td>
            <td>
              8,5%
            </td>
            <td>
              49
            </td>
            <td>
              1075
            </td>
          </tr>

          <tr>
            <td>
              IPA
            </td>
            <td>
              6,6%
            </td>
            <td>
              58
            </td>
            <td>
              1060
            </td>
          </tr>

          <tr>
            <td>
              CREAM STOUT
            </td>
            <td>
              7,0%
            </td>
            <td>
              35
            </td>
            <td>
              1064
            </td>
          </tr>
        </table>

        <p>*IBU: responde a las siglas International Bittering Unit (Unidad internacional de amargor), y se usa desde hace tiempo
          para calcular el amargor de la cerveza artesanal. </p>
        <p>*OG: (Original Gravity) tiene que ver con la densidad relativa del mosto durante diversas etapas del proceso de fermentación.
        </p>

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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
