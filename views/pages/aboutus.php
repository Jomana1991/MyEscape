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
/*                padding-bottom: 35px;*/


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
                padding-bottom: 20px;
                font: 72px 'Sacramento', cursive;
            }

            .avatar{
                width:200px;
                height:200px;
                border-radius: 50%;
            }

            .flip-card {
                background-color: transparent;
                width: 200px;
                height: 200px;
                perspective: 1000px; /* Remove this if you don't want the 3D effect */
                margin: 30px 70px 30px 70px;
/*                margin-bottom: 10px;*/
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
            }

/*                .flip-card-front, #flip-card-back {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    border-radius: 50%;
                    backface-visibility: hidden;
                }*/

                /* Style the front side (fallback if image is missing) */
/*                .flip-card-front {
                    background-color: #bbb;
                    color: black;
                }*/

                /* Style the back side */
/*                #flip-card-back {
                    background-color: dodgerblue;
                    color: white;
                    transform: rotateY(180deg);
                }*/
                #lastrow {
                    margin: 70px;
                }
                
                #button2 {
                text-align: center;
                width: 30%;
                border: none;
                background: #001D4A; 
                font-family: Roboto, sans-serif;
                font-weight: 300;
                font-size: 0.7em;
                color: white;
                border-radius: 5px;
                padding: 8px 8px 8px 8px;
            }

            
        </style>    

    </head>

    <body>

        <div class="bg-contact2" style="background-image: url('./img/share.jpg'); opacity: 0.7;">
            <div class="container-contact2">
                <div class="wrap-contact2">
                    <span class="contact2-form-title">

                        <b>About MyEscape</b>
                    </span>

                    <p style="text-align:justify">
                        We are<b> 'MyEscape'</b>, a global travel community created to inspire and connect travellers around the world.
                        We are obsessed with exploring the world, meeting new people and getting as lots as possible.
                        <br>
                        We hope this website gives you some inspiration, handy tips to go and chase your own adventures, and a place for you to report back to fellow travellers. 
                        <br>
                        <br>
                        <span style="color: chocolate;"><b>Travel is the best kind of education, so go out and discover yourself, even if it’s just outside your own doorstep!</b></span>
                    </p>

                    <br>
                    <h3 style="text-align:center; font: 40px 'Sacramento', cursive;">What can you get on this website?</h3> 
                    <p  style="line-height:1.6;text-align:justify"> 
                        <span class="fa fa-globe"></span> Browse the website for inspiration, advice, and memories
                        <br><span class="fa fa-globe"></span> Find particular blogs by geography, category, or keywords
                        <br><span class="fa fa-globe"></span> Register to become part of the ever-growing MyEscape community
                        <br><span class="fa fa-globe"></span> Share your own content and inspire even more people
                        <br><span class="fa fa-globe"></span> Incorporate your Instagram and Twitter feeds with your blog posts
                    </p>
                    <br>
                    <h3 style="text-align:center; font: 40px 'Sacramento', cursive; ">Meet the team</h3>
                    <center>
                        <div class="row marginRow">
                            <!--    <div class="col-sm-2 col-md-2"  >
                                </div>-->


                            <div class="col-xs-12 col-sm-6 col-md-6 text-center"  >
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front" style="background-color: #bbb;color: black;position: absolute;
                                        width: 100%;height: 100%;border-radius: 50%;backface-visibility: hidden;">
                                            <img src="/MyEscape/views/images/ash.jpg" class="avatar" alt="Ash">  
                                        </div>
                                        <div class="flip-card-back" style="background-color: #E88D67;color: white;transform: rotateY(180deg);position: absolute;
                                        width: 100%;height: 100%;border-radius: 50%;backface-visibility: hidden;">
                                            <h4>Ash</h4> 
                                            <p>Top 3 places: Iceland,<br>Egypt, East part of India  </p>
                                            <p>Travel tip: Wake up early to avoid crowds...And be flexible, don't overplan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center"  >
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front" style="background-color: #bbb;color: black;position: absolute;
                                        width: 100%;height: 100%;border-radius: 50%;backface-visibility: hidden;">
                                            <img src="/MyEscape/views/images/dhanu.jpg" class="avatar" alt="Dhanu"> 
                                        </div>
                                        <div class="flip-card-back" style="background-color: #E88D67;color: white;transform: rotateY(180deg);position: absolute;
                                        width: 100%;height: 100%;border-radius: 50%;backface-visibility: hidden;">
                                            <h4>Dhanu</h4> 
                                            <p>Top 3 places: <br>Spain,India,Caribbean</p> 
                                            <p>Travel tip: Don't stick to touristy places, explore local places and cuisine, you will be pleasantly surprised.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row marginRow">
                            <!--    <div class="col-sm-1  hidden-lg hidden-md">
                                </div>
                                <div class="col-sm-1 hidden-lg hidden-md" >
                                </div>-->
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center"  >
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front" style="background-color: #bbb;color: black;position: absolute;
                                        width: 100%;height: 100%;border-radius: 50%;backface-visibility: hidden;">
                                            <img src="/MyEscape/views/images/faith.jpg" class="avatar" alt="Faith">
                                        </div>
                                        <div class="flip-card-back" style="background-color: #E88D67;color: white;transform: rotateY(180deg);position: absolute;
                                        width: 100%;height: 100%;border-radius: 50%;backface-visibility: hidden;">
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
                                        <div class="flip-card-front" style="background-color: #bbb;color: black;position: absolute;
                                        width: 100%;height: 100%;border-radius: 50%;backface-visibility: hidden;">
                                            <img src="/MyEscape/views/images/jomana.jpg" class="avatar" alt="Jomana">
                                        </div>
                                        <div class="flip-card-back" style="background-color: #E88D67;color: white;transform: rotateY(180deg);position: absolute;
                                        width: 100%;height: 100%;border-radius: 50%;backface-visibility: hidden;">
                                            <h4>Jomana</h4> 
                                            <p>Top 3 places: Malta, Tobago, Turkey</p> 
                                            <p>Travel tip: Wherever you go, always make time to check the Mcdonald's dessert menu!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--    <div class="col-sm-2 col-md-2">
                            </div>-->

                    </center>

                   
                        <div class="col-xs-12 "  >    
                            <br>
                            
                            
                            <br>
                            <center>
                            <div id="button button2">
                                <h6 style="text-align: center">Want to know more?</h6>
                                <a href='?controller=user&action=contactus' style="color: #fff;background: #001D4A; text-align: center;
                width: 100%;border: none;background: #001D4A;font-family: Roboto, sans-serif;font-weight: 300;font-size: 20px;color: white;border-radius: 5px;padding: 8px 50px 8px 50px;"> Talk to us </a></div>
                        </div>
                    <br>
                    
                    </center>
                        <div class="col-sm-1"  >
                            
                </div>
            </div>
        </div>
            </div>
    </body></html>



