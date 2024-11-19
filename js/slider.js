document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    // Fonction pour démarrer le slider après le préchargement des images
    function startSlider() {
        slides[currentSlide].classList.add('active');
        setInterval(showNextSlide, 8000);
    }

    // Fonction pour passer à la slide suivante
    function showNextSlide() {
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }

    // Précharger les images
    const images = Array.from(slides).map(slide => slide.querySelector('img'));
    let imagesLoaded = 0;

    images.forEach(image => {
        const img = new Image();
        img.src = image.src;
        img.onload = () => {
            imagesLoaded++;
            if (imagesLoaded === images.length) {
                startSlider(); // Démarrer le slider une fois que toutes les images sont chargées
            }
        };
    });
});