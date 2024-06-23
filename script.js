let text = document.getElementById('text');
let leaf = document.getElementById('leaf');
let hill1 = document.getElementById('hill1');
let hill4 = document.getElementById('hill4');
let hill5 = document.getElementById('hill5');

window.addEventListener('scroll', () => {
    let value = window.scrollY;
    
    // Apply transformations only up to a certain scroll value
    if (value <= 1000) { // Adjust 1000 to your preference
        text.style.marginTop = value * 2.5 + 'px';
        leaf.style.top = value * -1.5 + 'px';
        leaf.style.left = value * 1.5 + 'px';
        hill5.style.left = value * 1.5 + 'px';
        hill4.style.left = value * -1.5 + 'px';
        hill1.style.top = value * 1 + 'px';
    }
});

ScrollReveal({
    reset: true,
    distance: '60px',
    duration: 2500,
    delay: 200  
});

ScrollReveal().reveal('.main-title', { delay: 250, origin: 'left'});
ScrollReveal().reveal('.sec-01 .image', { delay: 350, origin: 'bottom'});
ScrollReveal().reveal('.text-box', { delay: 450, origin: 'right'});

ScrollReveal().reveal('.footer-section1, .footer-section3', { delay: 450, origin: 'top'});
ScrollReveal().reveal('.footer-section2, .footer-section4', { delay: 450, origin: 'bottom'});
