<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <title></title>

        <style>
            @import url('https://fonts.googleapis.com/css?family=Oswald');
                        @import url('https://fonts.googleapis.com/css?family=Courgette');


html, body {
  
  height: 100%;

  text-align: center;
}

            header {
                font-family: 'Oswald', sans-serif;
                color: #001D4A;
            }

            header.masthead {
                position: relative;

                padding-top: 8rem;
                padding-bottom: 8rem;


            }


            header.masthead .overlay {
                position: absolute;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;  
                opacity: 0.3;
                background-repeat: no-repeat;
                background-size: cover;
                color: #001d4a !important;
                


            }

            header.masthead h1 {
                font-size: 60px;
                   letter-spacing: 5px;
            }

            @media (min-width: 768px) {
                header.masthead {
                    padding-top: 12rem;
                    padding-bottom: 12rem;
                }
                header.masthead h1 {
                    font-size: 3rem;
                }
            }

            .refined {
/*                padding: 100px;*/
                background-color: #e88d67; 
/*                width: 100%;*/
margin: 0 auto;
                font-family: 'Oswald', sans-serif;
                   

            }
            .features-icons {
                padding-top: 2rem;
                padding-bottom: 2rem;
                background-color: #e88d67; 

            }

            .features-icons .features-icons-item {
                max-width: 20rem;
            }

            .features-icons .features-icons-item .features-icons-icon {
                height: 7rem;
            }

            .features-icons .features-icons-item .features-icons-icon i {
                font-size: 4.5rem;
            }

            .features-icons .features-icons-item:hover .features-icons-icon i {
                font-size: 5rem;
            }

            .svg-wrapper {
                height: 60px;
                margin: 0 auto;
                position: relative;
                top: 50%;
                transform: translateY(-50%);
                width: 320px;
            }
            .svg-wrapper a {
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
            .quote {
                font-family: 'Courgette', cursive; 
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

            .svg-wrapper:hover .shape {
                -webkit-animation: 0.5s draw linear forwards;
                animation: 0.5s draw linear forwards;
            }


        </style>
    </head>



    <body>


        <header class="masthead text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h1 class="mb-5">Travel . Explore . Share</h1>
                    </div>

                </div>
            </div>
        </header>

        <!-- Icons Grid -->
        <section class="features-icons text-center">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4">
                        <div class="refined"> 
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">

                                <i class="icon-screen-desktop m-auto text-primary"></i>

                                <h3>Read Blogs</h3>
                                <div class="features-icons-icon d-flex">
           
               <div class="svg-wrapper">
                                    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="shape" height="60" width="320" />
                                    </svg>
                                    <div class="text"><a href='index.php?controller=blog&action=readAll'>All Blogs</a></div>
                                </div>
            </div>
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="refined"> 
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">

                                <i class="icon-layers m-auto text-primary"></i>

                                <h3 class="quote" >Quote of the day</h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="refined"> 
                            <div class="features-icons-item mx-auto mb-0 mb-lg-3">

                                <i class="icon-check m-auto text-primary"></i>

                                <h3>Search Blogs</h3>
                                  <div class="features-icons-icon d-flex">
                                <div class="svg-wrapper">
                                    <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="shape" height="60" width="320" />
                                    </svg>
                                    <div class="text"><a href='index.php?controller=blog&action=search'>Search</a></div>
                                </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>


    <script>
        $(document).ready(function () {

            var count = 0;
            var images = ["img/share.jpg", "img/desert.jpg", "img/forest1.jpg", "img/baloons2.jpg", "img/airplane.jpg", "img/sea.jpg"];
            var image = $(".overlay");

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
                $(".quote").hover(function () {
                    $(this).toggleClass("highLight");
                    $(this).html("'We travel not to escape life, but for life not to escape us' - Anonymous");
                }
                , function () {
                    $(this).toggleClass("highLight");
                    $(this).html("Travel quote of the day");
                });
            })

    </script>

</body>
</html>