// Onomatopeya
function playOnomatopeya() {
  var onomatopeya = document.getElementById("OnomatopeyaActual");// Es la id del sonido.
  onomatopeya.play();
}

function playOnomatopeya2() {
  var onomatopeya2 = document.getElementById("OnomatopeyaActual2");// Es la id del sonido.
  onomatopeya2.play();
}

// Motivacional
function playMotivacional() {
  var motiv = document.getElementById("motivacional");// Es la id del sonido.
  motiv.play();
  var equiv = document.getElementById("equivoc");// Es la id del sonido.
  equiv.play();
}

// Bien Hecho!
function playBienHecho() {
  var bh1 = document.getElementById("BH1mp3");// Es la id del sonido.
  bh1.play();
}

var veces = 0;
function playBienHechoInGame() {
  var good = document.getElementById("Good");// Es la id del sonido.
  good.play();
  if (veces == 0){
    var bh2 = document.getElementById("BH2mp3");// Es la id del sonido.
    bh2.play();
    veces = 1;
  }
}

// Be Happy!
function playBeHappy() {
  console.log(1);
  var behappy = document.getElementById("BeHappymp3");// Es la id del sonido.
  behappy.play();
}

// Fotos del Sonido
function playFotoSonido() {
  var fs = document.getElementById("FS");// Es la id del sonido.
  fs.play();
}
