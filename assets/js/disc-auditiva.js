
var first = true;
function CambiarMsj() {
  if (first==true){
    first = false;
    document.getElementById("msj").innerHTML = "TOCA LAS FOTOS SOBRE EL SONIDO";
  }
}

// Orden
var orden = 0;
function Orden() {
	if (orden==0)
	{
		var xd = document.getElementById('cuadro1');
		var yd = document.getElementById('cuadro2');
		var zd = document.getElementById('cuadro3');
		var id = document.getElementById('cuadro4');

		orden = Math.floor((Math.random() * 4) + 1);
		xd.style.display = 'flex';
		xd.style.order = orden;

		orden = Math.floor((Math.random() * 4) + 1);
		yd.style.display = 'flex';
		yd.style.order = orden;

		orden = Math.floor((Math.random() * 4) + 1);
		zd.style.display = 'flex';
		zd.style.order = orden;

		orden = Math.floor((Math.random() * 4) + 1);
		id.style.display = 'flex';
		id.style.order = orden;
	}
}

// Conteo
var cor1 = cor2 = incor1 = incor2 = 0;

function Correcto1() {
	cor1 = cor1 + 1;
	var x = document.getElementById("mc1");
	x.style.opacity= 0.5;
}

function Correcto2() {
	cor2 = cor2 + 1;
	var y = document.getElementById("mc2");
	y.style.opacity= 0.5;
}

function Incorrecto1() {
	incor1 = incor1 + 1;
	var z = document.getElementById("mi1");
	z.style.opacity= 0.5;
}

function Incorrecto2() {
	incor2 = incor2 + 1;
	var i = document.getElementById("mi2");
	i.style.opacity= 0.5;
}

// Finalizar
function OnomFin() {

	if (cor1>0 && cor2>0){
		var w = document.getElementById('siguiente');
		w.style.display = 'block';
    FinalMsj();
		}
	}

	function FinalMsj() {
	    document.getElementById("cartel").className = "bien hecho";
			document.getElementById("campo").className = "row fondo osc";
			document.getElementById("mi1").className = "fondo osc";
			document.getElementById("mc1").className = "fondo osc";
			document.getElementById("mi2").className = "fondo osc";

      playBeHappy();
      playBienHecho();
	}
