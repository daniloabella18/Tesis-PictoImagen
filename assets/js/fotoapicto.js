// Conteo
var cuadro1 = cuadro2 = cuadro3 = cuadro4 = 0;

function CambioPicto1() { cuadro1 = cuadro1 + 1; }
function CambioPicto2() { cuadro2 = cuadro2 + 1; }
function CambioPicto3() {cuadro3 = cuadro3 + 1; }
function CambioPicto4() { cuadro4 = cuadro4 + 1; }

// Add active class to the current button (highlight it)
var header = document.getElementById("campo");
var btns = header.getElementsByClassName("btn");
var current = document.getElementsByClassName("cambiado");
var i = 0;

for (i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function() {
		console.log(i);
		current = document.getElementsByClassName("btn");
		this.className += " cambiado";
	});
}

// Finalizar
function OnomFin() {

	if (cuadro1>0 && cuadro2>0 && cuadro3>0 && cuadro4>0){
		var sig = document.getElementById('siguiente');
		sig.style.display = 'block';
		//Sonido del Tema
		playBienHecho();
		playBeHappy();

		FinalMsj();
		}
	}

	function FinalMsj() {
	    document.getElementById("cartel").className = "bien hecho";
			document.getElementById("campo").className = "row fondo osc";/*
			document.getElementById("cu1").className = "btn cambiado fondo osc";
			document.getElementById("cu2").className = "btn cambiado fondo osc";
			document.getElementById("cu3").className = "btn cambiado fondo osc";
			document.getElementById("cu4").className = "btn cambiado fondo osc";*/
	}
