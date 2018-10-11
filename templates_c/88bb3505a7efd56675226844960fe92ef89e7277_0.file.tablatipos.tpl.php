<?php
/* Smarty version 3.1.33, created on 2018-10-11 16:32:42
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\tablatipos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbf5f0a1b00f8_67411436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88bb3505a7efd56675226844960fe92ef89e7277' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\tablatipos.tpl',
      1 => 1539268360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbf5f0a1b00f8_67411436 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
          
    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tareas']->value, 'tarea');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['tarea']->value['completada'] == 1) {?>
                <li class="list-group-item"><s><?php echo $_smarty_tpl->tpl_vars['tarea']->value['titulo'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
</s><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">BORRAR</a></li>
              <?php } else { ?>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['tarea']->value['titulo'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['tarea']->value['descripcion'];?>
<a href="borrar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">BORRAR</a> | <a href="completada/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">COMPLETADA| <a href="editar/<?php echo $_smarty_tpl->tpl_vars['tarea']->value['id'];?>
">EDITAR</a></li>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>

    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="agregar">
        <div class="form-group">
          <label for="tituloForm">Titulo</label>
          <input type="text" class="form-control" id="tituloForm" name="tituloForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="completadaForm" name="completadaForm">
          <label class="form-check-label" for="completadaForm">Completada?</label>
        </div>
        <button type="submit" class="btn btn-primary">Crear Tarea</button>
      </form>
    </div><?php }
}
