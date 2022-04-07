// Zmena textu pomocou ONCLICK a ONMOUSEOVER
function zmena_text(){
    document.getElementById("zmena_text").style.fontSize="150%";
    document.getElementById("zmena_text").style.fontFamily="Courier New";
 }

//zmena textu pomocou MOUSEDOWN
document.getElementById("mousedown").addEventListener("mousedown", mouseDown);
document.getElementById("mousedown").addEventListener("mouseup", mouseUp);

function mouseDown() {
    document.getElementById("zmena_text").style.fontSize="150%";
    document.getElementById("zmena_text").style.fontFamily="Courier New";
}

function mouseUp() {
    document.getElementById("zmena_text").style.fontFamily="Arial";  
    document.getElementById("zmena_text").style.fontSize="100%";
}