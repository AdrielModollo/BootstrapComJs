
//Restringir código  teste
window.onload = function () {
    document.addEventListener("contextmenu", function (e) {
        e.preventDefault();
    }, false);
    document.addEventListener("keydown", function (e) {
        //document.onkeydown = function(e) {
        // "I" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
            disabledEvent(e);
        }
        // "J" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            disabledEvent(e);
        }
        // "S" key + macOS
        if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
            disabledEvent(e);
        }
        // "U" key
        if (e.ctrlKey && e.keyCode == 85) {
            disabledEvent(e);
        }
        // "F12" key
        if (event.keyCode == 123) {
            disabledEvent(e);
        }
    }, false);
    function disabledEvent(e) {
        if (e.stopPropagation) {
            e.stopPropagation();
        } else if (window.event) {
            window.event.cancelBubble = true;
        }
        e.preventDefault();
        return false;
    }
}



function reciproco(){
        var amor = prompt("Digite a senha:");
    if (amor.toUpperCase() ==  'MARINA' || amor.toUpperCase() == 'MARINA FURTADO' || amor.toUpperCase() == 'MARINA FURTADO BORGES' || amor.toUpperCase() == 'MARINA FURTADO BORGES MODOLLO'){
            location.href="https://1drv.ms/u/s!Avd2kPPifc10hWaN74jSYB8-IzrU?e=c6tt5F";
        }
    else {
        window.alert('Sinto muito, este repositório é privado e precisa da senha correta para acesso! :(')
    }
}

