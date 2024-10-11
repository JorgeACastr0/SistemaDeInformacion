// PARTE FUNDAMENTAL PARA MOVERSE ENTRE PESTAÑAS
/*Al hacer clic en una pestaña, ésta se destaque visualmente 
setActiveTab(): Esta función elimina la clase active de todas las pestañas de navegación */
document.getElementById("showMenu").addEventListener("click", function () {
  setActiveTab(this);
  showContent("mainContent");
});

document.getElementById("showDocentes").addEventListener("click", function () {
  setActiveTab(this);
  showContent("docentesContent");
});

document.getElementById("showEstudiantes")
  .addEventListener("click", function () {
    setActiveTab(this);
    showContent("estudiantesContent");
  });

document.getElementById("showReportes").addEventListener("click", function () {
  setActiveTab(this);
  showContent("reportesContent");
});

function showContent(contentId) {
  // Ocultar todo el contenido
  document.getElementById("docentesContent").style.display = "none";
  document.getElementById("estudiantesContent").style.display = "none";
  document.getElementById("reportesContent").style.display = "none";
  document.getElementById("mainContent").style.display = "none";

  // Mostrar el contenido específico
  document.getElementById(contentId).style.display = "block";
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

document.getElementById("toggleFormBtn").addEventListener("click", function () {
  const tabla = document.getElementById("tablaMostrar"); // Seleccionar la tabla
  if (tabla.style.display === "none" || tabla.style.display === "") {
    tabla.style.display = "block"; // Mostrar la tabla
    this.textContent = "Ocultar Tabla"; // Cambiar el texto del botón
  } else {
    tabla.style.display = "none"; // Ocultar la tabla
    this.textContent = "Mostrar Tabla"; // Cambiar el texto del botón
  }
});


document.getElementById('docenteForm').addEventListener('submit', function (event) {
  var form = event.target;
  
  if (!form.checkValidity()) {
      event.preventDefault(); // Evita el envío del formulario
      event.stopPropagation(); // Detiene la propagación del evento
  }

  form.classList.add('was-validated'); // Añade clases de validación para mostrar los errores en pantalla
}, false);




function showEditForm(id_docente) {
  // Hacer una solicitud AJAX para obtener los datos del docente
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "get_docente_data.php", true); // Archivo PHP que obtiene los datos del docente
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);

          // Generar el formulario de edición en el DOM
          var formHtml = `
              <form id="editForm">
                  <input type='hidden' name='id_docente' value='${response.Id_Docente}' required>
                  <div class='mb-3'>
                      <label for='nombre' class='form-label'>Nombre</label>
                      <input type='text' name='Nombre' value='${response.Nombre}' required class='form-control' id='nombre'>
                  </div>
                  <div class='mb-3'>
                      <label for='apellido' class='form-label'>Apellido</label>
                      <input type='text' name='Apellido' value='${response.Apellido}' required class='form-control' id='apellido'>
                  </div>
                  <div class='mb-3'>
                      <label for='email' class='form-label'>Email</label>
                      <input type='text' name='Email' value='${response.Email}' required class='form-control' id='email'>
                  </div>
                  <div class='mb-3'>
                      <label for='contraseña' class='form-label'>Contraseña</label>
                      <input type='text' name='contraseña' value='${response.Contraseña}' required class='form-control' id='contraseña'>
                  </div>
                  <input type='submit' value='Actualizar' class='btn btn-primary'>
              </form>
          `;

          // Mostrar el formulario de edición en el DOM
          document.getElementById("editarFormulario").innerHTML = formHtml;

          // Llamar a la función para actualizar el docente vía AJAX
          document.getElementById("editForm").addEventListener("submit", function (event) {
              event.preventDefault();
              updateDocente(this);
          });
      }
  };

  // Enviar la solicitud con el ID del docente
  xhr.send("id=" + id_docente);
}

function updateDocente(form) {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "update_docente.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          alert("Docente actualizado correctamente");
          // Recargar la tabla de docentes o actualizar la fila en el DOM sin recargar la página
      }
  };

  // Serializar los datos del formulario y enviarlos
  var formData = new FormData(form);
  xhr.send(new URLSearchParams(formData).toString());
}
