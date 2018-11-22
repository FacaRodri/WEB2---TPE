'use strict';

let urlAPI = "api/detalles";
let templateComentarios;


document.addEventListener('DOMContentLoaded', loadComments);

function loadComments(){
  //DESCARGAR Y COMPILAR EL TEMPLATE (SE DESCARGA UNA VEZ AL PRINCIPIO)
  fetch('js/templates/comentarios.handlebars')
    .then(response => response.text())
    .then(template => {
      templateComentarios = Handlebars.compile(template); // compila y prepara el template

      getComentarios();

      document.querySelector("#comment").addEventListener('click', agregarComentario);
      let timer = setInterval(getComentarios, 2000);
  });
}
function getComentarios() {
    var url = window.location.pathname;
    var id_cerveza= url.substring(url.lastIndexOf('/') + 1);
    console.log(id_cerveza);
    fetch(urlAPI + '/' + id_cerveza)
    .then(r => r.json())
    .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
        console.log(jsonComentarios);
    })
  }
function mostrarComentarios(jsonComentarios) {

  //INSTANCIAR TEMPLATE CON UN CONTEXTO
    let context = { // como el assign de smarty
        comentarios: jsonComentarios,
    }

    let html = templateComentarios(context);
    document.querySelector(".comentarios").innerHTML = html;

    let b = document.querySelectorAll(".borrar");
    let administador = document.querySelector(".admin").getAttribute("data");
    if (administador === "admin") {
      b.forEach(b=> {b.addEventListener("click",function(){borrarComentario(b.getAttribute("data"))});
      b.removeAttribute("hidden");

    });
  }
}

function agregarComentario(){
  //Aca deberiamos agarrar los input de mensaje puntaje id recital y id usuario
  //para pasarlos al objeto
  let puntaje = document.querySelector("#puntaje").value;
  let comentario = document.querySelector("#comentario").value;
  let cerveza = document.querySelector("#id_cerveza").value;
  let usuario = document.querySelector("id_usuario").getAttribute("data");

  console.log(recital);
  //Creamos el objeto comentario para enviar, con los atributos de la DB
  let comentario = {
    "puntaje": puntaje,
    "comentario": comentario,
    "id_cerveza": cerveza,
    "id_usuario": usuario
    
  }

  //ID USUARIO Y ID RECITAL HARDCODEADO, ESTO SE TIENE QUE CAMBIAR

  fetch(urlAPI, {
    'method': 'POST',
    'headers': {'content-type': 'application/json'},
    'body': JSON.stringify(comentario)
  })
  .then(r => {
    if(r.ok){
      r.json().then(t => {
        console.log("Se cargo con éxito");
        getComentarios();
        //Se deberian vaciar los puntajes y texto
        //Acá se deberia volver a llamar a la función de cargar comentarios, todavia no
      })
    }
  })
  let comentario = document.querySelector("#comentario");
  comentario.value = '';
  comentario.innerHTML = '';
}


  function borrarComentario(id_comentario){
    console.log("borrar");
    console.log(id_comentario);
    fetch(urlAPI + '/' + id_comentario,  {
    'method': 'DELETE',
    'headers': {'Content-Type': 'application/json'},
    })
    .then(r => loadComments())
  }