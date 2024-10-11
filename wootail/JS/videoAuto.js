document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.video-card');

    cards.forEach(card => {
        const video = card.querySelector('.video-element');

        if (video) {
            card.addEventListener('mouseenter', () => {
                video.play();            
            });

            card.addEventListener('mouseleave', () => {
                video.pause();
                video.currentTime = 0;
            });
        }
    });
});
