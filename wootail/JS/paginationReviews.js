document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.review');
    const loadMoreBtn = document.getElementById('load-more-btn');
    const itemsPerPage = 2;
    let currentPage = 0;

    function updatePagination() {
        const start = currentPage * itemsPerPage;
        const end = start + itemsPerPage;

        elements.forEach((el, index) => {
            if (index < end) {
                el.classList.add("flex")
                el.classList.remove("hidden")
            }
        });

        if (end >= elements.length) {
            loadMoreBtn.classList.add('cursor-not-allowed');
            loadMoreBtn.classList.add('text-gray-600');
            loadMoreBtn.classList.add('hover:text-gray-600');
            loadMoreBtn.classList.remove('hover:text-[#8b174e]');                     
        }
    }

    loadMoreBtn.addEventListener('click', () => {
        currentPage++;
        updatePagination();
    });

    updatePagination();
});
