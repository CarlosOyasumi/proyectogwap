import './bootstrap'

import '../css/app.scss'

import *  as bootstrap from 'bootstrap'

var countdownEl = document.getElementById("countdown");
var startBtn = document.getElementById("start-btn");

startBtn.addEventListener("click", function () {
  var timeLeft = 180; // 3 minutos en segundos
  var timerId = setInterval(function () {
    var minutes = Math.floor(timeLeft / 60);
    var seconds = timeLeft % 60;
    countdownEl.textContent = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
    timeLeft--;
    if (timeLeft < 0) {
      clearInterval(timerId);
      window.location.href ='/'
    }
  }, 1000);
});