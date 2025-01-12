// Carousel functionality
document.addEventListener("DOMContentLoaded", function () {
      const items = document.querySelectorAll('.carousel-item');
      let currentIndex = 0;
  
      function showNextItem() {
          items[currentIndex].classList.remove('active');
          currentIndex = (currentIndex + 1) % items.length;
          items[currentIndex].classList.add('active');
      }
  
      setInterval(showNextItem, 5000); // Rotate every 5 seconds
  });
  