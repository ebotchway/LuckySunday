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
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito';
            }
            .button {
                background-color: #7f4caf;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                box-shadow: 6px 6px #998;
            }

            .button:hover {background-color: #5a3e8e}
            .button:active {
                background-color: #563e8e;
                box-shadow: 0 5px rgb(255, 90, 233);
                transform: translateY(4px);
            }
            .bubbly-button{
                font-family: 'Helvetica', 'Arial', sans-serif;
                display: inline-block;
                font-size: 1em;
                padding: 1em 2em;
                margin-top: 100px;
                margin-bottom: 60px;
                -webkit-appearance: none;
                appearance: none;
                background-color: $button-bg;
                color: $button-text-color;
                border-radius: 4px;
                border: none;
                cursor: pointer;
                position: relative;
                transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;
                box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);

                &:focus {
                    outline: 0;
                }

                &:before, &:after{
                    position: absolute;
                    content: '';
                    display: block;
                    width: 140%;
                    height: 100%;
                    left: -20%;
                    z-index: -1000;
                    transition: all ease-in-out 0.5s;
                    background-repeat: no-repeat;
                }

                &:before{
                    display: none;
                    top: -75%;
                    background-image:
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle,  transparent 20%, $button-bg 20%, transparent 30%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%);
                background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;
                //background-position: 0% 80%, -5% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 85% 30%;
                }

                &:after{
                    display: none;
                    bottom: -75%;
                    background-image:
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%),
                    radial-gradient(circle, $button-bg 20%, transparent 20%);
                background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;
                //background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
                }

                &:active{
                    transform: scale(0.9);
                    background-color: darken($button-bg, 5%);
                    box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);
                }

                &.animate{
                    &:before{
                    display: block;
                    animation: topBubbles ease-in-out 0.75s forwards;
                    }
                    &:after{
                    display: block;
                    animation: bottomBubbles ease-in-out 0.75s forwards;
                    }
                }
            }

            @keyframes topBubbles {
                0%{
                    background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;
                }
                    50% {
                    background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;}
                100% {
                    background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;
                background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;
                }
                }

                @keyframes bottomBubbles {
                0%{
                    background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;
                }
                50% {
                    background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;}
                100% {
                    background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;
                background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;
                }
            }
        </style>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{{ asset('js/app.js')}}"></script>
    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <p>Logo of Lucky Suday here</p>
                </div>

                <div class="mt-8 dark:bg-gray-800 overflow-hidden">
                    <div class="text-center">
                        <h1>Welcome to LuckySunday</h1>
                    </div>
                    <div class="text-center">
                        <input id="startButton" type="button" class="button bubbly-button" value="CHOOSE A PLAYER" onclick="showPlayer()">
                    </div>
                    <div id="myDIV" style="display: none">
                        <div>
                            @foreach($player as $players)
                            <h4 id="headerNames">{{$players->fullname}} from {{$players->location}} is our player for next week</h4>
                            @endforeach
                        </div>
                        <div>
                            <div class="button" id="stopButton">stop</div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center"></div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        <p>LuckySunday v {{$_ENV['APP_VERSION']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        function showPlayer() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            $("#startButton").attr("disabled","disabled").css('opacity',0.3);
        }

        var animateButton = function(e) {
        e.preventDefault;
        //reset animation
        e.target.classList.remove('animate');
        e.target.classList.add('animate');
        setTimeout(function(){
            e.target.classList.remove('animate');
        },700);
        };

        var bubblyButtons = document.getElementsByClassName("bubbly-button");

        for (var i = 0; i < bubblyButtons.length; i++) {
        bubblyButtons[i].addEventListener('click', animateButton, false);
        }
    </script>
</html>
