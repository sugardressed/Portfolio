document.addEventListener("DOMContentLoaded", function () {
  const carousels = document.querySelectorAll(".project-carousel");

  carousels.forEach((carousel) => {
    const slides = carousel.querySelectorAll(".project-carousel-image");
    const prevBtn = carousel.querySelector(".project-carousel-btn.prev");
    const nextBtn = carousel.querySelector(".project-carousel-btn.next");
    const dots = carousel.querySelectorAll(".project-carousel-dot");
    const intervalTime = parseInt(carousel.dataset.interval, 10) || 3500;

    let currentIndex = 0;
    let autoPlay;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === index);
      });

      dots.forEach((dot, i) => {
        dot.classList.toggle("active", i === index);
      });

      currentIndex = index;
    }

    function nextSlide() {
      const nextIndex = (currentIndex + 1) % slides.length;
      showSlide(nextIndex);
    }

    function prevSlideFn() {
      const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
      showSlide(prevIndex);
    }

    function startAutoPlay() {
      stopAutoPlay();
      autoPlay = setInterval(nextSlide, intervalTime);
    }

    function stopAutoPlay() {
      if (autoPlay) {
        clearInterval(autoPlay);
      }
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", function () {
        nextSlide();
        startAutoPlay();
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", function () {
        prevSlideFn();
        startAutoPlay();
      });
    }

    dots.forEach((dot, index) => {
      dot.addEventListener("click", function () {
        showSlide(index);
        startAutoPlay();
      });
    });

    carousel.addEventListener("mouseenter", stopAutoPlay);
    carousel.addEventListener("mouseleave", startAutoPlay);

    showSlide(0);
    startAutoPlay();
  });
});