/**
 * JavaScript dành riêng cho Single Dịch Vụ
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Procedure Accordion Toggle
    const procedureItems = document.querySelectorAll('.procedureItem');
    procedureItems.forEach(function (item) {
        item.addEventListener('click', function () {
            procedureItems.forEach(function (el) {
                el.classList.remove('procedureItemActive');
            });
            item.classList.add('procedureItemActive');
        });
    });

    // 2. Service Review Slider
    const reviewSlides = document.querySelectorAll('.serviceReviewSlideItem');
    const prevBtn = document.querySelector('.serviceReviewNavButton.prev');
    const nextBtn = document.querySelector('.serviceReviewNavButton.next');
    let currentSlide = 0;

    function showSlide(index) {
        if (!reviewSlides.length) return;
        if (index < 0) {
            currentSlide = reviewSlides.length - 1;
        } else if (index >= reviewSlides.length) {
            currentSlide = 0;
        } else {
            currentSlide = index;
        }

        reviewSlides.forEach(function (slide, idx) {
            if (idx === currentSlide) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            showSlide(currentSlide - 1);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            showSlide(currentSlide + 1);
        });
    }

    // 3. FAQ Accordion
    const faqButtons = document.querySelectorAll('.faqButton');
    faqButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const currentItem = button.closest('.faqItem');
            if (!currentItem) return;

            const isOpen = currentItem.classList.contains('faqItemOpen');

            // Close other items
            document.querySelectorAll('.faqItem.faqItemOpen').forEach(function (item) {
                if (item !== currentItem) {
                    item.classList.remove('faqItemOpen');
                    const btn = item.querySelector('.faqButton');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                }
            });

            // Toggle current
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
