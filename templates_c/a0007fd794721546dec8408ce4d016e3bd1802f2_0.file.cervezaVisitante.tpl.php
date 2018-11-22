<?php
/* Smarty version 3.1.33, created on 2018-11-22 03:14:12
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\cervezaVisitante.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf610f439fa13_86599825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0007fd794721546dec8408ce4d016e3bd1802f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\cervezaVisitante.tpl',
      1 => 1542852849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf610f439fa13_86599825 (Smarty_Internal_Template $_smarty_tpl) {
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
              Distribuidor
            </td>
            <td>
              Localidad
            </td>
            <td>
            Ver detalles
            </td>
          </thead>
      <ul class="list-group">
      </ul>
    </div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla']->value, 'fila');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->value) {
?>
          <tr>
           <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['nombre'];?>
</td>
            <td>$<?php echo $_smarty_tpl->tpl_vars['fila']->value['precio'];?>
</td>
            <td><a href="creador/<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_creador'];?>
"><?php echo $_smarty_tpl->tpl_vars['fila']->value['creador'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['fila']->value['localidad'];?>
</td>
            <td><a href="detalles/<?php echo $_smarty_tpl->tpl_vars['fila']->value['id_creador'];?>
">Mostrar</a></td>
          </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </table>
          </div><?php }
}
