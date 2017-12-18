(function () {
  'use strict'

  var backgroundColorInput
  var colorInput
  var fontInput

  window.addEventListener('load', start)

  function start () {
    initVariables()
    addListeners()
  }

  function initVariables () {
    backgroundColorInput = document.getElementById('background-color')
    colorInput = document.getElementById('color')
    fontInput = document.getElementById('font')
  }

  function addListeners () {
    backgroundColorInput.addEventListener('change', setBackgroundColor)
    colorInput.addEventListener('change', setColor)
    fontInput.addEventListener('change', setFont)
  }

  function setBackgroundColor () {
    document.body.style.backgroundColor = backgroundColorInput.value
  }

  function setColor () {
    document.getElementById('text').style.color = colorInput.value
  }

  function setFont () {
    document.getElementById('text').style.fontFamily = fontInput.value
  }
}())
