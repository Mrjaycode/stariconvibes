// Example: Add animation on scroll
document.addEventListener('DOMContentLoaded', function () {
    const videoCards = document.querySelectorAll('.video-card');
    videoCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'scale(1.05)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'scale(1)';
        });
    });
});
