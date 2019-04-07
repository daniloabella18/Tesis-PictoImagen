
function createRequestObject() {
   var ro;
   var browser = navigator.appName;
   if(browser == "Microsoft Internet Explorer"){
       ro = new ActiveXObject("Microsoft.XMLHTTP");
   }else{
       ro = new XMLHttpRequest();
   }
   return ro;
}

var http = createRequestObject();

function sndReq(action,act) {
   http.open('get', 'rpc.php?action='+action+'&act='+act);
   //http.onreadystatechange = handleResponse;
   http.send(null);
}

// Necesitas esto: <div id="foo"></div> en el php para que surga efecto
/*
function handleResponse() {
   if(http.readyState == 4){
       var response = http.responseText;
       var update = new Array();

       if(response.indexOf('|' != -1)) {
           update = response.split('|');
           document.getElementById(update[0]).innerHTML = update[1];
       }
   }
}
*/
