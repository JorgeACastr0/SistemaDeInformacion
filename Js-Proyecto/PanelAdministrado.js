// PARTE FUNDAMENTAL PARA MOVERSE ENTRE PESTAÑAS
// Manejadores para mostrar cada sección
document.getElementById('showMenuP').addEventListener('click', function() {
    setActiveTab(this);
    showSection('mainContent');
});

document.getElementById('showDocentes').addEventListener('click', function() {
    setActiveTab(this);
    showSection('docentesContent');
});

document.getElementById('showEstudiantes').addEventListener('click', function() {
    setActiveTab(this);
    showSection('estudiantesContent');
});

document.getElementById('showReportes').addEventListener('click', function() {
    setActiveTab(this);
    showSection('reportesContent');
});

function showSection(sectionId) {
    // Oculta todas las secciones
    document.getElementById('docentesContent').style.display = 'none';
    document.getElementById('estudiantesContent').style.display = 'none';
    document.getElementById('reportesContent').style.display = 'none';
    document.getElementById('mainContent').style.display = 'none';

    // Muestra la sección seleccionada  
    document.getElementById(sectionId).style.display = 'block';
}
function setActiveTab(activeTab) {
    // Elimina la clase 'active' de todas las pestañas
    var tabs = document.querySelectorAll(".nav-link");
    tabs.forEach(function (tab) {
      tab.classList.remove("active");
    });
  
    // Agrega la clase 'active' solo a la pestaña clickeada
    activeTab.classList.add("active");
  }


  // fin PARTE FUNDAMENTAL PARA MOVERSE ENTRE PESTAÑAS




  // Formulario  
  document.getElementById('docenteForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita la recarga de la página

    // Obtener los datos del formulario
    const formData = new FormData(this);

    // Enviar los datos a través de AJAX
    fetch('agregar_docente.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            actualizarTablaDocentes(); // Llama a la función para actualizar la tabla
            this.reset(); // Limpia el formulario
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error('Error:', error));
});

// Función para actualizar la tabla de docentes
function actualizarTablaDocentes() {
    fetch('listar_docentes.php') // Archivo PHP que retorna la tabla de docentes
    .then(response => response.text())
    .then(html => {
        document.querySelector('#docentesContent .table-responsive tbody').innerHTML = html;
    })
    .catch(error => console.error('Error al actualizar la tabla:', error));
}


// editar formulario (docente)
// Función para cargar los datos del docente en el formulario modal
function cargarDocente(idDocente) {
    fetch('obtener_docente.php?id=' + idDocente)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('editIdDocente').value = data.docente.Id_Docente;
                document.getElementById('editNombre').value = data.docente.Nombre;
                document.getElementById('editApellido').value = data.docente.Apellido;
                document.getElementById('editEmail').value = data.docente.Email;
                document.getElementById('editContraseña').value = data.docente.Contraseña;
                new bootstrap.Modal(document.getElementById('editarDocenteModal')).show();
            } else {
                alert("Error al cargar los datos del docente.");
            }
        })
        .catch(error => console.error('Error:', error));
}

// Enviar el formulario de edición
document.getElementById('editarDocenteForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('editar_docente.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            location.reload(); // Recargar la tabla de docentes
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error('Error:', error));
});

// Función para eliminar un docente
function eliminarDocente(idDocente) {
    if (confirm("¿Estás seguro de que deseas eliminar este docente?")) {
        fetch('eliminar_docente.php?id=' + idDocente, { method: 'GET' })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    location.reload(); // Recargar la tabla de docentes
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Error:', error));
    }
}