import './bootstrap'

import '../css/app.scss'

import $ from 'jquery';

import *  as bootstrap from 'bootstrap'

var countdownEl = document.getElementById("countdown");
var startBtn = document.getElementById("start-btn");
var images = document.querySelectorAll("#image-container .card");
var currentImageIndex = 0;
var lastImageChangeTime = 0;

startBtn.addEventListener("click", function () {
  var timeLeft = 180; // 3 minutos en segundos

  var timerId = setInterval(function () {
    var currentTime = Date.now() / 1000; // tiempo actual en segundos

    // Mostrar la imagen actual si ha pasado un minuto desde la última vez que se cambió
    if (currentTime - lastImageChangeTime >= 60) {
      images[currentImageIndex].classList.add("hidden"); // ocultar imagen actual
      currentImageIndex = (currentImageIndex + 1) % images.length; // cambiar a la siguiente imagen
      images[currentImageIndex].classList.remove("hidden"); // mostrar la imagen nueva
      lastImageChangeTime = currentTime; // actualizar el tiempo de cambio de imagen
    }

    var minutes = Math.floor(timeLeft / 60);
    var seconds = timeLeft % 60;
    countdownEl.textContent = `${minutes}:${String(seconds).padStart(2, '0')}`;
    timeLeft--;

    if (timeLeft < 0) {
      clearInterval(timerId);
      window.location.href = '/';
    }
  }, 1000);
});

// Obtener todos los botones de guardar
const guardarBtns = document.querySelectorAll('.guardar-btn');

// Agregar un listener a cada botón
guardarBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    const textoInput = btn.parentElement.querySelector('.texto-input');
    const nombreInput = btn.dataset.nombre;
    const imagenIdInput = btn.dataset.imagenId;
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
    // Crear objeto FormData con los datos a enviar
    const formData = new FormData();
    formData.append('texto', textoInput.value);
    formData.append('nombre', nombreInput);
    formData.append('imagen_id', imagenIdInput);
    formData.append('_token', token);
    
    // Enviar petición POST al controlador para guardar en la base de datos
    fetch('{{ route("subir_resp") }}', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Ocurrió un error al guardar la respuesta.');
      }
      return response.json();
    })
    .then(data => {
      console.log('Respuesta guardada:', data);
      // Limpiar el input de texto
      textoInput.value = '';
    })
    .catch(error => {
      console.error(error);
    });
  });
});
