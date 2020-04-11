/** Activa animaciones según scroll*/

var waypoint = new Waypoint({
    element: document.getElementById('waveRight'),
    handler: function(direction) {
        $(this.element).addClass('wavyR');
    },
    offset: '60%',
})

var waypoint = new Waypoint({
    element: document.getElementById('waveBoth'),
    handler: function(direction) {
        $(this.element).addClass('wavyL wavyR');
    },
    offset: '60%',
})


var continuousElements = document.getElementsByClassName('fadeItem')
for (var i = 0; i < continuousElements.length; i++) {
  new Waypoint({
    element: continuousElements[i],
    handler: function(direction) {
        $(this.element).addClass('animated fadeIn');
    },
    offset: '90%',
  })
}



/* Formulario y funciones básicas */
var nombre = document.getElementById('nombre');
var cedula = document.getElementById('cedula');
var telefono = document.getElementById('telefono');
var email = document.getElementById('email');

/*
Comprueba que los campos tengan datos.
No tiene validación por ReGex.
*/
function verify(){
    if (nombre.value == ''){
        alert('Campo de nombre no puede estar vacio.');
        nombre.focus();
        return false;
    }
    if (cedula.value == ''){
        alert('Requiere un número de cédula');
        cedula.focus();
        return false;
    }
    if (telefono.value == ''){
        alert('Requiere un número de teléfono');
        telefono.focus();
        return false;
    }    
    if (email.value == ''){
        alert('Por favor ingrese su correo electrónico');
        email.focus();
        return false;
    }
    document.getElementById('form').style.display = 'none';
    displayResults();
    return true;
}

/* Despliega los resultados del formulario */
function displayResults(){
    var zone = document.querySelector('.form');
    var code = `
    <div id='results'>
        <p>Muchas gracias por su interés.<p>
        <p>Usted ha enviado los siguientes datos:</p>
        <ul>
            <li>Su nombre: <i>${nombre.value}</i></li>
            <li>Su cédula: <i>${cedula.value}</i></li>
            <li>Su telefono: <i>${telefono.value}</i></li>
            <li>Su email: <i>${email.value}</i></li>
        </ul>
    </div>
    `;
    zone.insertAdjacentHTML('beforeend', code);
    window.location.href = "#"+'brand';
}

/* Agrega envia datos del formulario */
document.getElementById('formButton').addEventListener('click', function(event){
    verify();
});