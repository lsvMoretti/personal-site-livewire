import 'animate.css';

window.onload = function() {
    // Get all elements with the 'fade-in' class and apply fade-in effect
    const fadeInElements = document.querySelectorAll('.fade-in');
    fadeInElements.forEach(element => {
        element.classList.remove('opacity-0');
        element.classList.add('opacity-100');
    });
};
