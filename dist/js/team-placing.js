(function () {
  'use strict'

  var currentNode

  window.addEventListener('load', start)

  function start () {
    currentNode = document.getElementById('placing')
    currentNode.addEventListener('click', mark)
    document.getElementById('appendBtn').addEventListener('click', append)
    document.getElementById('insertBeforeBtn').addEventListener('click', insertBefore)
    document.getElementById('replaceBtn').addEventListener('click', replace)
    document.getElementById('deleteBtn').addEventListener('click', remove)
  }

  function mark (e) {
    currentNode.setAttribute('class', '')
    currentNode = e.target
    currentNode.setAttribute('class', 'marked')
  }

  function append () {
    var div = createElement()
    currentNode.appendChild(div)
  }

  function insertBefore () {
    if (currentNode.id === 'placing') {
      window.alert('Przed tym elementem już nie możesz niczego dodać')
    } else {
      var div = createElement()
      currentNode.parentNode.insertBefore(div, currentNode)
    }
  }

  function replace () {
    var div = createElement()
    currentNode.parentNode.replaceChild(div, currentNode)
  }

  function createElement () {
    var div = document.createElement('div')
    var text = document.getElementById('input').value || 'Lewy'
    var textNode = document.createTextNode(text)
    div.appendChild(textNode)
    return div
  }

  function remove () {
    if (currentNode.id === 'placing') {
      window.alert('Tego elementu nie można usunąć')
    } else {
      currentNode.parentNode.removeChild(currentNode)
    }
  }
}())
