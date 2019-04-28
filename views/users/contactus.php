
<html lang="en"><head>
        <title>Contact V2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Oswald');
            @font-face {
                font-family: Poppins-Regular;
                src: url('../fonts/poppins/Poppins-Regular.ttf'); 
            }

            @font-face {
                font-family: Poppins-Medium;
                src: url('../fonts/poppins/Poppins-Medium.ttf'); 
            }

            @font-face {
                font-family: Poppins-Bold;
                src: url('../fonts/poppins/Poppins-Bold.ttf'); 
            }



            /*//////////////////////////////////////////////////////////////////
            [ RESTYLE TAG ]*/
            
            * {
                margin: 0px; 
                padding: 0px; 
                box-sizing: border-box;
            }

            body, html {
                height: 100%;

            }

            /*---------------------------------------------*/
            a {

                font-size: 14px;
                line-height: 1.7;
                color: #666666;
                margin: 0px;
                transition: all 0.4s;
                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
            }

            a:focus {
                outline: none !important;
            }

            a:hover {
                text-decoration: none;
                color: #57b846;
            }

            /*---------------------------------------------*/
            h1,h2,h3,h4,h5,h6 {
                margin: 0px;
            }

            p {
                font-family: 'Oswald', sans-serif;
                font-size: 20px;
                line-height: 1.7;
                color: #666666;
                margin: 0px;
            }

            ul, li {
                margin: 0px;
                list-style-type: none;
            }


            /*---------------------------------------------*/
            input {
                outline: none;
                border: none;
            }

            textarea {
                outline: none;
                border: none;
            }

            textarea:focus, input:focus {
                border-color: transparent !important;
            }

            input:focus::-webkit-input-placeholder { color:transparent; }
            input:focus:-moz-placeholder { color:transparent; }
            input:focus::-moz-placeholder { color:transparent; }
            input:focus:-ms-input-placeholder { color:transparent; }

            textarea:focus::-webkit-input-placeholder { color:transparent; }
            textarea:focus:-moz-placeholder { color:transparent; }
            textarea:focus::-moz-placeholder { color:transparent; }
            textarea:focus:-ms-input-placeholder { color:transparent; }

            input::-webkit-input-placeholder { color: #999999; }
            input:-moz-placeholder { color: #999999; }
            input::-moz-placeholder { color: #999999; }
            input:-ms-input-placeholder { color: #999999; }

            textarea::-webkit-input-placeholder { color: #999999; }
            textarea:-moz-placeholder { color: #999999; }
            textarea::-moz-placeholder { color: #999999; }
            textarea:-ms-input-placeholder { color: #999999; }

            /*---------------------------------------------*/
            button {
                outline: none !important;
                border: none;
                background: transparent;
            }

            button:hover {
                cursor: pointer;
            }

            iframe {
                border: none !important;
            }





            /*//////////////////////////////////////////////////////////////////
            [ Contact 2 ]*/
            .bg-contact2 {
                width: 100%;  
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
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
                font: 72px 'Sacramento', cursive;
                font-size: 39px;
                color: #001D4A ;
                line-height: 1.2;
                text-align: center;
                padding-bottom: 90px;
            }



            /*------------------------------------------------------------------
            [  ]*/

            .wrap-input2 {
                width: 100%;
                position: relative;
                border-bottom: 2px solid #adadad;
                margin-bottom: 37px;
            }

            .input2 {
                display: block;
                width: 100%;

                font-family: 'Oswald', sans-serif;
                font-size: 25px;
                color: #001D4A ;
                line-height: 1.2;
            }

            .focus-input2 {
                position: absolute;
                display: block;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                pointer-events: none;
            }

            .focus-input2::before {
                content: "";
                display: block;
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 0;
                height: 2px;

                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                transition: all 0.4s;

                background: rgba(219,21,99,1);
                background: -webkit-linear-gradient(45deg, #d5007d, #e53935);
                background: -o-linear-gradient(45deg, #d5007d, #e53935);
                background: -moz-linear-gradient(45deg, #d5007d, #e53935);
                background: linear-gradient(45deg, #d5007d, #e53935);
            }

            .focus-input2::after {
                content: attr(data-placeholder);
                display: block;
                width: 100%;
                position: absolute;
                top: 0px;
                left: 0;

                font-family: Poppins-Regular;
                font-size: 13px;
                color: #999999;
                line-height: 1.2;

                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                transition: all 0.4s;
            }

            /*---------------------------------------------*/
            input.input2 {
                height: 45px;
            }

            input.input2 + .focus-input2::after {
                top: 16px;
                left: 0;
            }

            textarea.input2 {
                min-height: 115px;
                padding-top: 13px;
                padding-bottom: 13px;
            }

            textarea.input2 + .focus-input2::after {
                top: 16px;
                left: 0;
            }

            .input2:focus + .focus-input2::after {
                top: -13px;
            }

            .input2:focus + .focus-input2::before {
                width: 100%;
            }

            .has-val.input2 + .focus-input2::after {
                top: -13px;
            }

            .has-val.input2 + .focus-input2::before {
                width: 100%;
            }

            /*------------------------------------------------------------------
            [ Button ]*/
            .container-contact2-form-btn {
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding-top: 13px;

            }

            .wrap-contact2-form-btn {
                display: block;
                position: relative;
                z-index: 1;
                border-radius: 2px;
                width: auto;
                overflow: hidden;
                margin: 0 auto;
            }

            .contact2-form-bgbtn {
                position: absolute;
                z-index: -1;
                width: 300%;
                height: 100%;
                background: rgba(219,21,99,1);
                background: -webkit-linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);
                background: -o-linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);
                background: -moz-linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);
                background: linear-gradient(-135deg, #d5007d, #e53935, #d5007d, #e53935);
                top: 0;
                left: -100%;

                -webkit-transition: all 0.4s;
                -o-transition: all 0.4s;
                -moz-transition: all 0.4s;
                transition: all 0.4s;
            }

            .contact2-form-btn {
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0 20px;
                min-width: 244px;
                height: 50px;
                background-color: #E88D67;
                font-family: 'Oswald', sans-serif;
                font-size: 22px;
                color: #fff;
                line-height: 1.2;


            }

            .wrap-contact2-form-btn:hover .contact2-form-bgbtn {
                left: 0;
            }

            /*------------------------------------------------------------------
            [ Responsive ]*/

        </style>
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="bg-contact2" style="background-image: url('./img/share.jpg'); opacity: 0.7;">
            <div class="container-contact2">
                <div class="wrap-contact2">
                        <span class="contact2-form-title">
                         Contact Us
                        </span>
                        <form method="post" name="contact_form" action=" ">
                            <div class="wrap-input2 validate-input" >
                                <input class="input2" type="text" name="name" required>
                                <span class="focus-input2" data-placeholder="NAME"></span>
                            </div>

                            <div class="wrap-input2 validate-input" >
                                <input class="input2" type="text" name="email" required>
                                <span class="focus-input2" data-placeholder="EMAIL"></span>
                            </div>

                            <div class="wrap-input2 validate-input" >
                                <textarea class="input2" name="message" required></textarea>

                                <span class="focus-input2" data-placeholder="MESSAGE"></span>
                            </div>

                            <div class="container-contact2-form-btn">
                                <div class="wrap-contact2-form-btn">
                                    <div class="contact2-form-bgbtn"></div>
                                    <button  type="submit" value="Submit" class="contact2-form-btn">
                                        Submit
                                    </button>
                                    
                                   
                                </div>
                            </div>
                             </form>
                       
                </div>
            </div>
        </div>







    </body></html>

<!--        
    <div class="container-fluid">
        <div class="main">
           
                    <div class=" text-center col-md-10 col-md-offset-2">

                        <div id="orangefloat" >


                            <h2>Contact Us</h2>
                            <p  style = "align-content:center"> Do you have a question for us, feedback to give, or just want to say hi?</p>
                            <br>
                            <form method="post" name="contact_form" action="">
                                Your Name:* <input type="text" name="name" placeholder="Full Name" required>
                                <br><br>
                                Email Address:* <input type="email" name="email" placeholder="Email" required>
                                <br><br>
                                Message:* <textarea name="message" cols="40" rows="5" placeholder = "Type your message here!" required></textarea>
                                <br><br>
                                <input type="submit" value="Submit">
                            </form> 
        
    

                           
                               

                       
                    </div>
                </div>

            </div>

        </div>


    </body>
</html>
-->

