// Conteo

var cuadro1 = cuadro2 = cuadro3 = cuadro4 = 0;

// Img 1
function CambioImagen1(Img_url, Cua_cod, Act_cod, Usu_id) {
	cuadro1 = cuadro1 + 1;
	document.getElementById("onom1").src = Img_url;
}

// Img 2
function CambioImagen2(Img_url, Cua_cod, Act_cod, Usu_id) {
	cuadro2 = cuadro2 + 1;
	document.getElementById("onom2").src = Img_url;
  x = false;
}

// Img 3
function CambioImagen3(Img_url, Cua_cod, Act_cod, Usu_id) {
	cuadro3 = cuadro3 + 1;
	document.getElementById("onom3").src = Img_url;
}

// Img 4
function CambioImagen4(Img_url, Cua_cod, Act_cod, Usu_id) {
	cuadro4 = cuadro4 + 1;
	document.getElementById("onom4").src = Img_url;
}


// Finalizar
function OnomFin() {
var sig = document.getElementById('siguiente');

	if (cuadro1>0 && cuadro2>0 && cuadro3>0 && cuadro4>0){
		sig.style.display = 'block';
		FinalMsj();
		playBeHappy();
		playBienHecho();
		}
	}

	function FinalMsj() {
	    document.getElementById("cartel").className = "bien hecho";
			document.getElementById("campo").className = "row fondo osc";
			document.getElementById("onom1").className = "fondo osc";
			document.getElementById("onom2").className = "fondo osc";
			document.getElementById("onom3").className = "fondo osc";
			document.getElementById("onom4").className = "fondo osc";
	}
