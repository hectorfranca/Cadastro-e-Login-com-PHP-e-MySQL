const uinput = document.getElementById("fusuario");
const sinput = document.getElementById("fsenha");
const utext = document.getElementById("utext");
const stext = document.getElementById("stext");

$(fusuario).focus (function() {
    utext.style.fontSize = "1.4em";
    utext.style.margin = "1px 0 0 10px";  
    });
$(fusuario).blur (function() {
    if (uinput.value == '') {
        utext.style.fontSize = "1.5em";
        utext.style.margin = "18px 0 0 10px";  
        }
    });

$(fsenha).focus (function() {
    stext.style.fontSize = "1.4em";
    stext.style.margin = "1px 0 0 10px";  
    });
$(fsenha).blur (function() {
    if (sinput.value == '') {
        stext.style.fontSize = "1.5em";
        stext.style.margin = "18px 0 0 10px";  
        }
    });