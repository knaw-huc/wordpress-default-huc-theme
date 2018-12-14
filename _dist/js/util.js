// get all headers 2 and 3.
var elems = document.querySelectorAll('h2,h3');

// adb anchor link to each header
for (var i = 0; i < elems.length; i++) {
    var hId = elems[i].getAttribute( 'id' );
    document.body.innerHTML = document.body.innerHTML.replace('<h2 id="'+hId, '<a id="l'+hId+'"></a><h2 id="'+hId);
}


// Generate a navigation list
var headerNavigation = '';
for (var i = 0; i < elems.length; i++) {
    var hId = elems[i].getAttribute( 'id' );

    headerNavigation = headerNavigation+'<a href="#">'+hId+'</a>';
}


document.getElementById("headerNavigation").innerHTML = headerNavigation;
