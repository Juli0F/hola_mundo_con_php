function callFunction(e){
	let nombre = document.getElementById("input");
	let div_saludo = document.getElementById("wrapper");


	div_saludo.firstElementChild.innerText = "Hola " + nombre.value +", TS1";

	console.log("saludo div "+div_saludo.firstElementChild.innerText);
	console.log(nombre);


} 
