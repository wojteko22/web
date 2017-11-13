(function () {
  'use strict'

  window.addEventListener('load', init)
  var isSmieszking = false
  var isPlay = false

  function init () {
    document.addEventListener('keyup', smieszking)
    document.getElementById('animatedBall').addEventListener('mouseover', mouseOver)
    document.getElementById('animatedBall').addEventListener('mouseout', mouseOut)
  }

  function smieszking (event) {
    changeBall(event.keyCode)
    moveBall(event.keyCode)
  }

  function changeBall (keyCode) {
    if (keyCode === 83) { // 's'
      if (!isSmieszking) {
        isSmieszking = true
        document.getElementById('animatedBall').addEventListener('mousedown', altMouse)
      } else {
        isSmieszking = false
        document.getElementById('animatedBall').removeEventListener('mousedown', altMouse)
      }
    }
  }

  function moveBall (keyCode) {
    if (keyCode === 77) { // 'm'
      if (!isPlay) {
        isPlay = true
        document.addEventListener('mousemove', play)
      } else {
        isPlay = false
        document.removeEventListener('mousemove', play)
      }
    }
  }

  function altMouse (event) {
    if (event.altKey) {
      document.getElementById('animatedBall').src = '../resources/testar.png'
    }
    if (event.ctrlKey) {
      document.getElementById('animatedBall').src = '../resources/vladimir.png'
    }
    if (event.shiftKey) {
      document.getElementById('animatedBall').src = '../resources/ball.png'
    }
  }

  function play (event) {
    var x = event.clientX
    var y = event.clientY
    updateCoordinates(event.screenX, event.screenY, x, y)
    document.getElementById('animatedBall').style.transform = 'translate(' + (x - 100) + 'px,' + (y - 400) + 'px)'
  }

  function updateCoordinates (sx, sy, cx, cy) {
    document.getElementById('coordinates').innerHTML = 'screen: ' + sx + ' x ' + sy + '\nclient: ' + cx + ' x ' + cy
  }

  function mouseOver () {
    document.getElementById('animatedBall').style.width = '200px'
    document.getElementById('animatedBall').style.height = '200px'
  }

  function mouseOut () {
    document.getElementById('animatedBall').style.width = '100px'
    document.getElementById('animatedBall').style.height = '100px'
  }
}())
