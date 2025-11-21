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