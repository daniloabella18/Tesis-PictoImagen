var orden = 0;
var first = true;
var muescorr = false;
var incor1 = 0;
var fin = false;

// DIV de cuadros
var x = document.getElementById("mi1");
var y = document.getElementById("mc1");
var z = document.getElementById("mi2");

function CambiarMsj(nom) {
  nom = nom.toUpperCase();
  if (first==true){
    first = false;
    document.getElementById("msj").innerHTML = "MUEVE LA FOTO DEL " + nom + " AL AREA";
  }
}

function dragStart(event) {
  muescorr = true;
  event.dataTransfer.setData("Text", event.target.id);
  //document.getElementById("msj").innerHTML = "ARRASTRA Y SUELTA LAS FOTOS DEL TEMA EN EL ÁREA";
}

function dragStartF1(event) {
  incor = 1;
  muescorr = false;
}

function dragStartF2(event) {
  incor = 2;
  muescorr = false;
}

function allowDrop(event) {
  event.preventDefault();
}

function drop(event) {
  //  console.log('drop - ', event.target.id, 'is currently at', event.currentTarget.id);
  //  console.log(muescorr);
  if(muescorr==false && fin==false){
    document.getElementById("msj").innerHTML = "VAMOS, TU PUEDES!"
    playMotivacional();
    // Pintado de rojo
    switch (incor) {
      case 1:
        x.style.opacity= 0.5;
        break;
      case 2:
        z.style.opacity= 0.5;
        break;
      default:
        break;
    }
    }else{
      event.preventDefault();
      var data = event.dataTransfer.getData("Text");
      event.target.appendChild(document.getElementById(data));
      document.getElementById("msj").innerHTML = "BIEN HECHO!";

      // Quitar Div Verde tras poner el tema en el Area
      var w = document.getElementById('cuadrocorrecto');
      w.style.display = 'none';

      // Asignar colores a los cuadros
      x.style.opacity= 0.5;
      y.style.opacity= 0.5;
      z.style.opacity= 0.5;

      // Cambiar color al cuadro correcto
      var colorcuadro = document.getElementById("area");
      colorcuadro.style.backgroundColor = "green";

      //Sonido del Tema
      playBienHecho();
      playBeHappy();

      // Siguiente
      var sig = document.getElementById('siguiente');
      sig.style.display = 'block';
      location.href='#subscribe'; // mueve la camara al "section id="subscribe""
		  FinalMsj();
      fin = true;

    }
}

function FinalMsj() {
    document.getElementById("cartel").className = "bien hecho"; //Cartel "Muy Bien!"
    document.getElementById("campo").className = "row fondo osc";
    document.getElementById("mi1").className = "fondo osc";
    document.getElementById("mc1").className = "fondo osc";
    document.getElementById("mi2").className = "fondo osc";
}


//Orden
function Orden() {
	if (orden==0)
	{
		var xd = document.getElementById('cuadro1');
		var yd = document.getElementById('cuadro2');
		var zd = document.getElementById('cuadro3');
		var id = document.getElementById('cuadro4');

		xd.style.display = 'flex';
		xd.style.order = 1;

		orden = Math.floor((Math.random() * 3) + 1);
		yd.style.display = 'flex';
		yd.style.order = orden;

		orden = Math.floor((Math.random() * 3) + 1);
		zd.style.display = 'flex';
		zd.style.order = orden;

		orden = Math.floor((Math.random() * 3) + 1);
		id.style.display = 'flex';
		id.style.order = orden;
	}
}
