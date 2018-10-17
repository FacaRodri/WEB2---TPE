<?php
/* Smarty version 3.1.33, created on 2018-10-17 02:29:07
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\distribuidorVisitante.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc68253555e08_29254539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80fbfaf34c9b88dded64270688e1d77387b998b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\distribuidorVisitante.tpl',
      1 => 1539736100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc68253555e08_29254539 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">
<table class="tablaTipos" aling="center">
    <thead>
            <td>
              Distribuidor
            </td>
            <td>
              Localidad
            </td>
          </thead>
      <ul class="list-group">

      </ul>
    </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['creador']->value, 'distribuidor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['distribuidor']->value) {
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['distribuidor']->value['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['distribuidor']->value['localidad'];?>
</td></tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
      </table>
    </div><?php }
}
