function revealMessage() {
    var messageBox = document.getElementById("message-box");
    var revealButton = document.getElementById("reveal-button");

    // Reveal the message with fade-in effect
    messageBox.style.display = "block";
    setTimeout(function() {
        messageBox.style.opacity = 1;
    }, 50);

    // Hide the button after revealing the message
    revealButton.style.display = "none";
}
