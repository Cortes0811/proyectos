let animado = document.querySelectorAll("#Sec_");

function mostrarScoll () {
    let scrollTop =document.documentElement.scrollTop;
    for (var i=0; 1 < animado.length; i++) {
        let alturaAnimado = animado[i].offsetTop;
        if(alturaAnimado <scrollTop) {
            animado[i].style.opacity = 1;
        }
    }
}