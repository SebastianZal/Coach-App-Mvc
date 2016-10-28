function logowanie(){
if(sprawdz === "TRUE"){
	document.getElementById("logout").style.display = "inline-block";
} else if (sprawdz === "FALSE"){
	document.getElementById("login").style.display = "inline-block";
} else {
    alert("error - nie TRUE i nie FALSE");
}
}

window.onload = logowanie;


function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        });
}

$(document).ready(function(){
    $('#animacja').each(function() {
        animationHover(this, 'fadeOutUp');
    });
})