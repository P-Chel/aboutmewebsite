<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        #countdown {
            font-size: 2em;
            font-weight: bold;
            color: #ff0000;
        }
    </style>
</head>
<body>
    <h1>Countdown Timer</h1>
    <div id="countdown"></div>

    <script>
        // Set the target date
        const targetDate = new Date("March 1, 2025 00:00:00").getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const timeLeft = targetDate - now;

            if (timeLeft <= 0) {
                document.getElementById("countdown").innerHTML = "Time's up!";
                clearInterval(timerInterval);
                return;
            }

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML =
                `${days}d ${hours}h ${minutes}m ${seconds}s`;
        }

        // Update the countdown every second
        const timerInterval = setInterval(updateCountdown, 1000);

        // Initialize countdown immediately
        updateCountdown();
    </script>
</body>
</html>