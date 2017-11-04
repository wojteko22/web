(function () {
    "use strict";

    window.addEventListener("load", start);

    function start() {
        var memeButton = document.getElementById("newMemeButton");
        memeButton.addEventListener("click", setMeme);
        var quizButton = document.getElementById("quizButton");
        quizButton.addEventListener("click", startQuiz);
    }

    function setMeme() {
        var memeImg = document.getElementById("meme");
        var random = Math.floor(1 + Math.random() * 10);
        memeImg.setAttribute("src", "../resources/memes/meme" + random + ".jpg");
    }

    function startQuiz() {
        var questions = [
            "W jakim mieście siedzibę ma klub Lewandowskiego?",
            "Podaj nazwisko piłkarza o ksywce \"Pirania\"",
            "Jak ma na imię żona Wojciecha Szczęsnego?"
        ];
        var answers = ["monachium", "pazdan", "marina"];
        var points = 0;
        for (var i = 0; i < questions.length; i++) {
            var answer;
            do {
                answer = window.prompt(questions[i]);
            } while (!answer);
            if (answer.toLowerCase() === answers[i]) {
                window.alert("Dobra odpowiedź!");
                points++;
            } else {
                window.alert("Zła odpowiedź!");
            }
        }
        var result;
        switch (points) {
            case 3:
                result = "Jesteś najlepszy!";
                break;
            case 2:
                result = "Nieźle!";
                break;
            case 1:
                result = "Nie za dużo wiesz o reprezentacji";
                break;
            default:
                result = "Doucz się koniecznie!";
        }
        window.alert(result);
    }
}());