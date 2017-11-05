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
            var answer = showQuestion(questions[i]);
            var isCorrect = checkAnswer(answers[i], answer);
            points += isCorrect? 1 : 0;
            if (i === 1 && !isCorrect){
                pazdanFight(questions[i], answers[i])
            }
        }
        checkResult(points);
    }

    function showQuestion(question) {
        var answer;
        while (!answer) {
            answer = window.prompt(question);
        }
        return answer;
    }

    function checkAnswer(properAnswer, answer) {
        if (answer.toLowerCase() === properAnswer) {
            window.alert("Dobra odpowiedź!");
        } else {
            window.alert("Zła odpowiedź!");
        }
        return answer.toLowerCase() === properAnswer;
    }

    function pazdanFight(pazdanQuestion, pazdanAnswer) {
        var yellowCardsForPazdan = 0;
        do {
            var answer = showQuestion(pazdanQuestion);
            var isCorrect = checkAnswer(pazdanAnswer, answer);
            yellowCardsForPazdan++;
        } while (!isCorrect && yellowCardsForPazdan < 2);
        var cardFurPazdana = yellowCardsForPazdan < 2 ? "żółtą" : "czerwoną";
        window.alert("Przepraszamy to Pazdan jest taki nieustępliwy. Za to zagranie otrzymał " + cardFurPazdana + " kartkę ;)")
    }

    function checkResult(userPoints) {
        var result;
        switch (userPoints) {
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