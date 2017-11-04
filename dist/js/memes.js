(function() {
    "use strict";

    window.addEventListener("load", start);

    function start() {
        var button = document.getElementById("newMemeButton");
        button.addEventListener("click", setMeme);
    }

    function setMeme() {
        var memeImg = document.getElementById("meme");
        var random = Math.floor(1 + Math.random() * 10);
        memeImg.setAttribute("src", "../resources/memes/meme" + random + ".jpg");
    }
}());