document.addEventListener("DOMContentLoaded", function () {
    console.log("Countdown script started");

    // Set your desired launch date
    const launchDate = new Date("2025-07-31T00:00:00").getTime();

    // Check if launchDate is valid
    if (isNaN(launchDate)) {
        console.error("Invalid Launch Date!");
        return;
    }

    console.log("Launch Date: ", launchDate);

    const countdownTimer = setInterval(function () {
        const now = new Date().getTime();
        const timeLeft = launchDate - now;

        console.log("Time Left: ", timeLeft);

        if (timeLeft <= 0) {
            clearInterval(countdownTimer);
            document.getElementById("countdown-timer").innerHTML = "We are live!";
        } else {
            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            console.log(`${days}d ${hours}h ${minutes}m ${seconds}s`);

            document.getElementById("countdown-timer").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        }
    }, 1000);
});
