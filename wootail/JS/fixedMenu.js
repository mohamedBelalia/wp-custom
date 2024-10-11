window.addEventListener('scroll', () => {
    const menu = document.getElementById('fixed-menu');
    if (window.scrollY > 550) { 
      menu.classList.add('fixed', 'top-0');
    } else {
      menu.classList.remove('fixed', 'top-0');
    }
  });

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
        
        document.querySelectorAll('#fixed-menu button').forEach(button => {
            button.classList.remove('clicked-button');
          });
          
          this.querySelector('button').classList.add('clicked-button');
      
      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      
      const headerHeight = document.getElementById('fixed-menu').offsetHeight;

      window.scrollTo({
        top: targetElement.offsetTop - headerHeight,
        behavior: 'smooth'
      });
    });
  });