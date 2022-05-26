var slides = document.querySelector(".slider__main").children;
var nextSlide = document.querySelector(".slider__next");
var prevSlide = document.querySelector(".slider__prev");
var totalSlides = slides.length;
var index = 0;

nextSlide.onclick = function() {
    next("next");
    resetTimer();
}
prevSlide.onclick = function() {
    next("prev");
    resetTimer();
}
console.log(prevSlide);
console.log(nextSlide);

function next(direction) {

    if (direction === "next") {
        index++;
        if (index == totalSlides) {
            index = 0;
        }
    } else {
        if (index == 0) {
            index = totalSlides - 1;
        } else {
            index--;
        }
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }
    slides[index].classList.add("active");

}

function resetTimer() {
    // stop timer after clicked next & prev Button
    clearInterval(timer);
    // then start again timer
    timer = setInterval(autoPlay, 5000);
}

function autoPlay() {
    next('next');
}

var timer = setInterval(autoPlay, 5000);