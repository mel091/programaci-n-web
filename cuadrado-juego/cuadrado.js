document.addEventListener('keydown', mover);

function mover(e) {
    const player = document.getElementById('jugador');
    
    // Obtener las posiciones actuales
    let izq = parseInt(window.getComputedStyle(player).getPropertyValue('left'));
    let arr = parseInt(window.getComputedStyle(player).getPropertyValue('top'));

    let avanzar = 5; // Ahora es un número

    switch (e.key) {
        case 'ArrowUp':
            if (arr > 0) {
                player.style.top = (arr - avanzar) + 'px';
            }
            break;

        case 'ArrowRight':
            if (izq < 450) { // Usar 'izq' para movimiento horizontal
                player.style.left = (izq + avanzar) + 'px';
            }
            break;

        case 'ArrowLeft':
            if (izq > 0) { // Usar 'izq' para movimiento horizontal
                player.style.left = (izq - avanzar) + 'px';
            }
            break;

        case 'ArrowDown':
            if (arr < 450) { // Usar 'arr' para movimiento vertical
                player.style.top = (arr + avanzar) + 'px';
            }
            break;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const player = document.getElementById('jugador');
    player.style.left = '0px';
    player.style.top = '0px';
});
