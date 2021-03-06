
//Desplegable Flecha//
const flecha = document.querySelector('.paginas-flecha');   
const portafolio = document.querySelector('.web');

flecha.addEventListener('click', function() {
    document.getElementById('web').classList.toggle('show');
    flecha.classList.toggle('toggle');
});
