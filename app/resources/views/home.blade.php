<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lucky Sunday</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
	            background: #333;
            }

            h1#headerNames {
                margin-top: 10%;
                color: #fff;
                font-family: Georgia, serif;
                font-size: 150px;
                text-align: center;
                cursor: pointer;
            }

            .button {
                width: 150px;
                margin: auto;
                padding: 20px;
                background: #1fa91f;
                border: 3px solid #fff;
                border-radius: 10px;
                color: #fff;
                font-family: Arial, sans-serif;
                font-size: 30px;
                font-weight: bold;
                text-align: center;
                text-transform: uppercase;
                letter-spacing: 2px;
                display: block;
                cursor: pointer;
            }

            #stopButton {
                background: #ff0000;
                display: none;
            }

            #timerWrapper {
                margin: 50px 0;
                color: #fff;
                font-family: Arial, sans-serif;
                font-size: 50px;
                text-align: center;
                opacity: 0;
                transition: opacity 1s;
            }
            #timerWrapper.visible {
                opacity: 1;
            }

            #timesUp {
                padding-top: 20%;
                background-color: red;
                color: #fff;
                font-family: Arial, sans-serif;
                font-size: 100px;
                font-weight: bold;
                text-transform: uppercase;
                text-align: center;
                position: fixed;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                display: none;
                a {
                    margin: 100px auto;
                    font-size: 15px;
                    position: absolute;
                    bottom: 50px;
                    left: 0;
                    right: 0;
                    display: none;
                }
            }
            #timesUp.backgroundRed {
                background-color: #333;
            }

            @media only screen and (max-width: 600px) {
                h1 {
                    font-size: 50px;
                }
            }
        </style>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>

    <body class="antialiased">
        <div class="text-center">
            <h1 style="color: #fff;">Who gets to play next week?</h1>
        </div>
        <div>
            <h1 id="headerNames">?</h1>
            <div class="button" id="startButton">start</div>
            <div class="button" id="stopButton">stop</div>
        </div>
        <div id="timerWrapper">Time left: <span id="timer"></span></div>
        <div id="timesUp">
            Time's Up!
            <a href="https://codepen.io/screener13/pen/PJJLLo">RESET</a>
        </div>
    </body>

    <script>
        "use strict";

        // get data from page
        var data = {!! json_encode($players, JSON_HEX_TAG) !!};
        console.log(data);

        // loop through data
        const namesList = new Array();
        for (const [key, value] of Object.entries(data)) {
            namesList.push(value.fullname)
        }
        console.log(namesList);

        // Change to false if you don't want a timer
        const showTimer = false;

        // Set timer countdown time here in minutes : seconds format
        const time = 7 + ":" + 59;

        // Default variables
        let i = 0;
        let x = 0;
        let intervalHandle = null;
        const startButton = document.getElementById('startButton');
        const stopButton = document.getElementById('stopButton');
        const headerOne = document.getElementById('headerNames');
        const timesUp = document.getElementById('timesUp');
        const timerWrapper = document.getElementById('timerWrapper');
        const timer = document.getElementById('timer');

        // Optional countdown timer
        // Add zero in front of numbers < 10
        function checkSecond(sec) {
        if (sec < 10 && sec >= 0) {
                sec = "0" + sec;
            }
        if (sec < 0) {
                sec = "59";
            }
        return sec;
        }

        const startTimer = function() {
        const presentTime = timer.innerHTML;
        const timeArray = presentTime.split(/[:]+/);
        let m = timeArray[0];
        let s = checkSecond((timeArray[1] - 1));

        if (s==59) {
                m = m-1;
            }
        if (m < 0) {
                timesUp.style.display = "block";
            }

        timer.innerHTML = m + ":" + s;

            setTimeout(startTimer, 1000);
        }

        // Start or stop the name shuffle on button click
        startButton.addEventListener('click', function() {
            this.style.display = "none";
            stopButton.style.display = "block";
            intervalHandle = setInterval(function () {
                headerNames.textContent = namesList[i++ % namesList.length];
            }, 50);
            if (showTimer===true) {
                timerWrapper.classList.remove('visible');
            }
        });
        stopButton.addEventListener('click', function() {
            this.style.display = "none";
            startButton.style.display = "block";
            clearInterval(intervalHandle);
            timer.innerHTML = time;
            if (showTimer===true) {
                timerWrapper.classList.add('visible');
            }
            startTimer();
        });

        // Allow use of spacebar to start/stop name shuffle
        document.body.onkeyup = function(e) {
            if (e.keyCode == 32) {
                if (x%2===0) {
                    startButton.style.display = "none";
                    stopButton.style.display = "block";
                    intervalHandle = setInterval(function () {
                        headerNames.textContent = namesList[i++ % namesList.length];
                    }, 50);
                    if (showTimer===true) {
                        timerWrapper.classList.remove('visible');
                    }
                } else {
                    startButton.style.display = "block";
                    stopButton.style.display = "none";
                    clearInterval(intervalHandle);
                    timer.innerHTML = time;
                    if (showTimer===true) {
                        timerWrapper.classList.add('visible');
                    }
                    startTimer();
                }
                x++;
            }
        }

        // Blinking warning
        var backgroundInterval = setInterval(function() {
        timesUp.classList.toggle("backgroundRed");
        }, 1000)
    </script>
</html>
