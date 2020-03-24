console.log("Punto A");
var numero01 = 5;
console.log("Tabla del "+ numero01);
for (var i = 1; i <= 10; i++){
  console.log(numero01 + "x"+ i +"= "+(i*numero01));
}



console.log("Punto B");
var numero02 = 5;
var numero03 = 6;
if (numero02>numero03){
  console.log("Por favor, cambie los valores, el primero no puede ser mayor al segundo");
}
else {
  console.log("Tabla del "+ numero02);
  for (var i = 1; i <= 10; i++){
    console.log(numero02 + "x"+ i +"= "+(i*numero02));
  }
  console.log("Tabla del "+ numero03);
  for (var i = 1; i <= 10; i++){
    console.log(numero03 + "x"+ i +"= "+(i*numero03));
  }
}
