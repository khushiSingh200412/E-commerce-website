let userRating = 0;

function rate(stars) {
    // Reset all stars to empty
    for (let i = 1; i <= 5; i++) {
        const star = document.getElementsByClassName('star')[i - 1];
        star.classList.remove('active');
    }

    // Set the selected number of stars as active
    for (let i = 1; i <= stars; i++) {
        const star = document.getElementsByClassName('star')[i - 1];
        star.classList.add('active');
    }

    // Update the userRating variable
    userRating = stars;

    // You can send the userRating to the server or perform other actions as needed
    console.log('User rated:', userRating);
}
