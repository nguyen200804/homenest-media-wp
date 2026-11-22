/**
 * Single Post Scripts
 * HomeNest Media
 */

document.addEventListener('DOMContentLoaded', function() {
  var loadMoreBtn = document.getElementById('btn-load-more-related');
  if (!loadMoreBtn) return;

  loadMoreBtn.addEventListener('click', function() {
    var hiddenItems = document.querySelectorAll('.related-post-col.related-item-hidden');
    var batchSize = 10;
    var count = 0;

    hiddenItems.forEach(function(item) {
      if (count < batchSize) {
        item.classList.remove('related-item-hidden');
        count++;
      }
    });

    // Nếu không còn bài viết liên quan nào bị ẩn, ẩn luôn nút Xem thêm
    var remainingHidden = document.querySelectorAll('.related-post-col.related-item-hidden');
    if (remainingHidden.length === 0) {
      var wrap = loadMoreBtn.closest('.related-load-more-wrap');
      if (wrap) {
        wrap.style.display = 'none';
      } else {
        loadMoreBtn.style.display = 'none';
      }
    }
  });
});
