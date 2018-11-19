<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://{$smarty.server.SERVER_NAME}/WikiBeerTPE/">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WikiBeer!</title>
</head>

<body>
   {if (isset($smarty.session.nombre))}
  {if $smarty.session.admin == 1}
    {include file="navAdmin.tpl"}
  {else}
    {include file='nav.tpl'}
  {/if}
{else}
  {include file="navVisitante.tpl"}
{/if}