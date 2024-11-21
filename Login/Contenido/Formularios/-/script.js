function guardarDatos() {
    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    
    localStorage.setItem('nombre', nombre);
    localStorage.setItem('email', email);
  }
  
  // Llama a esta función cuando se envíe el formulario
  document.getElementById('miFormulario').addEventListener('submit', function(event) {
    event.preventDefault(); // Previene el envío por defecto
    guardarDatos();
  });
  