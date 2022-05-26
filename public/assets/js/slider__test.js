window.addEventListener("load", function() {
    const slider = document.querySelector(".slider");
    const sliderMain = document.querySelector("slider__main");
    const sliderItems = document.querySelectorAll(".slider__item");
    const nextBtn = document.querySelector(".slider__next");
    const prevBtn = document.querySelector(".slider__prev");
    // const dotItem = document.querySelector(".slider-dot-item");
    const sliderItemWidth = sliderItems[0].offsetWidth;
    const slidesLength = sliderItems.length;
    let positionX = 0;
    let index = 0;
    console.log("sliderItemWidth", sliderItemWidth);
    nextBtn.addEventListener("click", function() {
        handleChangeSlide(1);
    });
    prevBtn.addEventListener("click", function() {
        handleChangeSlide(-1);
    });

    function handleChangeSlide(direction) {
        if (direction === 1) {
            index++;
            positionX = positionX - sliderItemWidth;
            console.log("handleChangeSlide ~ positionX", positionX);
            sliderMain.style = `transform: translateX(${positionX}px)`;
            // console.log(index);
            console.log("next slide");
        } else if (direction === -1) {
            console.log("prev slide");
        }
    }
})