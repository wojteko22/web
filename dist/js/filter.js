(function () {
  'use strict'

  window.addEventListener('load', init)

  var tableBody
  var rows

  function init () {
    tableBody = document.getElementById('tbody')
    rows = tableBody.getElementsByTagName('tr')
    initSelects()
  }

  function initSelects () {
    var tableHead = document.getElementById('thead')
    var headers = tableHead.getElementsByTagName('th')
    for (var columnIndex = 0; columnIndex < headers.length; columnIndex++) {
      var select = headers[columnIndex].getElementsByTagName('select')[0]
      var allValues = getAllValues(columnIndex)
      var options = allValues.map(function (value) {
        var option = document.createElement('option')
        var newContent = document.createTextNode(value)
        option.appendChild(newContent)
        return option
      })
      options.forEach(function (option) {
        select.appendChild(option)
      });
      (function () {
        var index = columnIndex
        select.addEventListener('change', function () {
          var selectedOption = this.options[this.selectedIndex]
          filter(selectedOption.textContent, index)
        })
      })()
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

  function filter (text, columnIndex) {
    for (var rowIndex = 0; rowIndex < rows.length; rowIndex++) {
      var row = rows[rowIndex]
      var value = row.cells[columnIndex]
      if (value.textContent === text || text === '*') {
        row.style.display = 'table-row'
      } else {
        row.style.display = 'none'
      }
    }
  }
}())
