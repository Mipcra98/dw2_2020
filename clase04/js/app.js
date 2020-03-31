console.log("funciona");
var lista=[];
var frutas=["naranja", 2, "manzana"];
console.log(frutas);
console.log(frutas[0]);
console.log(frutas.length);
frutas[1]="frutillas";
console.log(frutas);
frutas.push("pera");
console.log(frutas);
frutas.push("sandía", "melón");
console.log(frutas);
frutas.unshift("ceresa", "pomelo");
console.log(frutas);
//
console.log(frutas.sort());
var numeros=[1,2,3,40,100,11,101];
console.log(numeros.sort());
//
for (let i= 0; i<frutas.length;i ++){
  console.log(frutas[i]);
}
////////////////// Funciones
var a =5;
var b = 2;
function sumar(a,b){
  return a+b;
}
console.log(sumar(a,b));

var suma = function (a,b) { return a+b;}
console.log(suma(a+b));

var flecha = (a,b) => { return a+b; }
console.log(flecha(a+b));

var x =5,y=0,z=6;
console.log(x);
console.log(y);
console.log(z);

//
frutas.forEach((item, i) => {
  console.log("index = " +i+ " valor = "+item);
});
