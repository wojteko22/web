(function () {
  'use strict'

  document.addEventListener('keypress', showCollectionsSize)

  function showCollectionsSize (e) {
    var key = e.key
    if (key === '1') {
      window.alert(alertMessage())
    }

    if (key === '2') {
      markSpecyficLinkName()
    }

    if (key === '3') {
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
    var name = window.prompt('Podaj nazwę linka')
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
