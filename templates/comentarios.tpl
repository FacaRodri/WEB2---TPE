<div class="container-fluid">
        <input type="input" hidden="hidden" class="admin" value="{$smarty.session.admin}" data="admin">
{if (isset($smarty.session.admin))}
        <div class="form-group">
            <textarea class="form-control" id="comentario" rows="5" placeholder="¡Comentanos aqui!"></textarea>
            <label class="editarLabel" for="puntaje">PUNTAJE</label>
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
    {else}
    <div>
    </div>
{/if}
    
</div>