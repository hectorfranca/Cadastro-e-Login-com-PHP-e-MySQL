const uinput = document.getElementById("fusuario");
const einput = document.getElementById("femail");
const sinput = document.getElementById("fsenha");
const rinput = document.getElementById("frepita");
const utext = document.getElementById("utext");
const etext = document.getElementById("etext");
const stext = document.getElementById("stext");
const rtext = document.getElementById("rtext");

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

$(femail).focus (function() {
    etext.style.fontSize = "1.4em";
    etext.style.margin = "1px 0 0 10px";  
    });
$(femail).blur (function() {
    if (einput.value == '') {
        etext.style.fontSize = "1.5em";
        etext.style.margin = "18px 0 0 10px";  
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

$(frepita).focus (function() {
    rtext.style.fontSize = "1.4em";
    rtext.style.margin = "1px 0 0 10px";  
    });
$(frepita).blur (function() {
    if (rinput.value == '') {
        rtext.style.fontSize = "1.5em";
        rtext.style.margin = "18px 0 0 10px";  
        }
    });