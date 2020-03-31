var Origen=[];
function generador() {
  var a = (Math.random(0,1))*100;
  return Math.floor(a);
}
for (var i = 0; i<10; i++){
  Origen[i]=generador();
}
console.log("Origen = "+Origen);
var Destino = [];
Destino = Origen;
function ordenar(a,b){
  return a-b;
}
Destino.sort(ordenar)
console.log("Destino = "+Destino);
