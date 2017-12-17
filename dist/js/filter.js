(function () {
  'use strict'

  window.addEventListener('load', init)

  var tableBody
  var rows
  var selects

  function init () {
    tableBody = document.getElementById('tbody')
    rows = tableBody.getElementsByTagName('tr')
    selects = document.getElementById('thead').getElementsByTagName('select')
    initSelects()
  }

  function initSelects () {
    for (var columnIndex = 0; columnIndex < selects.length; columnIndex++) {
      var select = selects[columnIndex]
      var allValues = getAllValues(columnIndex)
      var options = allValues.map(function (value) {
        var option = document.createElement('option')
        var newContent = document.createTextNode(value)
        option.appendChild(newContent)
        return option
      })
      options.forEach(function (option) {
        select.appendChild(option)
      })
      select.addEventListener('change', filter)
    }
  }

  function getAllValues (columnIndex) {
    var columnValues = []
    for (var rowIndex = 0; rowIndex < rows.length; rowIndex++) {
      var columns = rows[rowIndex].getElementsByTagName('td')
      var value = columns[columnIndex].textContent
      if (columnValues.indexOf(value) === -1) {
        columnValues.push(value)
      }
    }
    return columnValues
  }

  function filter () {
    for (var index = 0; index < rows.length; index++) {
      rows[index].style.display = 'table-row'
    }
    for (var columnIndex = 0; columnIndex < selects.length; columnIndex++) {
      var select = selects[columnIndex]
      var selectedOption = select.options[select.selectedIndex].textContent
      for (var rowIndex = 0; rowIndex < rows.length; rowIndex++) {
        var row = rows[rowIndex]
        var value = row.cells[columnIndex]
        if (selectedOption !== '*' && value.textContent !== selectedOption) {
          row.style.display = 'none'
        }
      }
    }
  }
}())