I find a lot of this AJAX stuff a bit of a hype.  Lots of people have
been using similar things long before it became "AJAX".  And it really
isn't as complicated as a lot of people make it out to be.  Here is a
simple example from one of my apps.

First the Javascript:

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

function sndReq(action) {
    http.open('get', 'rpc.php?action='+action);
    http.onreadystatechange = handleResponse;
    http.send(null);
}

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

This creates a request object along with a send request and handle
response function.  So to actually use it, you could include this js in
your page.  Then to make one of these backend requests you would tie it
to something.  Like an onclick event or a straight href like this:

  <a href="javascript:sndReq('foo')">[foo]</a>

That means that when someone clicks on that link what actually happens
is that a backend request to rpc.php?action=foo will be sent.

In rpc.php you might have something like this:

  switch($_REQUEST['action']) {
    case 'foo':
      / do something /
      echo "foo|foo done";
      break;
    ...
  }

Now, look at handleResponse.  It parses the "foo|foo done" string and
splits it on the '|' and uses whatever is before the '|' as the dom
element id in your page and the part after as the new innerHTML of that
element.  That means if you have a div tag like this in your page:

  <div id="foo">
  </div>

Once you click on that link, that will dynamically be changed to:

  <div id="foo">
  foo done
  </div>

That's all there is to it.  Everything else is just building on top of
this.  Replacing my simple response "id|text" syntax with a richer XML
format and makine the request much more complicated as well.  Before you
blindly install large "AJAX" libraries, have a go at rolling your own
functionality so you know exactly how it works and you only make it as
complicated as you need.  Often you don't need much more than what I
have shown here.

Expanding this approach a bit to send multiple parameters in the
request, for example, would be really simple.  Something like:

  function sndReqArg(action,arg) {
    http.open('get', 'rpc.php?action='+action+'&arg='+arg);
    http.onreadystatechange = handleResponse;
    http.send(null);
  }

And your handleResponse can easily be expanded to do much more
interesting things than just replacing the contents of a div.

-Rasmus
