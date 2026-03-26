document.addEventListener("DOMContentLoaded", function () {

  // Mobile menu
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");

  if (menuToggle && mobileMenu) {
    menuToggle.addEventListener("click", function () {
      const isOpen = mobileMenu.classList.toggle("active");
      menuToggle.classList.toggle("active");
      menuToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });

    const mobileLinks = mobileMenu.querySelectorAll("a");

    mobileLinks.forEach(link => {
      link.addEventListener("click", function () {
        mobileMenu.classList.remove("active");
        menuToggle.classList.remove("active");
        menuToggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  // Focus fname when Contact is clicked
  const contactLinks = document.querySelectorAll('a[href="#contact"]');
  const nameInput = document.querySelector("#fname");

  if (contactLinks.length && nameInput) {
    contactLinks.forEach(link => {
      link.addEventListener("click", function () {
        setTimeout(() => {
          nameInput.focus();
        }, 400);
      });
    });
  }

});

// code motion in hero section
document.addEventListener("DOMContentLoaded", function () {
  const heroSection = document.getElementById("hero-section");
  const codePanel = document.getElementById("code-panel");

  if (!heroSection || !codePanel) return;

  heroSection.addEventListener("mousemove", function (event) {
    const rect = heroSection.getBoundingClientRect();

    const mouseX = event.clientX - rect.left;
    const mouseY = event.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const moveX = ((mouseX - centerX) / centerX) * 6;
    const moveY = ((mouseY - centerY) / centerY) * 5;

    codePanel.style.transform = `translate3d(${moveX}px, ${moveY}px, 0)`;
  });

  heroSection.addEventListener("mouseleave", function () {
    codePanel.style.transform = "translate3d(0, 0, 0)";
  });
});