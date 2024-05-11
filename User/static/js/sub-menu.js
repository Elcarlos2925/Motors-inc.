document.addEventListener('DOMContentLoaded', function() {
    const subMenuBtns = document.querySelectorAll('.sub-menu-btn');

    subMenuBtns.forEach(function(btn) {
        btn.addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado del enlace

            const subMenu = this.nextElementSibling; // Selecciona el submenú
            const dropdownIcon = this.querySelector('.dropdown'); // Selecciona el icono de la flecha

            // Verificar si el submenú está abierto o cerrado
            const isOpen = subMenu.classList.contains('show');

            // Si el submenú está abierto, girar la flecha hacia abajo
            // Si está cerrado, girar la flecha hacia la derecha
            if (isOpen) {
                dropdownIcon.style.transform = 'rotate(180deg)';
            } else {
                dropdownIcon.style.transform = 'rotate(90deg)';
            }

            // Toggle (alternar) la clase .show en el submenú para mostrarlo u ocultarlo
            subMenu.classList.toggle('show');
        });
    });
});