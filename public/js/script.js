// Slider
const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const searchInput = document.getElementById('searchInput');
const activityCards = document.querySelectorAll('.activity-card');
let currentIndex = 0;
const cardWidth = 320 + 24; // width + gap
const maxIndex = 2; // 5 cards - 3 visible = 2

if (slider && prevBtn && nextBtn) {
    nextBtn.addEventListener('click', () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }
    });
}

// Contact Form Handler
const contactForm = document.getElementById('contactForm');


const successModal = document.getElementById('successModal');
if (successModal) {
    successModal.addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
}

// Search functionality
searchInput.addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();

    activityCards.forEach(card => {
        const title = card.getAttribute('data-title').toLowerCase();
        const cardText = card.textContent.toLowerCase();

        if (title.includes(searchTerm) || cardText.includes(searchTerm)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});

//carousel struktur
function scrollCarousel(section, direction) {
    const carousel = document.getElementById(section + '-carousel');
    const scrollAmount = 280; // card width + gap
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}

// Navbar mobile
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const closeSidebar = document.getElementById('close-sidebar');
    const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');

    // Open sidebar
    mobileMenuButton.addEventListener('click', function() {
        mobileSidebar.classList.remove('translate-x-full');
        mobileOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });

    // Close sidebar
    function closeSidebarMenu() {
        mobileSidebar.classList.add('translate-x-full');
        mobileOverlay.classList.add('hidden');
        document.body.style.overflow = '';
    }

    closeSidebar.addEventListener('click', closeSidebarMenu);
    mobileOverlay.addEventListener('click', closeSidebarMenu);

    // Dropdown toggles
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const menu = this.nextElementSibling;
            const icon = this.querySelector('svg');
            
            // Close other dropdowns
            document.querySelectorAll('.mobile-dropdown-menu').forEach(m => {
                if (m !== menu) {
                    m.classList.add('hidden');
                    m.previousElementSibling.querySelector('svg').style.transform = '';
                }
            });

            // Toggle current dropdown
            menu.classList.toggle('hidden');
            if (menu.classList.contains('hidden')) {
                icon.style.transform = '';
            } else {
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});
