// Slider
const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
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

// Carousel struktur
function scrollCarousel(section, direction) {
    const carousel = document.getElementById(section + '-carousel');
    const scrollAmount = 280; // card width + gap
    carousel.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}

// ============================================
// MAIN FUNCTIONALITY - Filter & Search
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    // Navbar mobile
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const closeSidebar = document.getElementById('close-sidebar');
    const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');

    if (mobileMenuButton && mobileSidebar) {
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
    }

    // FILTER & SEARCH FUNCTIONALITY
    const filterBtn = document.getElementById('filterBtn');
    const filterModal = document.getElementById('filterModal');
    const filterModalContent = document.getElementById('filterModalContent');
    const closeFilterModal = document.getElementById('closeFilterModal');
    const applyFilterBtn = document.getElementById('applyFilterBtn');
    const resetFilterBtn = document.getElementById('resetFilterBtn');
    const customDateRange = document.getElementById('customDateRange');
    const dateFilterRadios = document.querySelectorAll('input[name="dateFilter"]');
    const noResultsMessage = document.getElementById('noResultsMessage');
    const clearFilterFromMessage = document.getElementById('clearFilterFromMessage');
    const searchInput = document.getElementById('searchInput');
    const activityCards = document.querySelectorAll('.activity-card');

    // Cek apakah elemen filter ada (untuk halaman kajian)
    if (!filterBtn || !filterModal) {
        // Jika tidak ada filter modal, hanya jalankan search functionality
        if (searchInput && activityCards.length > 0) {
            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();
                activityCards.forEach(card => {
                    const title = card.getAttribute('data-title');
                    const cardText = card.textContent.toLowerCase();
                    if (title && (title.includes(searchTerm) || cardText.includes(searchTerm))) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }
        return;
    }

    // Fungsi untuk membuka modal
    function openModal() {
        filterModal.classList.remove('hidden');
        setTimeout(() => {
            filterModal.classList.remove('opacity-0');
            filterModal.classList.add('opacity-100');
            filterModalContent.classList.remove('scale-95');
            filterModalContent.classList.add('scale-100');
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    // Fungsi untuk menutup modal
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

    // Event Listeners untuk Modal
    filterBtn.addEventListener('click', openModal);
    closeFilterModal.addEventListener('click', closeModal);
    
    filterModal.addEventListener('click', function(e) {
        if (e.target === filterModal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !filterModal.classList.contains('hidden')) {
            closeModal();
        }
    });

    // Toggle custom date range
    dateFilterRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'custom') {
                customDateRange.classList.remove('hidden');
            } else {
                customDateRange.classList.add('hidden');
            }
        });
    });

    // Fungsi untuk parse tanggal dari berbagai format
    function parseCardDate(dateText) {
        // Format 1: DD/MM/YYYY
        if (dateText.includes('/')) {
            const parts = dateText.split('/');
            if (parts.length === 3) {
                return new Date(parts[2], parts[1] - 1, parts[0]);
            }
        }
        
        // Format 2: YYYY-MM-DD
        if (dateText.includes('-')) {
            return new Date(dateText);
        }
        
        // Format 3: Direct parse
        return new Date(dateText);
    }

    // Fungsi untuk apply filter berdasarkan tanggal
    function applyDateFilter(filterType, startDate, endDate) {
        const today = new Date();
        today.setHours(0, 0, 0, 0);
        let visibleCount = 0;

        activityCards.forEach(card => {
            // Cari tanggal dari data-date attribute atau dari text
            let dateText = card.getAttribute('data-date');
            
            if (!dateText) {
                // Fallback: cari dari elemen p dengan class text-gray-400
                const dateElement = card.querySelector('.text-gray-400.text-sm');
                if (dateElement) {
                    dateText = dateElement.textContent.trim();
                }
            }

            if (!dateText) {
                card.style.display = '';
                visibleCount++;
                return;
            }

            const cardDate = parseCardDate(dateText);
            cardDate.setHours(0, 0, 0, 0);

            if (isNaN(cardDate.getTime())) {
                console.warn('Invalid date:', dateText);
                card.style.display = '';
                visibleCount++;
                return;
            }
            
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

            if (shouldShow) {
                card.style.display = '';
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.style.display = 'none';
                card.classList.add('hidden');
            }
        });

        // Toggle no results message
        if (visibleCount === 0) {
            noResultsMessage.classList.remove('hidden');
        } else {
            noResultsMessage.classList.add('hidden');
        }

        console.log(`Filter: ${filterType}, Visible: ${visibleCount}`);
    }

    // Apply Filter Button
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

    // Reset Filter Function
    function resetFilter() {
        document.querySelector('input[name="dateFilter"][value="all"]').checked = true;
        customDateRange.classList.add('hidden');
        document.getElementById('startDate').value = '';
        document.getElementById('endDate').value = '';
        
        activityCards.forEach(card => {
            card.style.display = '';
            card.classList.remove('hidden');
        });
        
        noResultsMessage.classList.add('hidden');
        
        if (searchInput) {
            searchInput.value = '';
        }
    }

    // Reset & Clear Buttons
    resetFilterBtn.addEventListener('click', function() {
        resetFilter();
        closeModal();
    });

    clearFilterFromMessage.addEventListener('click', function() {
        resetFilter();
    });

    // Search Functionality (yang compatible dengan filter)
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            let visibleCount = 0;

            activityCards.forEach(card => {
                // Skip jika card sudah di-hidden oleh filter
                if (card.style.display === 'none' && searchTerm === '') {
                    return;
                }

                const title = card.getAttribute('data-title') || '';
                const cardText = card.textContent.toLowerCase();
                
                if (title.includes(searchTerm) || cardText.includes(searchTerm)) {
                    // Hanya show jika tidak di-filter
                    if (!card.classList.contains('hidden')) {
                        card.style.display = 'block';
                        visibleCount++;
                    }
                } else {
                    card.style.display = 'none';
                }
            });

            // Show no results jika search tidak ada hasil
            if (searchTerm && visibleCount === 0) {
                noResultsMessage.classList.remove('hidden');
            } else if (searchTerm === '') {
                // Ketika search di-clear, kembalikan ke state filter
                const selectedFilter = document.querySelector('input[name="dateFilter"]:checked').value;
                applyDateFilter(selectedFilter);
            }
        });
    }
});