
function initSlider() {
    const slides = document.querySelector('.slides');
    const slideImages = document.querySelectorAll('.slides img');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const dots = document.querySelectorAll('.dot');

    if (!slides || !prevBtn || !nextBtn || slideImages.length === 0) {
        console.error('Slider: Elementos no encontrados o están mal configurados.');
        return;
    }

    let currentIndex = 0;
    const totalSlides = slideImages.length;

    // Función para actualizar el slider
    function updateSlider() {
        slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-gray-900', index === currentIndex);
            dot.classList.toggle('bg-gray-300', index !== currentIndex);
        });
    }

    // Eventos para botones
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
    });

    // Dots (indicadores)
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            updateSlider();
        });
    });

    // Auto-slide (opcional)
    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    }, 5000);

    // Actualizar por defecto
    updateSlider();
}

// Esperar a que cargue el DOM
document.addEventListener('DOMContentLoaded', initSlider);
