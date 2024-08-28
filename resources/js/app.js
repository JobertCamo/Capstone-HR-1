import './bootstrap';
import './function';

window.toggleSidebar = function() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('content'); 

    if (sidebar.classList.contains('translate-x-0')) {
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('-translate-x-full');
        mainContent.classList.remove('ml-[20%]');
    } else {
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.add('translate-x-0');
        mainContent.classList.add('ml-[20%]');
    }
};

function adjustMargin() {
    const content = document.getElementById('content');
    if (window.innerWidth <= 639) {
        content.classList.remove('ml-[20%]');
    } else {
        content.classList.add('ml-[20%]');
    }
}

// Run the function on page load and window resize
window.addEventListener('load', adjustMargin);
window.addEventListener('resize', adjustMargin);
