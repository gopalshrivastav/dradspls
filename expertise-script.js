document.addEventListener('DOMContentLoaded', () => {
    // Slider Functionality for Expertise Page
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;
    const slideInterval = 3000; // 5 seconds auto-slide
    let autoSlide;

    // Function to show slide
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            dots[i].classList.remove('active');
        });
        slides[index].classList.add('active');
        dots[index].classList.add('active');
    }

    // Next slide
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Auto-slide
    function startAutoSlide() {
        autoSlide = setInterval(nextSlide, slideInterval);
    }

    // Stop auto-slide on hover
    const slider = document.querySelector('.slider');
    slider.addEventListener('mouseenter', () => clearInterval(autoSlide));
    slider.addEventListener('mouseleave', startAutoSlide);

    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
            clearInterval(autoSlide); // Reset auto-slide on manual change
            startAutoSlide(); // Restart auto-slide
        });
    });

    // Initialize
    showSlide(currentSlide);
    startAutoSlide();
});