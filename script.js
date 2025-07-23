// Modal functionality
const applicationModal = document.getElementById('applicationModal');
const openModalBtns = document.querySelectorAll('.open-modal-btn');
const closeModal = document.getElementById('closeModal');
const successMessage = document.getElementById('successMessage');

if (openModalBtns) {
    openModalBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            applicationModal.classList.remove('hidden');
        });
    });
}

if (closeModal) {
    closeModal.addEventListener('click', () => {
        applicationModal.classList.add('hidden');
    });
}

window.addEventListener('click', (event) => {
    if (event.target == applicationModal) {
        applicationModal.classList.add('hidden');
    }
});

// Hide success message after 2 seconds
if (successMessage) {
    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 2000);
}

// Smooth scroll to section
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

// FAQ toggle functionality
document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
        const answer = item.querySelector('div:last-child');
        const icon = item.querySelector('i');
        
        item.classList.toggle('open');

        if (answer.classList.contains('hidden')) {
            answer.classList.remove('hidden');
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        } else {
            answer.classList.add('hidden');
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        }
    });
});

// Mobile menu toggle
const mobileMenuButton = document.getElementById('mobileMenuButton');
const mobileMenu = document.getElementById('mobileMenu');

mobileMenuButton.addEventListener('click', () => {
    if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.remove('hidden');
        mobileMenuButton.innerHTML = '<i class="fas fa-times text-xl"></i>';
    } else {
        mobileMenu.classList.add('hidden');
        mobileMenuButton.innerHTML = '<i class="fas fa-bars text-xl"></i>';
    }
});

// Close mobile menu when clicking on a link
document.querySelectorAll('#mobileMenu a').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        mobileMenuButton.innerHTML = '<i class="fas fa-bars text-xl"></i>';
    });
});
// Scroll Animation with IntersectionObserver
const scrollElements = document.querySelectorAll(".animate-on-scroll");

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.1 // Trigger when 10% of the element is visible
});

scrollElements.forEach(el => {
    observer.observe(el);
});