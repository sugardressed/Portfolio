  const aboutLink = document.querySelector('a[href="#about"]');
  const nameInput = document.querySelector('#fname');

  aboutLink.addEventListener('click', function () {
    setTimeout(() => {
      nameInput.focus();
    }, 400); // delay allows scroll to finish
  });