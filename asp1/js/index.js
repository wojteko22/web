var miliInMonth = 2629746000
var miliInDay = 86400000
var miliInHour = 3600000
var miliInMin = 60000
var miliInSec = 1000
var nextMatchDay = new Date(2017, 10, 10, 20, 45);

(function () {
  'use strict'

  document.writeln('<h1>Oto strona o reprezentacji Polski!</h1>')

  window.onload = function () {
    refreshTimeToNextMatch()
    setInterval(refreshTimeToNextMatch, 500)
  }

  function refreshTimeToNextMatch () {
    var actualDate = new Date()
    var timeLeftToMatch = convertFromMilliseconds(nextMatchDay - actualDate)
    document.getElementById('nextMatchCount').innerHTML = ' Pozostało: ' +
      timeLeftToMatch.months + ' miesiecy ' +
      timeLeftToMatch.days + ' dni ' +
      timeLeftToMatch.hours + ' godzin ' +
      timeLeftToMatch.minutes + ' minut ' +
      timeLeftToMatch.seconds + ' sekund'
  }

  function convertFromMilliseconds (milliseconds) {
    var time = parseInt(milliseconds)
    var months = parseInt(time / miliInMonth)
    var days = parseInt((time - (months * miliInMonth)) / miliInDay)
    var hours = parseInt((time - months * miliInMonth - days * miliInDay) / miliInHour)
    var minutes = parseInt((time - months * miliInMonth - days * miliInDay - hours * miliInHour) / miliInMin)
    var seconds = parseInt((time - months * miliInMonth - days * miliInDay - hours * miliInHour - minutes * miliInMin) / miliInSec)

    return {
      months: months,
      days: days,
      hours: hours,
      minutes: minutes,
      seconds: seconds
    }
  }
}())
