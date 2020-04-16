document.getElementsByTagName('body')[0].onload=cargarDatos();
var lista=[]; //Creamos el contenedor de todos los Datos

function cargarDatos() {
  // console.log(JSON.parse(localStorage.Archivo));
  lista=JSON.parse(localStorage.Archivo);//Hacemos la recarga de los datos del archivo al sistema
  console.log("Cargando datos del archivo");
  MostrarGuardados();
}

document.getElementById("Enviar").onclick=GuardarDatos;//Cada vez que se haga clinck en el botón enviar se ejecutará esta función
function GuardarDatos() {
  cargarDatos();
  if(document.getElementById("ID").value==""){ //comprobamos el id, para saber si es momento de Edición o Almacenamiendo directo
    console.log("Añadiendo datos al sistema");
    lista.push([document.getElementById("nombre").value,document.getElementById("apellido").value,document.getElementById("telefono").value]);
  } else{
    console.log("Editando datos del sistema");
    var ubicacion = document.getElementById("ID").value;
    lista[ubicacion][0] = document.getElementById("nombre").value;
    lista[ubicacion][1] = document.getElementById("apellido").value;
    lista[ubicacion][2] = document.getElementById("telefono").value;
  }
  LimpiarFormulario();
  MostrarGuardados();
  GuardarEnArchivo();
}

function MostrarGuardados(){
  var impresion="";
  lista.forEach((itemEnUbicacion, ubicacion) => { //guardamos en una variable de tipo cadena de texto, como se veran las cosas y los datos importantes
    impresion=impresion +"<div class='card text-dark bg-light mb-3 float-left' style='width: 20rem;margin-left:1rem'>"+"<div class='card-header'>Alumno Nº "+ubicacion+"</div>"+"<div class='card-body'>"+"<div class='card-text' style='width: 10rem;margin-left:10px;float:left'><span>ID: </span>"+ ubicacion+"<br>" +"<span>Nombre: </span>"+ itemEnUbicacion[0] +"<br>"+"<span>Apellido: </span>"+ itemEnUbicacion[1] +"<br>"+"<span>Teléfono: </span>"+ itemEnUbicacion[2]+"<br></div>"+"<div style='width: 5rem;margin-left:10px;float:right'><button class='botEditar btn btn-warning'type='button' id='Editar' data-id='"+ubicacion+"'>Editar</button><button style='margin-top:1rem;' class='botBorrar btn btn-danger'type='button' id='Borrar' data-id='"+ubicacion+"'>Borrar</button></div></div></div>"
//     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
//   </div>
// </div>
    // impresion=impresion+"<p class='card header'>Alumno Nº "+ubicacion+"</p>"+"<span>ID: </span>"+ ubicacion+"<br>" +"<span>Nombre: </span>"+ itemEnUbicacion[0] +"<br>"+"<span>Apellido: </span>"+ itemEnUbicacion[1] +"<br>"+"<span>Teléfono: </span>"+ itemEnUbicacion[2]+"<br>"+"<br>";
  });
  document.getElementById("importardatos").innerHTML="<h3>Contactos Registrados</h3><br>"+impresion; //enviamos lo almacenado en la variable al HTML, y ya se convierte en lo que habíamos programado

  var botonEditar=document.getElementsByClassName('botEditar'); //PREGUNTAR BIEN AL PROFE COMO FUNCIONA ESTA PARTE
  for (var i = 0; i < botonEditar.length; i++) {
    botonEditar[i].onclick=editarRegistro;
    }

  var botontBorrar=document.getElementsByClassName('botBorrar');
  for (var i = 0; i < botontBorrar.length; i++) {
    botontBorrar[i].onclick=borrarRegistro;
    }
}

function borrarRegistro(w){
  cargarDatos();
  var fila = w.target;            //PREGUNTAR ESTA PARTE TAMBIÉN
  var ubicacion = fila.attributes["data-id"].value;
  lista.splice(ubicacion,1);
  MostrarGuardados();
  GuardarEnArchivo();
}

function editarRegistro(q){ //Acá hacemos el ingreso de los datos de la tabla en el que se pulsó editar, al formulario del HTML para luego editarlo
  cargarDatos();
  var fila = q.target;
  var ubicacion = fila.attributes["data-id"].value;
  document.getElementById("ID").value = ubicacion;
  document.getElementById("nombre").value = lista[ubicacion][0];
  document.getElementById("apellido").value = lista[ubicacion][1];
  document.getElementById("telefono").value = lista[ubicacion][2];
  document.getElementById("nombre").focus(); //Establecemos foco o cursor sobre el nombre, para directamente ir editando
}

function LimpiarFormulario(){ //Vacía el formulario luego de enviar los datos
    document.getElementById('ID').value="";
    document.getElementById('nombre').value="";
    document.getElementById('apellido').value="";
    document.getElementById('telefono').value="";
    document.getElementById('nombre').focus();
}

function GuardarEnArchivo() { //Función que realiza la transferencia de los datos a un archivo
  localStorage.setItem("Archivo",JSON.stringify(lista));
  console.log("Guardando en Archivo");
}
