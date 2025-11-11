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
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const nama = document.getElementById('nama').value;
        const email = document.getElementById('email').value;
        const pesan = document.getElementById('pesan').value;

        if (nama && email && pesan) {
            const modal = document.getElementById('successModal');
            const modalContent = document.getElementById('modalContent');

            modal.classList.remove('hidden');
            modal.classList.remove('closing');
            modalContent.classList.remove('closing');

            this.reset();
        }
    });
}

function closeModal() {
    const modal = document.getElementById('successModal');
    const modalContent = document.getElementById('modalContent');

    modal.classList.add('closing');
    modalContent.classList.add('closing');

    setTimeout(() => {
        modal.classList.add('hidden');
        modal.classList.remove('closing');
        modalContent.classList.remove('closing');
    }, 300);
}

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
