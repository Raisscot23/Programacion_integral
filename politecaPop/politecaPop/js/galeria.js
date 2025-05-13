const btnCierra = document.querySelector("#btn-cerrar");
const btnAdelante = document.querySelector("#btn-adelante");
const btnAtras = document.querySelector("#btn-atras");
const imagenes = document.querySelectorAll("#contenido img");
const  lightbox = document.querySelector("#contenedor-principal");
const imagenActiva = document.querySelector("#imagen-activa");
let idicieImagen = 0;

const abreLightbox = (event) =>{
    imagenActiva.src = event.target.src;
    lightbox.style.display = 'flex';
    idicieImagen = Array.from(imagenes).indexOf(event.target)
}

imagenes.forEach((imagen) => {
    imagen.addEventListener('click', abreLightbox);
});

/*-------------------*/

btnCierra.addEventListener('click', () => {
    lightbox.style.display = 'none';
})

/*-------------------*/

const adelantaImagen = () => {
    if(idicieImagen === imagenes.length -1){
        idicieImagen = -1;
    }
    imagenActiva.src = imagenes[idicieImagen + 1].src;
    idicieImagen++;
}

btnAdelante.addEventListener('click', adelantaImagen);

const atrasImagen = () => {
    if(idicieImagen === 0){
        idicieImagen = idicieImagen.length;
    }
    imagenActiva.src = imagenes[idicieImagen - 1].src;
    idicieImagen--;
}

btnAtras.addEventListener('click', atrasImagen);
