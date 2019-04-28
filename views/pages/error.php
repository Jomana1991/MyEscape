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
                padding: 10px;



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

                font-size: 50px;
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

                        Oops!
                    </span>
                    <p>
                        We can't seem to find the page you're looking for. Please try again later.

                        <br>
                    </p>
                    <p>
                        If the error persists, please contact us by filling <a href='?controller=user&action=contactus'>this</a> and we investigate further.                      
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </body></html>
