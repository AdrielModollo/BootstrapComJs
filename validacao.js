
//Restringir código  
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


var deBase64 = atob('TWFyaW5hIGV1IHRlIGFtbw==')

function reciproco(){
        var amor = prompt("Digite a senha:");
    if (amor ==  deBase64){
        window.alert('Parabéns por chegar até aqui, só para garantir vamos para a próxima etapa! rsrs') 
        //Se você está aqui, você estava tentando quebrar meu código, sinto muito o link abaixo é protegido por senha. Boa tentativa! rssrs
            location.href="https://fatecspgov-my.sharepoint.com/:f:/g/personal/adriel_modollo_fatec_sp_gov_br/EumyKg-S-WlKqNrogUTJGq4BXwL_X0mNZBJ6w7BAJWDPLg?e=ruAWmX";
        }
    else {
        window.alert('Sinto muito, este repositório é privado e precisa da senha correta para acesso! :(')
    }
}

