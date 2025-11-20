document.addEventListener('DOMContentLoaded', () => {
  const accordionHeaders = document.querySelectorAll('.accordion-header');

  accordionHeaders.forEach(header => {
    header.addEventListener('click', () => {
      const accordionItem = header.parentNode;
      accordionItem.classList.toggle('active');
    });
  });
});
document.addEventListener('DOMContentLoaded', () => {
    // Select all links in both the desktop and mobile menus
    const navLinks = document.querySelectorAll('.unique-nav-links a, .unique-sidebar a');

    // Select the mobile menu buttons
    const menuBtn = document.getElementById('menuBtn');
    const closeBtn = document.getElementById('closeBtn');
    const sidebar = document.getElementById('sidebar');

    // A function to handle the active class on all navigation links
    function handleActiveState(currentUrl) {
        navLinks.forEach(link => {
            // Remove 'active' from all links
            link.classList.remove('active');

            // Find the correct link to activate
            if (link.getAttribute('href') === currentUrl) {
                link.classList.add('active');
            }
        });
    }

    // Call the function on page load to set the initial active link
    const currentPath = window.location.pathname.split('/').pop() || 'index.php';
    handleActiveState(currentPath);

    // Add click event listeners to handle active state dynamically
    navLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            // When a link is clicked, update the active state
            const clickedLinkPath = link.getAttribute('href');
            handleActiveState(clickedLinkPath);
        });
    });

    // Mobile sidebar toggle functionality
    menuBtn.addEventListener('click', () => {
        sidebar.classList.add('active');
    });

    closeBtn.addEventListener('click', () => {
        sidebar.classList.remove('active');
    });
});

