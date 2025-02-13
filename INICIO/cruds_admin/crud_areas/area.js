let listElements = document.querySelectorAll('.list_button--click');

listElements.forEach(listElement =>{
    listElement.addEventListener('click', ()=>{
        
        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        console.log()
        if (menu.clientHeight == "0") {
            height = menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
}); 

   //---------------------------------------------------------//

const images = document.querySelectorAll('.carousel-images img');
    let currentIndex = 0;
    const totalImages = images.length;
    const imageDuration = 7000;  // Duración en milisegundos (7 segundos)
    const fadeDuration = 1000;   // Duración del desvanecimiento en milisegundos

    // Función para cambiar las imágenes
    function changeImage() {
        // Ocultar todas las imágenes (haciendo que se desvanezcan)
        images.forEach((image) => {
            image.style.opacity = 0;
        });

        // Mostrar la imagen actual
        images[currentIndex].style.opacity = 1;

        // Avanzar al siguiente índice
        currentIndex = (currentIndex + 1) % totalImages;
    }

    // Iniciar el carrusel (cambiar imagen cada 7 segundos)
    setInterval(changeImage, imageDuration);

    // Mostrar la primera imagen al cargar la página
    changeImage();

    //---------------------------------|------------------------//

    
    