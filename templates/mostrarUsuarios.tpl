{include file="header.tpl"}

    <div class="container">
      <ul class="list-group">
            {foreach from=$Usuarios item=usuario}

                <li class="list-group-item">{$usuario['nombre']} ----- {$usuario['clave']}<a href="borrar/{$usuario['id_usuario']}">BORRAR</a> </li>

            {/foreach}
      </ul>
    </div>


{include file="footer.tpl"}
