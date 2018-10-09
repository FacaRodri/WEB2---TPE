
{include file="header.tpl"}
{include file="nav.tpl"}
<div class="container-fluid" id="container">
        <div class="row">
            <div class="col-md-2">
                <img src="img/Anuncio5.jpg" width="100%" alt="Anuncio">
                <div class="mt-4">
                    <img src="img/Anuncio6.jpg" width="100%" alt="Anuncio">
                </div>
                <div class="mt-4">
                    <img src="img/Anuncio7.jpg" width="100%" alt="Anuncio">
                </div>
            </div>
            <div class="col-md-8">
                <legend class="text-center letraContacto">CONTACTANOS!</legend>
                <form>
                    <div class="form-row">
                        <div class="col-md-6 ">
                            <label class="colorForm" for="validationDefault01">Nombre</label>
                            <input type="text" class="form-control " id="validationDefault01" placeholder="Nombre" value="" required>
                        </div>
                        <div class="col-md-6 ">
                            <label class="colorForm" for="validationDefault02">Apellido</label>
                            <input type="text" class="form-control " id="validationDefault02" placeholder="Apellido" value="" required>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-12 ">
                            <label class="colorForm" for="validationDefault02">Email</label>
                            <input type="text" class="form-control " id="validationDefault02" placeholder="Email" value="" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <label class="colorForm" for="message">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Ingrese su mensaje aqui..." rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mt-4 text-center ">
                            <button type="submit" class="btn btn-primary btn-lg ">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2 ">
                <img src="img/Anuncio1.jpg" width="100%" alt="Anuncio">
                <div class="mt-4">
                    <img src="img/Anuncio2.jpg" width="100%" alt="Anuncio">
                </div>
                <div class="mt-4">
                    <img src="img/Anuncio4.jpg" width="100%" alt="Anuncio">
                </div>

            </div>
        </div>
    </div>
    {include file="footer.tpl"}
