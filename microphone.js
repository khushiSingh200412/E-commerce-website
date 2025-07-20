recognition.onresult = function (event) {
    const transcript = event.results[0][0].transcript.toLowerCase();
    console.log('You said: ', transcript);

    // You can add logic here to match the recognized speech with your items
    // For simplicity, let's log the result to the console
    console.log('Matching with your items...');

    // You can perform actions based on the recognized speech
    // For example, navigate to a specific page or trigger a search
    if (transcript.includes('cart')) {
        window.location.href = 'cart.html';
    } else if (transcript.includes('women')) {
        window.location.href = 'women.html';
    } else {
        // Handle other recognized commands or trigger a search, etc.
    }
};

// Function to dynamically toggle the button's appearance based on recognition state
function toggleMicButton(isRecognizing) {
    const micButton = document.getElementById('voiceButton');
    micButton.classList.toggle('active', isRecognizing);
}

// Function to start voice recognition
function startVoiceRecognition() {
    recognition.start();
    toggleMicButton(true);
    console.log('Voice recognition started.');
}

// Function to stop voice recognition
function stopVoiceRecognition() {
    recognition.stop();
    toggleMicButton(false);
    console.log('Voice recognition stopped.');
}