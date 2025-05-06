// Global variables
let CURRENT_URL, BODY, MENU_TOGGLE, SIDEBAR_MENU, SIDEBAR_FOOTER, LEFT_COL, RIGHT_COL, NAV_MENU, FOOTER;

// Smart resize function
function smartResize(fn) {
    let timeout;
    return function() {
        const context = this;
        const args = arguments;
        if (timeout) {
            clearTimeout(timeout);
        }
        timeout = setTimeout(() => {
            fn.apply(context, args);
            timeout = null;
        }, 100);
    };
}

// Initialize global variables
function initializeGlobals() {
    CURRENT_URL = window.location.href.split('#')[0].split('?')[0];
    BODY = document.body;
    MENU_TOGGLE = document.getElementById('menu_toggle');
    SIDEBAR_MENU = document.getElementById('sidebar-menu');
    SIDEBAR_FOOTER = document.querySelector('.sidebar-footer');
    LEFT_COL = document.querySelector('.left_col');
    RIGHT_COL = document.querySelector('.right_col');
    NAV_MENU = document.querySelector('.nav_menu');
    FOOTER = document.querySelector('footer');
}

// Toggle menu function
function toggleMenu() {
    const isExpanded = BODY.classList.contains('nav-md');

    if (isExpanded) {
        // Collapse menu
        BODY.classList.remove('nav-md');
        BODY.classList.add('nav-sm');
        MENU_TOGGLE.classList.add('active');

        // Hide child menus
        const childMenus = SIDEBAR_MENU.querySelectorAll('.child_menu');
        childMenus.forEach(menu => {
            menu.style.display = 'none';
        });
    } else {
        // Expand menu
        BODY.classList.remove('nav-sm');
        BODY.classList.add('nav-md');
        MENU_TOGGLE.classList.remove('active');

        // Show active child menus
        const activeMenus = SIDEBAR_MENU.querySelectorAll('li.active > .child_menu');
        activeMenus.forEach(menu => {
            menu.style.display = 'block';
        });
    }

    // Update layout
    setHeight();
}

// Set height function
function setHeight() {
    if (!RIGHT_COL || !BODY || !FOOTER || !LEFT_COL || !NAV_MENU) return;

    RIGHT_COL.style.minHeight = window.innerHeight + 'px';
    const bodyHeight = BODY.offsetHeight;
    const footerHeight = BODY.classList.contains('footer_fixed') ? -10 : FOOTER.offsetHeight;
    const leftColHeight = LEFT_COL.offsetHeight + (SIDEBAR_FOOTER ? SIDEBAR_FOOTER.offsetHeight : 0);
    let contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;
    contentHeight -= NAV_MENU.offsetHeight + footerHeight;
    RIGHT_COL.style.minHeight = contentHeight + 'px';
}

// Close all menus
function closeAllMenus() {
    if (!SIDEBAR_MENU) return;

    // Remove active class from all items
    SIDEBAR_MENU.querySelectorAll('li.active').forEach(li => {
        li.classList.remove('active');
    });

    // Hide all child menus
    SIDEBAR_MENU.querySelectorAll('.child_menu').forEach(menu => {
        menu.style.display = 'none';
    });
}

// Initialize sidebar
function initSidebar() {
    // Initialize globals first
    initializeGlobals();

    // Check if required elements exist
    if (!SIDEBAR_MENU || !RIGHT_COL || !BODY || !LEFT_COL || !NAV_MENU) {
        return;
    }

    // Close all menus by default
    closeAllMenus();

    // Add click handler to menu toggle
    if (MENU_TOGGLE) {
        MENU_TOGGLE.onclick = function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMenu();
        };
    }

    // Handle menu item clicks
    SIDEBAR_MENU.querySelectorAll('li > a').forEach(link => {
        link.addEventListener('click', function(e) {
            const li = this.parentElement;
            const hasChildMenu = li.querySelector('.child_menu');

            if (hasChildMenu) {
                // This is a parent menu item with children
                e.preventDefault();
                e.stopPropagation();

                if (li.classList.contains('active')) {
                    // Close the menu
                    li.classList.remove('active');
                    hasChildMenu.style.display = 'none';
                } else {
                    // Close other open menus
                    SIDEBAR_MENU.querySelectorAll('li.active').forEach(activeLi => {
                        if (activeLi !== li) {
                            activeLi.classList.remove('active');
                            const subMenu = activeLi.querySelector('.child_menu');
                            if (subMenu) {
                                subMenu.style.display = 'none';
                            }
                        }
                    });

                    // Open this menu
                    li.classList.add('active');
                    hasChildMenu.style.display = 'block';
                }
                setHeight();
            } else {
                // This is a leaf menu item (no children)
                // Let the default navigation happen
                // Just update the active states
                SIDEBAR_MENU.querySelectorAll('li.active').forEach(activeLi => {
                    activeLi.classList.remove('active');
                });

                li.classList.add('active');
                let parent = li.parentElement;
                while (parent && parent.tagName === 'UL') {
                    parent.style.display = 'block';
                    if (parent.parentElement) {
                        parent.parentElement.classList.add('active');
                    }
                    parent = parent.parentElement;
                }
            }
        });
    });

    // Set active menu item for current page
    const currentPageLink = SIDEBAR_MENU.querySelector(`a[href="${CURRENT_URL}"]`);
    if (currentPageLink) {
        const currentPageLi = currentPageLink.parentElement;
        currentPageLi.classList.add('active');
        let parent = currentPageLi.parentElement;
        while (parent && parent.tagName === 'UL') {
            parent.style.display = 'block';
            if (parent.parentElement) {
                parent.parentElement.classList.add('active');
            }
            parent = parent.parentElement;
        }
    }

    // Handle window resize
    window.addEventListener('resize', smartResize(setHeight));

    // Initial height
    setHeight();
}

// Initialize when document is ready
document.addEventListener('DOMContentLoaded', function() {
    initSidebar();
});
