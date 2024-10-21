    // Seleccionamos todos los botones por clase
    document.querySelectorAll('.dropdown-button').forEach(button => {
        button.addEventListener('click', function() {
            // Obtenemos el valor del data-target, que nos indica el ID del menú a desplegar
            const targetMenuId = button.getAttribute('data-target');
            
            // Seleccionamos el menú que corresponde al botón actual
            const dropdownMenu = document.getElementById(targetMenuId);

            // Alternamos la clase 'hidden' para mostrar/ocultar el menú
            if (dropdownMenu) {
                dropdownMenu.classList.toggle('hidden');
            }
        });
    });