document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
})

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResposive)
}

function navegacionResposive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar')

}