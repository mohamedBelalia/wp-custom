document.addEventListener('DOMContentLoaded', () => {
    const scrollContainer = document.getElementById('scroll-container-2');
    const cards = scrollContainer.querySelectorAll('.flex-none');
    
    if (!cards.length) {
      console.error('No elements found with the class "flex-none".');
      return;
    }

    const cardWidth = cards[0].offsetWidth + 15;

    document.getElementById('scroll-left-2').addEventListener('click', function() {
      scrollContainer.scrollBy({
        left: -cardWidth,
        behavior: 'smooth'
      });
    });

    document.getElementById('scroll-right-2').addEventListener('click', function() {
      scrollContainer.scrollBy({
        left: cardWidth,
        behavior: 'smooth'
      });
    });
  });

