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

// Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterBtn = document.querySelector('.filter-btn');
    const filterModal = document.getElementById('filterModal');
    const filterModalContent = document.getElementById('filterModalContent');
    const closeFilterModal = document.getElementById('closeFilterModal');
    const applyFilterBtn = document.getElementById('applyFilterBtn');
    const resetFilterBtn = document.getElementById('resetFilterBtn');
    const customDateRange = document.getElementById('customDateRange');
    const dateFilterRadios = document.querySelectorAll('input[name="dateFilter"]');
    const noResultsMessage = document.getElementById('noResultsMessage');
    const clearFilterFromMessage = document.getElementById('clearFilterFromMessage');

    // Fungsi untuk membuka modal dengan smooth transition
    function openModal() {
        filterModal.classList.remove('hidden');
        filterModal.offsetHeight;
        filterModal.classList.remove('opacity-0');
        filterModal.classList.add('opacity-100');
        filterModalContent.classList.remove('scale-95');
        filterModalContent.classList.add('scale-100');
        document.body.style.overflow = 'hidden';
    }

    // Fungsi untuk menutup modal dengan smooth transition
    function closeModal() {
        filterModal.classList.remove('opacity-100');
        filterModal.classList.add('opacity-0');
        filterModalContent.classList.remove('scale-100');
        filterModalContent.classList.add('scale-95');
        setTimeout(() => {
            filterModal.classList.add('hidden');
            document.body.style.overflow = '';
        }, 300);
    }

    // Buka modal filter
    filterBtn.addEventListener('click', function() {
        openModal();
    });

    // Tutup modal filter
    closeFilterModal.addEventListener('click', function() {
        closeModal();
    });

    // Tutup modal jika klik di luar modal
    filterModal.addEventListener('click', function(e) {
        if (e.target === filterModal) {
            closeModal();
        }
    });

    // Tutup modal dengan tombol ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !filterModal.classList.contains('hidden')) {
            closeModal();
        }
    });

    // Toggle custom date range dengan smooth transition
    dateFilterRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'custom') {
                customDateRange.classList.remove('hidden');
                setTimeout(() => {
                    customDateRange.style.opacity = '0';
                    customDateRange.style.transform = 'translateY(-10px)';
                    customDateRange.style.transition = 'all 0.3s ease';
                    setTimeout(() => {
                        customDateRange.style.opacity = '1';
                        customDateRange.style.transform = 'translateY(0)';
                    }, 10);
                }, 10);
            } else {
                customDateRange.style.opacity = '0';
                customDateRange.style.transform = 'translateY(-10px)';
                setTimeout(() => {
                    customDateRange.classList.add('hidden');
                }, 300);
            }
        });
    });

    // Fungsi apply filter
    applyFilterBtn.addEventListener('click', function() {
        const selectedFilter = document.querySelector('input[name="dateFilter"]:checked').value;
        let startDate = null;
        let endDate = null;

        if (selectedFilter === 'custom') {
            startDate = document.getElementById('startDate').value;
            endDate = document.getElementById('endDate').value;

            if (!startDate || !endDate) {
                alert('Silakan pilih rentang tanggal yang valid');
                return;
            }

            if (new Date(startDate) > new Date(endDate)) {
                alert('Tanggal mulai tidak boleh lebih besar dari tanggal akhir');
                return;
            }
        }

        applyDateFilter(selectedFilter, startDate, endDate);
        closeModal();
    });

    // Fungsi reset filter - Mengembalikan semua ke kondisi awal
    function resetFilter() {
        // Reset radio button
        document.querySelector('input[name="dateFilter"][value="all"]').checked = true;
        
        // Sembunyikan custom date range
        customDateRange.classList.add('hidden');
        
        // Clear date inputs
        document.getElementById('startDate').value = '';
        document.getElementById('endDate').value = '';
        
        // Tampilkan semua card
        const allCards = document.querySelectorAll('.activity-card');
        allCards.forEach(card => {
            card.style.display = '';
            card.classList.remove('hidden');
        });
        
        // Sembunyikan pesan no results
        noResultsMessage.classList.add('hidden');
    }

    // Event listener untuk tombol reset
    resetFilterBtn.addEventListener('click', function() {
        resetFilter();
        closeModal();
    });

    // Event listener untuk tombol hapus filter dari pesan
    clearFilterFromMessage.addEventListener('click', function() {
        resetFilter();
    });

    // Fungsi untuk apply filter berdasarkan tanggal
    function applyDateFilter(filterType, startDate, endDate) {
        // Gunakan selector .activity-card sesuai struktur HTML Anda
        const kajianCards = document.querySelectorAll('.activity-card');
        const today = new Date();
        today.setHours(0, 0, 0, 0);

        let visibleCount = 0;

        kajianCards.forEach(card => {
            // Ambil tanggal dari elemen <p class="text-gray-400 text-sm"> dalam format DD/MM/YYYY
            const dateElement = card.querySelector('.text-gray-400.text-sm');
            if (!dateElement) {
                card.style.display = '';
                card.classList.remove('hidden');
                visibleCount++;
                return;
            }

            const dateText = dateElement.textContent.trim();
            // Parse format DD/MM/YYYY ke Date object
            const dateParts = dateText.split('/');
            if (dateParts.length !== 3) {
                card.style.display = '';
                card.classList.remove('hidden');
                visibleCount++;
                return;
            }

            const cardDate = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
            cardDate.setHours(0, 0, 0, 0);
            
            let shouldShow = false;

            switch(filterType) {
                case 'all':
                    shouldShow = true;
                    break;
                
                case 'today':
                    shouldShow = cardDate.getTime() === today.getTime();
                    break;
                
                case 'week':
                    const weekAgo = new Date(today);
                    weekAgo.setDate(today.getDate() - 7);
                    shouldShow = cardDate >= weekAgo && cardDate <= today;
                    break;
                
                case 'month':
                    const monthAgo = new Date(today);
                    monthAgo.setDate(today.getDate() - 30);
                    shouldShow = cardDate >= monthAgo && cardDate <= today;
                    break;
                
                case 'year':
                    shouldShow = cardDate.getFullYear() === today.getFullYear();
                    break;
                
                case 'custom':
                    if (startDate && endDate) {
                        const start = new Date(startDate);
                        const end = new Date(endDate);
                        start.setHours(0, 0, 0, 0);
                        end.setHours(23, 59, 59, 999);
                        shouldShow = cardDate >= start && cardDate <= end;
                    }
                    break;
            }

            // Show atau hide card
            if (shouldShow) {
                card.style.display = '';
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.style.display = 'none';
                card.classList.add('hidden');
            }
        });

        // Tampilkan/sembunyikan pesan berdasarkan hasil
        if (visibleCount === 0) {
            noResultsMessage.classList.remove('hidden');
        } else {
            noResultsMessage.classList.add('hidden');
        }

        console.log('Filter diterapkan:', filterType, 'Visible cards:', visibleCount);
    }
});