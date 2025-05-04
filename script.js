let slideIndex = 0;
const slides = document.querySelectorAll(".slide");

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.opacity = i === index ? "1" : "0";
    });
}

function nextSlide() {
    slideIndex = (slideIndex + 1) % slides.length;
    showSlide(slideIndex);
}

function changeSlide(n) {
    slideIndex = (slideIndex + n + slides.length) % slides.length;
    showSlide(slideIndex);
}

document.querySelector(".next").addEventListener("click", () => changeSlide(1));
document.querySelector(".prev").addEventListener("click", () => changeSlide(-1));

setInterval(nextSlide, 5000); // Automatyczne przełączanie co 5 sekund
showSlide(slideIndex);
