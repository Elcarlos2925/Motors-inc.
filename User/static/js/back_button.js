// Función para manejar el evento click del botón
function goBack() {
    window.history.back(); // Volver atrás en la historia del navegador
}

// Obtener el botón por su ID
var backButton = document.getElementById('back-button');

// Añadir un event listener para el evento click
backButton.addEventListener('click', goBack);