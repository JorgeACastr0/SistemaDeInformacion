//Esto me dice que al abrir la pestada ocurre el evento de cargar la fecha y hora exacta)
window.addEventListener("load", () => {

    const currentDate = new Date();
    const day = currentDate.getDate(); // Día
    const month = currentDate.getMonth() + 1; // Mes (0-11, así que sumamos 1)
    const year = currentDate.getFullYear(); // Año
    const hours = currentDate.getHours(); // Hora
    const minutes = currentDate.getMinutes(); // Minutos
    const seconds = currentDate.getSeconds(); // Segundos

    // Formatear la fecha y hora
    const formattedDate = `${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;


    const currentDateAll = document.getElementById('currentDateAll');
    currentDateAll.innerText = formattedDate;


})

document.addEventListener('DOMContentLoaded', function () {
    const sidebarToggle = document.querySelector('.navbar-toggler');
    const body = document.body;

    sidebarToggle.addEventListener('click', function () {
        body.classList.toggle('sidebar-open');
    });
});

// In your service worker
self.addEventListener('message', (event) => {
    // Simulate a long-running task
    setTimeout(() => {
        try {
            // Send the response
            event.source.postMessage('Response from service worker');
        } catch (error) {
            console.error('Error sending response:', error);
        }
    }, 2000);

    return true; // Indicate an asynchronous response
});




// Modificar el JavaScript para detectar el parámetro section y mostrar la sección correspondiente
document.addEventListener('DOMContentLoaded', function() {
    // Función para obtener el valor de un parámetro de la URL
    function getParameterByName(name, url = window.location.href) {
        name = name.replace(/[\[\]]/g, '\\$&');
        let regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    // Obtener el parámetro "section" de la URL
    let section = getParameterByName('section');

    // Asegurarse de que la comparación sea en minúsculas
    if (section) {
        section = section.toLowerCase(); // Convertir a minúsculas
        if (section === 'docentes') {
            showContent('docentesContent', 'Docentes'); // Mostrar la sección "Docentes"
        }
        // Puedes agregar más secciones si es necesario
    }
});
