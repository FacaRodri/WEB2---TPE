<?php
/* Smarty version 3.1.33, created on 2018-11-23 00:59:24
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf742dc1ea042_44719319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ce0c3d0b8b93062576560fc04c8db53a53bd7c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\comentarios.tpl',
      1 => 1542931162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf742dc1ea042_44719319 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid">

    <input type="input" hidden="hidden" class="admin" value="<?php echo $_SESSION['admin'];?>
" data="admin">

    <div class="form-group">
        <textarea class="form-control" id="comentario" rows="5" placeholder="¡Comentanos aqui!"></textarea>
        <label for="puntaje">Puntaje</label>
        <select class="form-control" id="puntaje">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option> 
        </select>
        <input type="input" hidden="hidden" id="id_usuario" value="" data="<?php echo $_SESSION['id_usuario'];?>
">
        <input type="input" hidden="hidden" id="id_cerveza" value="">
    </div>
  <button type="submit" class="btn btn-primary" id="agregarComentario" name="agregarComentario">ENVIAR</button>

</div><?php }
}
