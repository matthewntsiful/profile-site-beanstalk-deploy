// This file is a client-side JS file. No PHP tags needed.

// Scroll animations and smooth scrolling functionality
(function() {
  'use strict';

  // Intersection Observer for fade-in animations
  const initScrollAnimations = () => {
    const faders = document.querySelectorAll('.motion-fade');
    
    if (!faders.length) return;

    const options = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, options);

    faders.forEach(el => {
      observer.observe(el);
    });
  };

  // Smooth scrolling for anchor links
  const initSmoothScrolling = () => {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
      link.addEventListener('click', (e) => {
        const href = link.getAttribute('href');
        
        // Skip if it's just "#"
        if (href === '#') return;
        
        const target = document.querySelector(href);
        
        if (target) {
          e.preventDefault();
          
          const headerHeight = document.querySelector('header')?.offsetHeight || 0;
          const targetPosition = target.offsetTop - headerHeight - 20;
          
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
          
          // Update URL without jumping
          history.pushState(null, null, href);
          
          // Focus management for accessibility
          target.setAttribute('tabindex', '-1');
          target.focus();
          target.addEventListener('blur', () => {
            target.removeAttribute('tabindex');
          }, { once: true });
        }
      });
    });
  };

  // Active navigation highlighting
  const initActiveNavigation = () => {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    
    if (!sections.length || !navLinks.length) return;

    const options = {
      threshold: 0.3,
      rootMargin: '-20% 0px -70% 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute('id');
          
          // Remove active class from all nav links
          navLinks.forEach(link => {
            link.classList.remove('text-indigo-600', 'dark:text-indigo-400', 'font-semibold');
          });
          
          // Add active class to current nav link
          const activeLink = document.querySelector(`nav a[href="#${id}"]`);
          if (activeLink) {
            activeLink.classList.add('text-indigo-600', 'dark:text-indigo-400', 'font-semibold');
          }
        }
      });
    }, options);

    sections.forEach(section => {
      observer.observe(section);
    });
  };

  // Scroll to top functionality
  const initScrollToTop = () => {
    // Create scroll to top button
    const scrollButton = document.createElement('button');
    scrollButton.innerHTML = '↑';
    scrollButton.className = 'fixed bottom-6 right-6 bg-indigo-600 hover:bg-indigo-700 text-white w-12 h-12 rounded-full shadow-lg transition-all duration-300 opacity-0 pointer-events-none z-40';
    scrollButton.setAttribute('aria-label', 'Scroll to top');
    scrollButton.id = 'scrollToTop';
    
    document.body.appendChild(scrollButton);

    // Show/hide button based on scroll position
    const toggleScrollButton = () => {
      const scrolled = window.pageYOffset;
      const threshold = 300;
      
      if (scrolled > threshold) {
        scrollButton.classList.remove('opacity-0', 'pointer-events-none');
        scrollButton.classList.add('opacity-100');
      } else {
        scrollButton.classList.add('opacity-0', 'pointer-events-none');
        scrollButton.classList.remove('opacity-100');
      }
    };

    // Scroll to top when button is clicked
    scrollButton.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // Listen for scroll events
    window.addEventListener('scroll', toggleScrollButton, { passive: true });
  };

  // Form submission handling
  const initFormHandling = () => {
    const form = document.querySelector('#contact form');
    
    if (!form) return;

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      
      const formData = new FormData(form);
      const button = form.querySelector('button[type="submit"]');
      const originalText = button.textContent;
      
      // Show loading state
      button.textContent = 'Sending...';
      button.disabled = true;
      button.classList.add('loading');
      
      // Simulate form submission (replace with actual endpoint)
      setTimeout(() => {
        // Reset form
        form.reset();
        
        // Show success message
        button.textContent = 'Message Sent!';
        button.classList.remove('loading');
        button.classList.add('bg-green-600', 'hover:bg-green-700');
        
        // Reset button after 3 seconds
        setTimeout(() => {
          button.textContent = originalText;
          button.disabled = false;
          button.classList.remove('bg-green-600', 'hover:bg-green-700');
        }, 3000);
      }, 1500);
    });
  };

  // Lazy loading for images
  const initLazyLoading = () => {
    const images = document.querySelectorAll('img[data-src]');
    
    if (!images.length) return;

    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.remove('opacity-0');
          img.classList.add('opacity-100');
          imageObserver.unobserve(img);
        }
      });
    });

    images.forEach(img => {
      img.classList.add('opacity-0', 'transition-opacity', 'duration-300');
      imageObserver.observe(img);
    });
  };

  // Initialize all functionality when DOM is loaded
  document.addEventListener('DOMContentLoaded', () => {
    initScrollAnimations();
    initSmoothScrolling();
    initActiveNavigation();
    initScrollToTop();
    initFormHandling();
    initLazyLoading();
  });

  // Performance optimization: debounce scroll events
  const debounce = (func, wait) => {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  };
})();