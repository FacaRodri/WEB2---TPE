'use strict';

let urlAPI = "api/detalles";
let templateComentarios;


document.addEventListener('DOMContentLoaded', loadComments);

function loadComments(){
  fetch('js/templates/comentarios.handlebars')
    .then(response => response.text())
    .then(template => {
      templateComentarios = Handlebars.compile(template);

      getComentarios();

      document.querySelector("#agregarComentario").addEventListener('click', agregarComentario);
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
  var url = window.location.pathname;
  var idcer = url.substring(url.lastIndexOf('/') + 1);
  let puntaje = document.querySelector("#puntaje").value;
  let comentario = document.querySelector("#comentario").value;
  let cerveza = idcer;
  let usuario = document.querySelector("#id_usuario").getAttribute("data");

  let comentarios = {
    "puntaje": puntaje,
    "comentario": comentario,
    "id_cerveza": cerveza,
    "id_usuario": usuario    
  }

  fetch(urlAPI, {
    'method': 'POST',
    'headers': {'content-type': 'application/json'},
    'body': JSON.stringify(comentarios)
  })
  .then(r => {
    if(r.ok){
      r.json().then(t => {
        console.log("Se cargo con éxito");
        getComentarios();
      })
    }
  })
  let mensaje = document.querySelector("#comentario");
  mensaje.value = '';
  mensaje.innerHTML = '';
  console.log(comentarios)
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