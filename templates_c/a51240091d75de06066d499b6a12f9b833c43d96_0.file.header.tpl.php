<?php
/* Smarty version 3.1.33, created on 2018-10-18 16:01:06
  from 'C:\xampp\htdocs\WikiBeerTPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8922226b382_31947949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51240091d75de06066d499b6a12f9b833c43d96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WikiBeerTPE\\templates\\header.tpl',
      1 => 1539871243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_5bc8922226b382_31947949 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://<?php echo $_SERVER['SERVER_NAME'];?>
/WikiBeerTPE/">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WikiBeer!</title>
</head>

<body>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
