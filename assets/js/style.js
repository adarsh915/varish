const menuBtn = document.getElementById('menuBtn');
const closeBtn = document.getElementById('closeBtn');
const sidebar = document.getElementById('sidebar');

menuBtn.addEventListener('click', () => {
  sidebar.classList.add('active');
});

closeBtn.addEventListener('click', () => {
  sidebar.classList.remove('active');
});


  // Hide loader after page fully loads
  
    const accordions = document.querySelectorAll('.accordion-item');

    accordions.forEach(item => {
      item.querySelector('.accordion-header').addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  