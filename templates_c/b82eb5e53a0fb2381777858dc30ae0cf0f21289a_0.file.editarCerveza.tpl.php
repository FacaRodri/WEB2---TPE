<?php
/* Smarty version 3.1.33, created on 2018-11-12 22:36:02
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\editarCerveza.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be9f242cea302_97922948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b82eb5e53a0fb2381777858dc30ae0cf0f21289a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\editarCerveza.tpl',
      1 => 1542058532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5be9f242cea302_97922948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid" aling=center>
      <h2 class="editar">EDITAR CERVEZA</h2>
      <form action="GuardarEditarCerveza/<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['id_cerveza'];?>
" method="post">
        <input type="hidden" class="form-control" id="idForm">
        <div class="form-group">
          <label class="editar" for="nombreForm">Editar Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" placeholder="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['nombre'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['nombre'];?>
">
        </div>
        <div class="form-group">
          <label class="editar" for="precioForm">Editar Precio</label>
          <input type="number" class="form-control" id="precioForm" name="precioForm" placeholder="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['precio'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['cerveza']->value['precio'];?>
">
        </div>
        <select name="id_creador">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['creador']->value, 'creadores');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['creadores']->value) {
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['creadores']->value['id_creador'];?>
" > <?php echo $_smarty_tpl->tpl_vars['creadores']->value['nombre'];?>
 </option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
            </select>
        <button type="submit" class="btn btn-primary">Terminar Edicion</button>
      </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
