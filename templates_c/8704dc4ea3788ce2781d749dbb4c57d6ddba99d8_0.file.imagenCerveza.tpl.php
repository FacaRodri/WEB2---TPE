<?php
/* Smarty version 3.1.33, created on 2018-11-22 00:07:10
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\imagenCerveza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5e51e2d79b7_01984772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8704dc4ea3788ce2781d749dbb4c57d6ddba99d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\imagenCerveza.tpl',
      1 => 1542841625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf5e51e2d79b7_01984772 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
        <figure class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <img width="90%" height="200px" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['source'];?>
" alt="Image">
          <figcaption>
          <a class="btn btn-danger link" href="BorrarImagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
">Delete</a>
         </figcaption>
        </figure>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</div> <!-- Fin container -->
<?php }
}
