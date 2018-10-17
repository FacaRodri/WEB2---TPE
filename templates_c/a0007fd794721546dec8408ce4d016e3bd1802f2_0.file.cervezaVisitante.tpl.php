<?php
/* Smarty version 3.1.33, created on 2018-10-17 02:29:07
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\cervezaVisitante.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc68253531e86_78982927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0007fd794721546dec8408ce4d016e3bd1802f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\cervezaVisitante.tpl',
      1 => 1539736143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc68253531e86_78982927 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
<table class="tablaTipos" aling="center">
    <thead>
            <td>
              Nombre
            </td>
            <td>
              Precio
            </td>
            <td>
              ID Distribuidor
            </td>
          </thead>
      <ul class="list-group">

      </ul>
    </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cervezas']->value, 'cerveza');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cerveza']->value) {
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value['precio'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value['id_creador'];?>
</td></tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     
    
    
      </table>
          </div><?php }
}
