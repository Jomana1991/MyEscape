<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                    left: 300px;
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
                    margin-top: 400px;
                    left: 600px;
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
                    width: 300px;
                    height: 300px;
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
                    width: 300px;
                    height: 300px;
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
                    width: 250px;
                    height: 200px;
                    padding: 50px;
                    margin-left: 530px;
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
                    margin-left: 980px;
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
                    margin-left: 110px;
                    position: absolute;
                    top: 50%;
                    transform: translateY(-40%);
                    width: 320px;
                    text-align: center;
                }

                /*            .nav-main {
                                position: fixed;
                                top: 0;
                                left:0;
                                width:100%;
                                height:60px;
                                background-color: #EABE7C;
                                float: left;
                                display: flex;
                                flex-wrap: wrap;
                                z-index: 1000;
                
                            }
                
                            .nav-main h1 {
                                padding-left:600px;
                                color: #28536B;
                                font-family: brush script MT;
                                font-size: 60px;
                                float:top;
                            }
                
                            .btn-toggle-nav {
                                width:60px;
                                height:100%;
                                background-color: #EABE7C;
                                background-image: url(img/menu.png);
                                background-repeat: no-repeat;
                                background-size: 50%;
                                background-position: center;
                                cursor: pointer;
                            }
                
                            .btn-toggle-nav:hover {
                                opacity: 0.3;
                            }*/

                /*            .nav-main ul {
                                display: flex;
                                flex-wrap: wrap;
                                padding-left:1200px;
                
                            }
                
                            .nav-main ul li {
                                list-style: none;
                                line-height: 35px;
                            }
                
                            .nav-main ul li a {
                                display:block;
                                height:100%;
                                padding: 0 10px;
                                text-decoration:none;
                                color: #28536B;
                                font-family: arial;
                                font-size:16px;*/
                /*
                            }
                
                            .nav-sidebar {
                                position: fixed;
                                left:0;
                                bottom:0;
                                width: 0;
                                height: 620px;
                                padding: 0 0px;
                                background-color: #EABE7C;  
                                z-index:1000;
                                transition: all 0.3s ease-in-out;
                            }
                
                            .nav-sidebar ul {
                                padding-top: 15px;
                                overflow:hidden;
                                visibility: hidden;
                
                
                            }
                
                            .nav-sidebar ul li {
                                line-height:60px;
                                line-style:none;
                
                            }
                
                            .nav-sidebar ul li a {
                                display: block;
                                height:60px;
                                padding: 0 10px;
                                text-decoration: none;
                                color: #28536B;
                                font-family: arial;
                                font-size: 16px;
                                white-space: nowrap;
                                transition: all 0.3s ease-in-out;
                            }*/

            </style>
    </head>
    <body>
        <header>

        </header>

        <div class="fader">

        </div>
        <div>

            <div class="landing-text">
                <h1> TRAVEL . EXPLORE . SHARE </h1>


                <h2>Register below to share your travel experiences</h2> 
            </div> 
            <div class="button-border"> <a class="button" href='?controller=user&action=register'>Register</a></div>




        </div>
        <span class="b">Who are we?</span>
        <span class="a">Search our Blogs</span>

        <span class="c">Travel quote of the day</span>

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


//            let toggleNavStatus = false;
//
//            let toggleNav = function () {
//                let getSidebar = document.querySelector(".nav-sidebar");
//                let getSidebarUl = document.querySelector(".nav-sidebar ul");
//                let getSidebarLinks = document.querySelectorAll(".nav-sidebar a");
//
//                if (toggleNavStatus === false) {
//                    getSidebarUl.style.visibility = "visible";
//                    getSidebar.style.width = "200px";
//
//                    let arrayLength = getSidebarLinks.length;
//                    for (let i = 0; i < arrayLength; i++) {
//                        getSidebarLinks[i].style.opacity = "1";
//                    }
//
//                    toggleNavStatus = true;
//
//                } else if (toggleNavStatus === true) {
//                    getSidebar.style.width = "0px";
//
//                    let arrayLength = getSidebarLinks.length;
//                    for (let i = 0; i < arrayLength; i++) {
//                        getSidebarLinks[i].style.opacity = "0";
//
//
//                    }
//                    getSidebarUl.style.visibility = "hidden";
//
//                    toggleNavStatus = false;
//
//                }
//
//            };
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