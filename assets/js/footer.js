/**
 * HomeNest.media — Footer Interactivity (Scroll to Top & Progress)
 */
document.addEventListener('DOMContentLoaded', function () {
    const scrollContainer = document.getElementById('homenest-scroll-top');
    const scrollBtn = document.getElementById('scrollTopBtn');

    if (!scrollContainer || !scrollBtn) return;

    function updateScrollProgress() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

        scrollBtn.style.setProperty('--progress', progress.toFixed(1) + '%');

        if (scrollTop > 300) {
            scrollContainer.classList.add('show');
            scrollBtn.classList.add('show');
        } else {
            scrollContainer.classList.remove('show');
            scrollBtn.classList.remove('show');
        }
    }

    window.addEventListener('scroll', updateScrollProgress, { passive: true });
    updateScrollProgress();

    scrollBtn.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
