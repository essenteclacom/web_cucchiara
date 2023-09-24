// JavaScript
document.addEventListener('DOMContentLoaded', function () {
    const submenus = document.querySelectorAll('.submenu');
    submenus.forEach((submenu) => {
        submenu.addEventListener('click', (e) => {
            // alert('submenu')
            e.stopPropagation(); // Evita que el clic se propague a elementos padre
            const subMenuList = submenu.querySelector('.ul-menu');
            if (subMenuList) {
                subMenuList.classList.toggle('active');
            }
        });
    });

    const finalmenus = document.querySelectorAll('.finalmenu');
    finalmenus.forEach((finalmenu) => {
        finalmenu.addEventListener('click', (e) => {
            // alert('finalmenu')
            e.stopPropagation();
            var listas = document.querySelectorAll('.list')
                for (var i = 0; i < listas.length; i++) {
                    listas[i].classList.add('hidden')
                }
            const finalmenuid = finalmenu.id
            const lista = document.getElementById('lista-'+finalmenuid) 
            const hidden = lista.classList.contains('hidden')
            if(hidden){
                lista.classList.toggle('hidden')
            }
        });
    });
});