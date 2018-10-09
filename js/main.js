"use strict"
let urlTipos = "tiposDeCerveza.html"
let urlHome = "home.html"
let urlInfoCurso = "informacionCurso.html"
let urlForm = "inscripcionCurso.html"
let urlContacto = "contacto.html"
let urlInscriptos = "inscriptos.html"

traerHome();
document.querySelector(".tipos").addEventListener("click", traerTiposdecerveza);
document.querySelector(".home").addEventListener("click", traerHome);
document.querySelector(".homeLogo").addEventListener("click", traerHome);
document.querySelector(".infoCurso").addEventListener("click", traerInfoCurso);
document.querySelector(".inscripcion").addEventListener("click", traerForm);
document.querySelector(".contacto").addEventListener("click", traerContacto);


function traerHome() {
  fetch(urlHome).then(
    function (r) {
      r.text().then(function (r) {
        document.querySelector(".partialContenedor").innerHTML = r;
      })
    })
    .catch(function (response) {
      document.querySelector(".partialContenedor").innerHTML = "<h1>SIN CONEXION</h1>"
    });
}
function traerTiposdecerveza() {

  fetch(urlTipos).then(
    function (r) {
      r.text().then(function (r) {
        document.querySelector(".partialContenedor").innerHTML = r;
      })
    })
    .catch(function (response) {
      document.querySelector(".partialContenedor").innerHTML = "<h1>NO Cargando...</h1>"
    });
}
function traerInfoCurso() {
  fetch(urlInfoCurso).then(
    function (r) {
      r.text().then(function (r) {
        document.querySelector(".partialContenedor").innerHTML = r;
      })
    })
    .catch(function (response) {
      document.querySelector(".partialContenedor").innerHTML = "<h1>SIN CONEXION</h1>"
    });
}
function traerForm() {
  fetch(urlForm).then(
    function (r) {
      r.text().then(function (r) {
        document.querySelector(".partialContenedor").innerHTML = r;
        document.querySelector(".enviarDatos").addEventListener('click', enviar);
        document.querySelector(".enviarDatos3veces").addEventListener('click', enviar3veces);
        document.querySelector(".filtrarPorCiudad").addEventListener('click', filtrarPorCiudad);
        traerTabla();

      })
    })
    .catch(function (response) {
      document.querySelector(".partialContenedor").innerHTML = "<h1>SIN CONEXION</h1>"
    });

}
function traerContacto() {
  fetch(urlContacto).then(
    function (r) {
      r.text().then(function (r) {
        document.querySelector(".partialContenedor").innerHTML = r;
      })
    })
    .catch(function (response) {
      document.querySelector(".partialContenedor").innerHTML = "<h1>SIN CONEXION</h1>"
    });
}

let baseURL = 'https://web-unicen.herokuapp.com/api/groups/';
let url = baseURL + "grupo48/curso/";

function traerTabla() {
  fetch(url).then(info => info.json())
    .then(t => cargar(t.curso))
    .catch()
  function cargar(x) {
    let tt = "";
    for (let i = 0; i < x.length; i++) {
      tt = tt + "<tr><td>" + x[i].thing.nombre + "</td><td>" + x[i].thing.apellido + "</td><td>" + x[i].thing.ciudad + "</td><td><button id='" + x[i]._id + "' class='btnborrar'>Borrar</button></td><td><button id='" + x[i]._id + "' class='btneditar'>Editar</button></td></tr>";
    }
    let tabla = document.querySelector('.js-tablainscriptos').innerHTML = tt;
    let btndelete = document.querySelectorAll('.btnborrar');
    let btnedit = document.querySelectorAll('.btneditar');
    btndelete.forEach(b => {
      b.addEventListener('click', e => BorrarElemento(b.id));
    });
    btnedit.forEach(b => {
      b.addEventListener('click', e => EditarElemento(b.id));
    });
  }
}
function enviar3veces() {
  enviar();
  enviar();
  enviar();
}
function filtrarPorCiudad() {
  let filtro = document.querySelector(".inputfiltrarPorCiudad").value;
  fetch(url).then(info => info.json())
    .then(t => cargar(t.curso))
    .catch()
  function cargar(x) {
    let tt = "";
    for (let i = 0; i < x.length; i++) {
      if (x[i].thing.ciudad.toLowerCase() == filtro.toLowerCase()) {
        tt = tt + "<tr ><td>" + x[i].thing.nombre + "</td><td>" + x[i].thing.apellido + "</td><td>" + x[i].thing.ciudad + "</td><td><button id='" + x[i]._id + "' class='btnborrar'>Borrar</button></td><td><button id='" + x[i]._id + "' class='btneditar'>Editar</button></td></tr>";
      }


    }
    let tabla = document.querySelector('.js-tablainscriptos').innerHTML = tt;
    let btndelete = document.querySelectorAll('.btnborrar');
    let btnedit = document.querySelectorAll('.btneditar');
    btndelete.forEach(b => {
      b.addEventListener('click', e => BorrarElemento(b.id));
    });
    btnedit.forEach(b => {
      b.addEventListener('click', e => EditarElemento(b.id));
    });
  }
}

function enviar() {
  let apellido = document.querySelector(".apellido").value;
  let nombre = document.querySelector(".nombre").value;
  let ciudad = document.querySelector(".ciudad").value;

  let provincia = document.querySelector(".provincia").value;
  let pais = document.querySelector(".pais").value;
  let codigoPostal = document.querySelector(".codigoPostal").value;

  let inscripcion = {
    "nombre": nombre,
    "apellido": apellido,
    "ciudad": ciudad,
    "provincia": provincia,
    "pais": pais,
    "codigo postal": codigoPostal,
  }

  let objeto = {
    "thing": inscripcion
  }
  fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(objeto)
  }).then(response =>
    traerTabla()
  );
}

function EditarElemento(id) {
  let apellido = document.querySelector(".apellido").value;
  let nombre = document.querySelector(".nombre").value;
  let ciudad = document.querySelector(".ciudad").value;
  let provincia = document.querySelector(".provincia").value;
  let pais = document.querySelector(".pais").value;
  let codigoPostal = document.querySelector(".codigoPostal").value;
  let inscripcion = {
    "nombre": nombre,
    "apellido": apellido,
    "ciudad": ciudad,
    "provincia": provincia,
    "pais": pais,
    "codigo postal": codigoPostal,
  }
  let objeto = {
    "thing": inscripcion
  }
  fetch(url + id, {
    method: 'PUT', "headers": { "Content-Type": "application/json" },
    "body": JSON.stringify(objeto)
  }).then(response =>
    traerTabla()
  );

}

function BorrarElemento(id) {
  fetch(url + id, {
    method: 'delete'
  }).then(response =>
    traerTabla()
  );

}