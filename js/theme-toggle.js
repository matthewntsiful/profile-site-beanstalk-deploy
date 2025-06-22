// Theme toggle functionality with localStorage persistence
(function() {
  'use strict';

  // Get theme from localStorage or default to light
  const getTheme = () => {
    return localStorage.getItem('theme') || 'light';
  };

  // Set theme and save to localStorage
  const setTheme = (theme) => {
    localStorage.setItem('theme', theme);
    document.documentElement.classList.toggle('dark', theme === 'dark');
    updateThemeIcon(theme);
  };

  // Update theme toggle button icon
  const updateThemeIcon = (theme) => {
    const toggleBtn = document.getElementById('toggleTheme');
    if (toggleBtn) {
      toggleBtn.innerHTML = theme === 'dark' ? '☀️' : '🌙';
      toggleBtn.setAttribute('aria-label', `Switch to ${theme === 'dark' ? 'light' : 'dark'} mode`);
    }
  };

  // Initialize theme on page load
  const initTheme = () => {
    const currentTheme = getTheme();
    setTheme(currentTheme);
  };

  // Toggle theme function
  const toggleTheme = () => {
    const currentTheme = getTheme();
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    setTheme(newTheme);
  };

  // Mobile menu toggle
  const toggleMobileMenu = () => {
    const mobileNav = document.getElementById('mobileNav');
    const mobileMenuBtn = document.getElementById('mobileMenu');
    
    if (mobileNav && mobileMenuBtn) {
      const isHidden = mobileNav.classList.contains('hidden');
      mobileNav.classList.toggle('hidden');
      mobileMenuBtn.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
      mobileMenuBtn.innerHTML = isHidden ? '✕' : '☰';
    }
  };

  // Close mobile menu when clicking on links
  const closeMobileMenuOnLinkClick = () => {
    const mobileNav = document.getElementById('mobileNav');
    const mobileMenuBtn = document.getElementById('mobileMenu');
    
    if (mobileNav && mobileMenuBtn) {
      mobileNav.classList.add('hidden');
      mobileMenuBtn.setAttribute('aria-expanded', 'false');
      mobileMenuBtn.innerHTML = '☰';
    }
  };

  // Initialize when DOM is loaded
  document.addEventListener('DOMContentLoaded', () => {
    initTheme();

    // Theme toggle event listener
    const toggleBtn = document.getElementById('toggleTheme');
    if (toggleBtn) {
      toggleBtn.addEventListener('click', toggleTheme);
    }

    // Mobile menu toggle event listener
    const mobileMenuBtn = document.getElementById('mobileMenu');
    if (mobileMenuBtn) {
      mobileMenuBtn.addEventListener('click', toggleMobileMenu);
      mobileMenuBtn.setAttribute('aria-expanded', 'false');
    }

    // Close mobile menu when clicking on navigation links
    const mobileNavLinks = document.querySelectorAll('#mobileNav a');
    mobileNavLinks.forEach(link => {
      link.addEventListener('click', closeMobileMenuOnLinkClick);
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
      const mobileNav = document.getElementById('mobileNav');
      const mobileMenuBtn = document.getElementById('mobileMenu');
      
      if (mobileNav && mobileMenuBtn && 
          !mobileNav.contains(e.target) && 
          !mobileMenuBtn.contains(e.target) &&
          !mobileNav.classList.contains('hidden')) {
        closeMobileMenuOnLinkClick();
      }
    });

    // Keyboard navigation for mobile menu
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        closeMobileMenuOnLinkClick();
      }
    });
  });

  // Listen for system theme changes
  if (window.matchMedia) {
    const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
    mediaQuery.addEventListener('change', (e) => {
      // Only auto-switch if user hasn't manually set a preference
      if (!localStorage.getItem('theme')) {
        setTheme(e.matches ? 'dark' : 'light');
      }
    });
  }
})();