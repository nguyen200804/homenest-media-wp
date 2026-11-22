/**
 * HomeNest.media — Header Interactivity
 */
document.addEventListener('DOMContentLoaded', function () {
  const header = document.getElementById('site-header');
  const burger = document.getElementById('btn-burger');
  const navMenu = document.getElementById('main-navigation');

  if (!header) return;

  // 1. Scroll listener
  function onScroll() {
    if (window.scrollY > 40) {
      header.classList.add('is-scrolled', 'isScrolled');
    } else {
      header.classList.remove('is-scrolled', 'isScrolled');
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  // Helper: Close all open mobile submenus
  function closeAll() {
    if (burger) {
      burger.classList.remove('is-open', 'isOpen');
      burger.setAttribute('aria-expanded', 'false');
    }
    if (navMenu) {
      navMenu.classList.remove('is-open', 'isOpen');
    }
    document.querySelectorAll('.menu-item.is-open, .menuItem.isOpen, .dropdown-item.is-open, .dropdownItem.isOpen').forEach(function (el) {
      el.classList.remove('is-open', 'isOpen');
      const toggle = el.querySelector('.menu-toggle, .menuToggle, .dropdown-toggle, .dropdownToggle');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    });
  }

  // 2. Mobile burger toggle
  if (burger && navMenu) {
    burger.addEventListener('click', function () {
      const isOpen = burger.classList.contains('is-open') || burger.classList.contains('isOpen');
      if (isOpen) {
        closeAll();
      } else {
        burger.classList.add('is-open', 'isOpen');
        burger.setAttribute('aria-expanded', 'true');
        navMenu.classList.add('is-open', 'isOpen');
      }
    });
  }

  // 3. Mobile level 1 accordion toggles (.menu-toggle / .menuToggle)
  const menuToggles = document.querySelectorAll('.menu-toggle, .menuToggle');
  menuToggles.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      const parentLi = btn.closest('.menu-item, .menuItem');
      if (!parentLi) return;

      const isCurrentOpen = parentLi.classList.contains('is-open') || parentLi.classList.contains('isOpen');

      // Close sibling open items
      document.querySelectorAll('.menu-item.is-open, .menuItem.isOpen').forEach(function (li) {
        if (li !== parentLi) {
          li.classList.remove('is-open', 'isOpen');
          const t = li.querySelector('.menu-toggle, .menuToggle');
          if (t) t.setAttribute('aria-expanded', 'false');
        }
      });

      if (isCurrentOpen) {
        parentLi.classList.remove('is-open', 'isOpen');
        btn.setAttribute('aria-expanded', 'false');
      } else {
        parentLi.classList.add('is-open', 'isOpen');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // 4. Mobile level 2 accordion toggles (.dropdown-toggle / .dropdownToggle)
  const dropdownToggles = document.querySelectorAll('.dropdown-toggle, .dropdownToggle');
  dropdownToggles.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      const parentLi = btn.closest('.dropdown-item, .dropdownItem');
      if (!parentLi) return;

      const isCurrentOpen = parentLi.classList.contains('is-open') || parentLi.classList.contains('isOpen');

      // Close sibling level 2 items
      const parentUl = parentLi.parentElement;
      if (parentUl) {
        parentUl.querySelectorAll('.dropdown-item.is-open, .dropdownItem.isOpen').forEach(function (li) {
          if (li !== parentLi) {
            li.classList.remove('is-open', 'isOpen');
            const t = li.querySelector('.dropdown-toggle, .dropdownToggle');
            if (t) t.setAttribute('aria-expanded', 'false');
          }
        });
      }

      if (isCurrentOpen) {
        parentLi.classList.remove('is-open', 'isOpen');
        btn.setAttribute('aria-expanded', 'false');
      } else {
        parentLi.classList.add('is-open', 'isOpen');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // 5. Close menu on click outside on mobile
  document.addEventListener('click', function (e) {
    if (navMenu && navMenu.classList.contains('is-open')) {
      if (!navMenu.contains(e.target) && !burger.contains(e.target)) {
        closeAll();
      }
    }
  });

  // 6. Close menu on escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeAll();
    }
  });
});
