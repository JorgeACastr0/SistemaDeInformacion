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