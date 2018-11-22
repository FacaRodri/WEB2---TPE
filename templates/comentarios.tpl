<div class="container-fluid">
    <div>
      <h1>Comentario:</h1>
    </div>
    {* {if (isset($smarty.session.usuario))} *}
    {$smarty.session.id_usuario|@print_r}
    {* {if $Smarty.session.admin == 1} *}
    <input type="input" hidden="hidden" class="admin" value="" data="admin">
        {* {else} *}
            <input type="input" hidden="hidden" class="admin" data="noAdmin">
  {* {/if} *}

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
        <input type="input" hidden="hidden" id="id_usuario" value="" data="{$smarty.session.id_usuario}">
        <input type="input" hidden="hidden" id="id_cerveza" value="">
    </div>
  <button type="submit" class="btn btn-primary" id="agregarComentario" name="agregarComentario">ENVIAR</button>
  {* {/if}  *}
</div>