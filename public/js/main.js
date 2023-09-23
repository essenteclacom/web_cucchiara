// JavaScript
document.addEventListener('DOMContentLoaded', function () {
    const submenus = document.querySelectorAll('.menu li ul li');

    submenus.forEach((submenu) => {
        submenu.addEventListener('click', (e) => {
            // alert('prueba')
            e.stopPropagation(); // Evita que el clic se propague a elementos padre
            const subMenuList = submenu.querySelector('.submenu');
            if (subMenuList) {
                subMenuList.classList.toggle('active');
            }
        });
    });
});