
<?php 
    #session_start();//removed as now in layout
    if (!empty($_SESSION['username'])){
        echo '<p>Hi '.$_SESSION['username'].' , you are still logged in - want to visit your '
                . "<a href='?controller=blog&action=create'>profile page </a>?</p>";
    }
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

            <style>
                @import url('https://fonts.googleapis.com/css?family=Courgette');
                @import url('https://fonts.googleapis.com/css?family=Oswald');

                .fader {
                    position: absolute;
                    height: 100%;
                    width:100%;
                    left: 0;

                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: 100%;
                    opacity: 0.35;
                }

                .landing-text {
                    margin-top: 100px;
                    text-align: center;
                    vertical-align: central;
                    position: absolute;
                    left: 400px;
                    color: #001d4a;
                    font-family: 'Oswald', sans-serif;
                }

                .landing-text h1{
                    font-size: 500%;
                    font-weight: 700;

                }

                .inspiration {
                    height: 100%;
                    width:100%;
                    background: cover;
                    background-color: #f6f4d2;
                    position: absolute;
                    margin-top: 650px;
                    left: 0;
                }

                #changeText {
                    font-size: 500%;
                    font-weight:700; 
                    text-align: center;
                    vertical-align:middle;
                    font-family: 'Courgette', cursive; 
                    margin-top: 300px;
                }

                .button {
                    background-color: #e88d67;
                    border: none;
                    color: #ffffff;
                    outline: none;
                    padding: 15px 40px 15px;
                    position: absolute;
                    margin-top: 300px;
                    left: 670px;
                    font-family: 'Oswald', sans-serif;
                    font-size: 22px;
                }
                .button:before,
                .button:after {
                    border: 0 solid transparent;
                    transition: all 0.25s;
                    content: '';
                    height: 24px;
                    position: absolute;
                    width: 24px;
                }
                .button:before {
                    border-top: 2px solid #e88d67;
                    left: 0px;
                    top: -5px;
                }
                .button:after {
                    border-bottom: 2px solid #e88d67;
                    bottom: -5px;
                    right: 0px;
                }
                .button:hover {
                    background-color: #e88d67;
                }
                .button:hover:before,
                .button:hover:after {
                    height: 100%;
                    width: 100%;
                }

                span.b {
                    display: inline-block;
                    width: 400px;
                    height: 400px;
                    padding: 50px;
                    margin-left: 75px;
                    margin-top: 600px;
                    background-color: #e88d67; 
                    font-size: 30px;
                    font-family: 'Oswald', sans-serif;
                    text-align:  center;
                    position: absolute;

                }

                span.a {
                    display: inline-block;
                    width: 400px;
                    height: 400px;
                    padding: 50px;
                    margin-left: 930px;
                    margin-top: 600px;
                    background-color: #e88d67; 
                    font-size: 30px;
                    font-family: 'Oswald', sans-serif;
                    text-align:  center;
                    position: absolute;

                }
                span.c {
                    display: inline-block;
                    width: 300px;
                    height: 300px;
                    padding: 50px;
                    margin-left: 560px;
                    margin-top: 650px;
                    background-color: #e88d67; 
                    font-size: 30px;
                    font-family: 'Courgette', cursive; 
                    text-align:  center;
                    position: absolute;

                }
                /*html, body {
                  background: #333;
                  height: 100%;
                  overflow: hidden;
                  text-align: center;
                }*/

                .search-wrapper {
                    height: 60px;
                    margin-top: 490px;
                    margin-left: 970px;
                    position: absolute;
                    top: 50%;
                    transform: translateY(-40%);
                    width: 320px;
                    text-align: center;

                }

                .search-wrapper a {
                    all: unset                    
                }
                
                .aboutus-wrapper a {
                    all: unset                    
                }

                .shape {
                    fill: transparent;
                    stroke-dasharray: 140 540;
                    stroke-dashoffset: -474;
                    stroke-width: 8px;
                    stroke: #fff;
                }

                .text {
                    color: #fff;
                    font-family: 'Roboto Condensed';
                    font-size: 22px;
                    letter-spacing: 8px;
                    line-height: 32px;
                    position: relative;
                    top: -48px;
                }

                @keyframes draw {
                    0% {
                        stroke-dasharray: 140 540;
                        stroke-dashoffset: -474;
                        stroke-width: 8px;
                    }
                    100% {
                        stroke-dasharray: 760;
                        stroke-dashoffset: 0;
                        stroke-width: 2px;
                    }
                }

                .aboutus-wrapper:hover .shape,  .search-wrapper:hover .shape {
                    -webkit-animation: 0.5s draw linear forwards;
                    animation: 0.5s draw linear forwards;
                }

                .aboutus-wrapper {
                    height: 60px;
                    margin-top: 490px;
                    margin-left: 115px;
                    position: absolute;
                    top: 50%;
                    transform: translateY(-40%);
                    width: 320px;
                    text-align: center;
                }

             
            </style>
    </head>
    <body style="background-color: #fff">
        <header>

        </header>
        <main role="main">
        <div class="fader">

        </div>
        <div>

            <div class="landing-text">
                <h1> TRAVEL . EXPLORE . SHARE </h1>


                <h2>Register below to share your travel experiences</h2> 
            </div> 
            <div class="button-border"> <a class="button" href='?controller=user&action=register'>Register</a></div>

        </div>
            <div>
        <span class="b">Who are we?</span>
        <span class="a">Search our Blogs</span>

        <span class="c">Travel quote of the day</span>
            </div>
        <div class="search-wrapper">
            <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                <rect class="shape" height="60" width="320" />
            </svg>
            <div class="text">  <a href='index.php?controller=blog&action=search'>Search</a></div>
        </div>

        <div class="aboutus-wrapper">
            <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                <rect class="shape" height="60" width="320" />
            </svg>
            <div class="text"> <a href='index.php?controller=blog&action=aboutus'>About Us</a></div>
        </div>
        </main>
        <script>


            $(document).ready(function () {

                var count = 0;
                var images = ["img/share.jpg", "img/desert.jpg", "img/forest1.jpg", "img/baloons2.jpg", "img/airplane.jpg", "img/sea.jpg"];
                var image = $(".fader");

                image.css("background-image", "url(" + images[count++] + ")");

                setInterval(function () {
                    image.fadeOut(500, function () {
                        image.css("background-image", "url(" + images[count++] + ")");
                        image.fadeIn(500);
                    });
                    if (count == images.length)
                    {
                        count = 0;
                    }
                }, 5000);

            });

            $(document).ready(function () {
                $(".c").hover(function () {
                    $(this).toggleClass("highLight");
                    $(this).html("'We travel not to escape life, but for life not to escape us' - Anonymous");
                }
                , function () {
                    $(this).toggleClass("highLight");
                    $(this).html("Travel quote of the day");
                });
            })


//
//            var text = ["Travel the world", "Explore and discover new places", "Share your adventures on MyEscape"];
//            var counter = 0;
//            var elem = document.getElementById("changeText");
//            var inst = setInterval(change, 4000);
//
//            function change() {
//                elem.innerHTML = text[counter];
//                counter++;
//                if (counter >= text.length) {
//                    counter = 0;
//                    // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
//                }
//            }

//            $(document).ready(function () {
//                $(".btn-toggle-nav").click(function () {
//                    $(".nav-sidebar").toggle(1000);
//
//                });
//
//            });

        </script>

    </body>


</html>