// TEST SIMPLE - VERSIÓN MÍNIMA
console.log('Test modal iniciado');

// Event listener simple
document.addEventListener('click', function(e) {
    // Verificar si se hizo click en un botón de leer artículo
    if (e.target.classList.contains('btn-read-article') || e.target.closest('.btn-read-article')) {
        console.log('¡CLICK DETECTADO!');
        alert('Botón detectado: ' + (e.target.getAttribute('data-article') || 'sin data-article'));
        return;
    }
});

console.log('Test modal listo');
