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
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const menu = this.nextElementSibling;
            const icon = this.querySelector('svg');
            
            // Cek apakah ini parent atau child dropdown
            const isParentDropdown = this.closest('li').parentElement.id !== 'mobile-sidebar';
            
            // Close sibling dropdowns only (same level)
            const parentList = this.closest('ul');
            const siblingToggles = parentList.querySelectorAll(':scope > li > .mobile-dropdown-toggle');
            
            siblingToggles.forEach(siblingToggle => {
                if (siblingToggle !== this) {
                    const siblingMenu = siblingToggle.nextElementSibling;
                    const siblingIcon = siblingToggle.querySelector('svg');
                    
                    if (siblingMenu) {
                        siblingMenu.classList.add('hidden');
                        if (siblingIcon) {
                            siblingIcon.style.transform = '';
                        }
                    }
                }
            });

            // Toggle current dropdown
            if (menu) {
                menu.classList.toggle('hidden');
                if (menu.classList.contains('hidden')) {
                    icon.style.transform = '';
                } else {
                    icon.style.transform = 'rotate(180deg)';
                }
            }
        });
    });
});