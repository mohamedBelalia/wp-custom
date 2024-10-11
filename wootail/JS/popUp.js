document.addEventListener('DOMContentLoaded', () => {
    const popupButton = document.getElementById('popupButton');
    const popup = document.getElementById('popup');
    const closePopup = document.getElementById('closePopup');

    popupButton.addEventListener('click', () => {
        popup.classList.remove('hidden');
        popup.classList.add('flex');
    });

    closePopup.addEventListener('click', () => {
        popup.classList.add('hidden');
        popup.classList.remove('flex')
    });

    popup.addEventListener('click', (event) => {
        if (event.target === popup) {
            popup.classList.add('hidden');
            popup.classList.remove('flex');
        }
    });
});
