document.getElementById('toggleInfo').addEventListener('click', function() {
    var info = document.getElementById('info');
    if (info.style.display === 'none') {
        info.style.display = 'block'; // Muestra la información
    } else {
        info.style.display = 'none'; // Oculta la información
    }
});

    // Funcionalidad para mostrar/ocultar nombres
    document.getElementById('toggleNames').addEventListener('click', function() {
    var names = document.getElementById('names');
    if (names.style.display === 'none') {
        names.style.display = 'block'; // Muestra los nombres
    } else {
        names.style.display = 'none'; // Oculta los nombres
    }
});
const colors = ['lightblue', 'lightgreen', 'lightcoral', 'lightgoldenrodyellow', 'lightpink', 'lightgray', 'lavender', 'peachpuff', 'lightseagreen', 'lightsalmon', 'lightsteelblue', 'lightyellow', 'lightcyan', 'lightgoldenrod', 'lightblue', 'lightpink'];
let currentColorIndex = 0; // Índice del color actual

document.getElementById('changeColor').addEventListener('click', function() {
    currentColorIndex = (currentColorIndex + 1) % colors.length; // Incrementa el índice y reinicia si es necesario
    document.body.style.backgroundColor = colors[currentColorIndex]; // Cambia el color de fondo
});

let count = 0; // Inicializa el contador

document.getElementById('clickCounter').addEventListener('click', function() {
count++; // Incrementa el contador
document.getElementById('clickCount').innerText = 'Clics: ' + count; // Actualiza el texto
});

document.getElementById('showAlert').addEventListener('click', function() {
    alert('¡Este es un mensaje de alerta!'); // Muestra la alerta
});

document.getElementById('moveText').addEventListener('click', function() {
    const textElement = document.getElementById('movingText');
    let position = 0; // Posición inicial
    const interval = setInterval(function() {
        if (position >= window.innerWidth) {
            position = -textElement.offsetWidth; // Reinicia la posición
        }
        textElement.style.left = position + 'px'; // Mueve el texto
        position += 5; // Incrementa la posición
    }, 50); // Intervalo de tiempo para el movimiento
});

document.getElementById('togglePrototypes').addEventListener('click', function() {
    var prototypes = document.getElementById('prototypes');
    if (prototypes.style.display === 'none') {
        prototypes.style.display = 'block'; // Muestra la información
    } else {
        prototypes.style.display = 'none'; // Oculta la información
    }
});