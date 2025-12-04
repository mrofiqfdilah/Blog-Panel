// =====================
// ELEMENT SELECTORS
// =====================
const sidebar = document.getElementById('sidebar');
const toggleSidebar = document.getElementById('toggleSidebar');
const toggleIcon = document.getElementById('toggleIcon');

const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const closeSidebar = document.getElementById('closeSidebar');

const pfpBtn = document.getElementById('pfpBtn');
const popupMenu = document.getElementById('popupMenu');


// =====================
// DESKTOP SIDEBAR TOGGLE
// =====================
if (toggleSidebar) {
    toggleSidebar.addEventListener('click', () => {
        sidebar.classList.toggle('w-64');
        sidebar.classList.toggle('w-16');

        toggleIcon.classList.toggle('ri-menu-fold-line');
        toggleIcon.classList.toggle('ri-menu-unfold-line');
    });
}


// =====================
// MOBILE SIDEBAR OPEN
// =====================
if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
    });
}

// =====================
// MOBILE SIDEBAR CLOSE
// =====================
if (closeSidebar) {
    closeSidebar.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
    });
}


// =====================
// PROFILE POPUP MENU
// =====================
if (pfpBtn) {
    pfpBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        popupMenu.classList.toggle('hidden');
    });
}

// Hide popup when clicking outside
window.addEventListener('click', function (e) {
    if (!popupMenu.contains(e.target) && !pfpBtn.contains(e.target)) {
        popupMenu.classList.add('hidden');
    }
});
