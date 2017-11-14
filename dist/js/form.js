(function () {
  'use strict'

  window.addEventListener('load', start)

  function start () {
    registerInputListeners()
    registerFormListeners()
  }

  function registerInputListeners () {
    registerListeners('name', 'Podaj dwa słowa oddzielone spacją')
    registerListeners('email', 'Podaj email w formacie nazwa@domena')
    registerListeners('comment', 'Napisz to, co chcesz nam przekazać')
  }

  function registerListeners (id, text) {
    var object = document.getElementById(id)
    var messageBox = document.getElementById('message')
    object.addEventListener('focus', function () { messageBox.innerHTML = text })
    object.addEventListener('blur', function () { messageBox.innerHTML = 'Wybierz pole' })
  }

  function registerFormListeners () {
    var form = document.getElementById('form')
    form.addEventListener('submit', function (e) { confirm(e, 'Czy na pewno chcesz wysłać dane mailem?') })
    form.addEventListener('reset', function (e) { confirm(e, 'Czy na pewno chcesz wyczyścić formularz?') })
  }

  function confirm (e, message) {
    var isConfirmed = window.confirm(message)
    if (!isConfirmed) {
      e.preventDefault()
    }
  }
}())
