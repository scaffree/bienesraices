document.addEventListener('DOMContentLoaded', function () {
    eventListeners();
    darkMode();
});
function darkMode() {
    

    const btnDarkMode = document.querySelector('.dark-mode-boton');
    btnDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
    })
}
function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {

    const navegacion = document.querySelector('.navegacion');
    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }


    /*  la valdacionn del if se puede
     realizar de manera mas corta agregando .toggle
     
     navegacion.classList.toggle('mostrar');
 
     esto validara automaticamente si la clase existe o no 
     y la eliminara/agregara dependiendo del caso
      */
}
