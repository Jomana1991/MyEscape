<!--<link href="css/styles-general.css" rel="stylesheet" type="text/css"/>-->

<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>About us</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <style>

            /*//////////////////////////////////////////////////////////////////
                     [ Contact 2 ]*/
            .bg-contact2 {
                width: 100%;  
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                color: #001D4A ;
            }

            .container-contact2 {
                width: 100%;  
                min-height: 100vh;
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                padding: 35px;



            }

            .wrap-contact2 {
                width: 790px;
                background: #fff;
                border-radius: 10px;
                overflow: hidden;
                padding: 72px 55px 90px 55px;

            }


            /*------------------------------------------------------------------
            [  ]*/

            .contact2-form {
                width: 100%;
            }

            .contact2-form-title {
                display: block;

                font-size: 39px;
                color: #001D4A ;
                line-height: 1.2;
                text-align: center;
                padding-bottom: 90px;
            }

            .avatar{
                width:160px;
                height:160px;
                border-radius: 50%;
            }

            .flip-card {
                background-color: transparent;
                width: 160px;
                height: 160px;
                perspective: 1000px; /* Remove this if you don't want the 3D effect */
                margin: 70px;
            }

            /* This container is needed to position the front and back side */
            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                text-align: center;
                transition: transform 0.8s;
                transform-style: preserve-3d;
            }

            /* Do an horizontal flip when you move the mouse over the flip box container */
            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);

                .flip-card-front, #flip-card-back {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    border-radius: 50%;
                    backface-visibility: hidden;
                }

                /* Style the front side (fallback if image is missing) */
                .flip-card-front {
                    background-color: #bbb;
                    color: black;
                }

                /* Style the back side */
                #flip-card-back {
                    background-color: dodgerblue;
                    color: white;
                    transform: rotateY(180deg);
                }
                #lastrow {
                    margin: 70px;
                }

            }
        </style>    

    </head>

    <body>

        <div class="bg-contact2" style="background-image: url('./img/share.jpg'); opacity: 0.7;">
            <div class="container-contact2">
                <div class="wrap-contact2">
                    <span class="contact2-form-title">

                        About MyEscape
                    </span>

                    <p>
                        We are 'MyEscape', a global travel community created to inspire and connect travellers around the world.
                        We are obsessed with exploring the world, meeting new people and getting as lost as possible.
                        <br>
                        We hope this website gives you some inspiration, handy tips to go and chase your own adventures, and a place for you to report back to fellow travellers.
                        <br>
                        <br>
                        <span style="color: #E88D67 ;">Travel is the best kind of education so go out and discover yourself, even if it’s just outside your own doorstep!</span>
                    </p>


                    <h3>What can I do on this website?</h3> 
                    <p style="line-height:1.6;"> 
                        <span class="fa fa-globe"></span> Browse the website for inspiration, advice, and memories
                        <br><span class="fa fa-globe"></span> Find particular blogs by geography, category, or keywords
                        <br><span class="fa fa-globe"></span> Register to become part of the ever-growing MyEscape community
                        <br><span class="fa fa-globe"></span> Share your own content and inspire even more people
                        <br><span class="fa fa-globe"></span> Incorporate your Instagram and Twitter feeds with your blog posts
                    </p>
                    <br>
                    <h3>Meet the team</h3>
                    <center>
                        <div class="row">
                            <!--    <div class="col-sm-2 col-md-2"  >
                                </div>-->


                            <div class="col-xs-12 col-sm-6 col-md-6 text-center"  >
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="/MyEscape/views/images/ash.jpg" class="avatar" alt="Ash">  
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Ash</h4> 
                                            <p>Top 3 places: x,y,z</p>
                                            <p>Travel tip: Insert text here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center"  >
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="/MyEscape/views/images/dhanu.jpg" class="avatar" alt="Dhanu"> 
                                        </div>
                                        <div id="flip-card-back">
                                            <h4>Dhanu</h4> 
                                            <p>Top 3 places: x,y,z</p> 
                                            <p>Travel tip: Insert text here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--    <div class="col-sm-1  hidden-lg hidden-md">
                                </div>
                                <div class="col-sm-1 hidden-lg hidden-md" >
                                </div>-->
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center"  >
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="/MyEscape/views/images/faith.jpg" class="avatar" alt="Faith">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Faith</h4> 
                                            <p>Top 3 places: <br>Tanzania, Cuba, Brazil</p>
                                            <p>Travel tip: Never turn down a clean toilet<br>opportunity!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 text-center"  >
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="/MyEscape/views/images/jomana.jpg" class="avatar" alt="Jomana">
                                        </div>
                                        <div class="flip-card-back">
                                            <h4>Jomana</h4> 
                                            <p>Top 3 places: Tobago, Malta, Turkey</p> 
                                            <p>Travel tip: Wherever you go, always make time to check the Mcdonald's desert menu!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--    <div class="col-sm-2 col-md-2">
                            </div>-->

                    </center>

                   
                        <div class="col-xs-12 col-sm-10"  >    
                            <br>
                            <br>
                            <br>
                            <br>
                            <h3>Get in touch</h3> 
                            <p> Pop up contact us form here
                                mini navbar at top which takes to lower pages in site?
                            </p>
                        </div>
                        <div class="col-sm-1"  >
                       


                </div>
            </div>
        </div>
            </div>
    </body></html>



