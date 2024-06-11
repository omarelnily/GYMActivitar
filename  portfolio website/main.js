// Smooth scrolling to sections
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  
  // Contact form submission
  document.querySelector('#contact form').addEventListener('submit', function (e) {
    e.preventDefault();
    // Add your form submission logic here
    alert('Form submitted successfully!');
    this.reset();
  });