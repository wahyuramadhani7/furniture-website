document.addEventListener("DOMContentLoaded", () => {
      const items = document.querySelectorAll('.carousel-item');
      let currentIndex = 0;
      const intervalTime = 5000; // Rotate every 5 seconds
  
      if (items.length > 0) {
          // Function to show the next item
          function showNextItem() {
              items[currentIndex].classList.remove('active'); // Remove 'active' from the current item
              currentIndex = (currentIndex + 1) % items.length; // Move to the next item
              items[currentIndex].classList.add('active'); // Add 'active' to the next item
          }
  
          // Initialize the carousel interval
          const carouselInterval = setInterval(showNextItem, intervalTime);
  
          // Optional: Add hover pause functionality
          items.forEach(item => {
              item.addEventListener('mouseenter', () => {
                  clearInterval(carouselInterval); // Pause on hover
              });
              item.addEventListener('mouseleave', () => {
                  setInterval(showNextItem, intervalTime); // Resume on mouse leave
              });
          });
      } else {
          console.warn('No carousel items found.');
      }
  });
  