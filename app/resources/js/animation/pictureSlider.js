const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.querySelector('.carousel-slide img');

//Buttons
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

let counter = 1;
const imgWidth = carouselImages[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-imgWidth * counter) + 'px)';

//Button Listerners

nextBtn.addEventListener('click', ()=> {
    if (counter >= carouselImages.length) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    couter++;
    carouselSlide.style.transform = 'translateX(' + (-imgWidth * counter) + 'px)';
});

prevBtn.addEventListener('click', ()=>{
    if (counter <= 0) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    couter--;
    carouselSlide.style.transform = 'translateX(' + (-imgWidth * counter) + 'px)';
});

carouselSlide.addEventListener('transitionend', ()=> {
    if (carouselImages[counter].id === 'lastClone') {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length - 2;
        carouselSlide.style.transform = 'translateX(' + (-imgWidth * counter) + 'px)';
    }
    if (carouselImages[counter].id === 'firstClone') {
        carouselSlide.style.transition = "none";
        counter = carouselImages.length - counter;
        carouselSlide.style.transform = 'translateX(' + (-imgWidth * counter) + 'px)';
    }
});