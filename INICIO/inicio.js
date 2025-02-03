
//Carrusel----------------------------

const carousel = document.querySelector('.carousel-images');
        const navLinks = document.querySelectorAll('.nav-menu a');
        const totalSlides = document.querySelectorAll('.carousel-item').length;

        navLinks.forEach((link) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const index = parseInt(link.getAttribute('data-slide'));
                showSlide(index);
            });
        });

        function showSlide(index) {
            const offset = -index * 100;
            carousel.style.transform = `translateX(${offset}%)`;
        }

        let currentIndex = 0;



