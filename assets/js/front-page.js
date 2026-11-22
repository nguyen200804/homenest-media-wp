/**
 * HomeNest.media — Front Page Scripts
 */
document.addEventListener('DOMContentLoaded', function () {
    // FAQ Accordion
    const faqButtons = document.querySelectorAll('.faqButton');
    faqButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const currentItem = button.closest('.faqItem');
            if (!currentItem) return;

            const isOpen = currentItem.classList.contains('faqItemOpen');

            // Close all other items (single accordion behavior)
            document.querySelectorAll('.faqItem.faqItemOpen').forEach(function (item) {
                if (item !== currentItem) {
                    item.classList.remove('faqItemOpen');
                    const btn = item.querySelector('.faqButton');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                }
            });

            // Toggle current item
            if (isOpen) {
                currentItem.classList.remove('faqItemOpen');
                button.setAttribute('aria-expanded', 'false');
            } else {
                currentItem.classList.add('faqItemOpen');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
