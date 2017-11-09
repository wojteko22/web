(function () {
  'use strict'

  document.addEventListener('keypress', showCollectionsSize)

  function showCollectionsSize (e) {
    e = e || window.event // todo: czemu w ogóle tu ten window.event (depracated)?
    var key = e.which || e.keyCode // todo: keyCode jest depracated, na liście jest, ale tu po co w ogóle?
    if (key === 109) { // todo: co to za klawisze? coś na numerycznej? bo mi nie działają (może trzeba włączyć, nie umiem), komentarz by się przydał
      window.alert(alertMessage())
    }

    if (key === 110) {
      markSpecyficLinkName()
    }

    if (key === 98) {
      markSpecyficIndexImage()
    }
  }

  function alertMessage () {
    return 'images: ' + document.images.length +
      ' links: ' + document.links.length +
      ' anchors: ' + document.anchors.length +
      ' forms: ' + document.forms.length
  }

  function markSpecyficLinkName () {
    var name = window.prompt('Podaj nazwę')
    var element = document.links.namedItem(name)
    if (element) {
      element.style.backgroundColor = 'red'
    }
  }

  function markSpecyficIndexImage () {
    var index = window.prompt('Podaj index obrazka')
    var image = document.images.item(index)
    if (image) {
      image.style.borderBottomStyle = 'solid'
      image.style.borderBottomColor = 'red'
      image.style.borderBottomWidth = 'medium'
    }
  }
}())
