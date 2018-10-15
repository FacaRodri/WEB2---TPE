<?php
/* Smarty version 3.1.33, created on 2018-10-15 19:04:23
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\editarCerveza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc4c89749b9e4_61093239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82eb5e53a0fb2381777858dc30ae0cf0f21289a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\editarCerveza.tpl',
      1 => 1539623029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc4c89749b9e4_61093239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
      <h2>EDITAR</h2>
      <form action="GuardarEditarCerveza" method="post">
        <div class="form-group">
          <label for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value["nombre"];?>
">
        </div>
        <div class="form-group">
          <label for="precioForm">Editar Precio</label>
          <input type="number" class="form-control" id="precioForm" name="precioForm" value="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value["precio"];?>
">
        </div>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
