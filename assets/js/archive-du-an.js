document.addEventListener('DOMContentLoaded', function () {
    /* Form lọc: không đưa tham số rỗng lên URL */
    var form = document.querySelector('.duan-filter');
    if (form) {
        form.addEventListener('submit', function () {
            form.querySelectorAll('input[name], select[name]').forEach(function (field) {
                if (field.value.trim() === '') {
                    field.disabled = true;
                }
            });
        });
        // Trở lại từ bfcache: bật lại các trường đã bị vô hiệu hóa
        window.addEventListener('pageshow', function () {
            form.querySelectorAll('[disabled]').forEach(function (field) {
                field.disabled = false;
            });
        });
    }

    /* Animation quả cầu (Lottie) */
    var el = document.getElementById('duan-lottie');
    if (!el || typeof lottie === 'undefined') {
        return;
    }
    lottie.loadAnimation({
        container: el,
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: el.getAttribute('data-src')
    });
});
