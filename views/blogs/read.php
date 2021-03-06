<?php
//session_start();
$_SESSION ['blogID'] = $_GET ['blogID'];
?>
<html>
    <head>

        <title> </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!--        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
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

            h2{
                font-family: 'Sacramento', cursive;
                font-size: 50px;
            }

            .wrap-contact2 {
                width: 790px;
                background: #fff;
                border-radius: 10px;
                overflow: hidden;
                padding: 72px 55px 90px 55px;


            }
            
              span {
                display: block;
                font-family: 'Sacramento', cursive;
                font-size: 70px;
                color: chocolate;
                line-height: 1.2;
                text-align: center;

            }
            #viewCount {
               colour: #E88D67; 
            }
            
            .control-label{
                font: 16px 'Roboto', sans-serif;
            }
            
            #share-buttons img 
            {
                width: 35px; 
                padding: 5px;
                border: 0;
                box-shadow: 0;
                display: inline;
                
            }
        </style>
    </head>
    <body>
        <div class="bg-contact2" style="background-image: url('./img/share.jpg'); opacity: 0.7;">
            <div class="container-contact2">
                <div class="wrap-contact2" >



                    <div class="col-md-12" align="center">
                        <span><b><?php echo utf8_decode($blog->title) . "<br>"; ?></b></span> 
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-12"align="center">
                            <?php
                            $file = 'views/blogImages/' . $blog->title . "_" . $blog->username . '.jpeg';

                            if (file_exists($file)) {
                                $img = "<img src='$file' width='350' /><br><br>";
                                echo $img;
                            } else {
                                echo '';
                            }
                            ?>
                        </div>
                        <br>
                        <br>

                        <div class="row">
                            
                            <div class="col-md-12" align="justify">
                                <p>
                                    <?php echo utf8_decode($blog->content); ?>
                                </p>
                            </div>     
<!--                            <div class="col-md-12">
                            </div>-->
                        </div>

                    </div>    
                    <!--Attempting AJAX-->
                    <div class="row">
                        <div class="col-md-12" >
                        </div>
                        <div class="col-md-12" >

                            <a class="btn btn-default btn-sm"  id="thumb-button" onclick="addLikeCounter(<?php echo $blog->blogID; ?>)">
                                <span class="fa fa-thumbs-up" ></span> <span style="font: 16px 'Roboto';">Like</span>
                            </a>
                            <a class="btn btn-default btn-sm"  id="thumb-button" onclick="subtractLikeCounter(<?php echo $blog->blogID; ?>)">
                                <span class="fa fa-thumbs-down" ></span> <span style="font: 16px 'Roboto';">Dislike</span>
                            </a>

                            <br>
                            <p id="counter" class="badge" style="font: 16px 'Roboto';color: #E88D67; font-weight: bold;"></p>
                            <p id="viewCount"  style="font: 18px 'Roboto';color: chocolate;font-weight: bold; " align="right"> Blog Visitors : <?php echo $blog->viewcounter; ?> </p>
                        </div>
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                    <div id="share-buttons "style="text-align:center; font-size: 10px"><a href="https://www.facebook.com/sharer.php?u=https://frinmash.blogspot.com" target="_blank">
                                    <img src="https://4.bp.blogspot.com/-raFYZvIFUV0/UwNI2ek6i3I/AAAAAAAAGSA/zs-kwq0q58E/s1600/facebook.png" alt="Facebook" /></a> 
                                <a href="https://twitter.com/share?url=https://frinmash.blogspot.com&text=Simple Share Buttons" target="_blank">
                                    <img src="https://4.bp.blogspot.com/--ISQEurz3aE/UwNI4hDaQMI/AAAAAAAAGS4/ZAgmPiM9Xpk/s1600/twitter.png" alt="Twitter" /></a> 
                                 <a href="https://plus.google.com/share?url=https://frinmash.blogspot.com" target="_blank">
                                     <img src="https://2.bp.blogspot.com/-9ijXNtKTaSk/UwNI3ANT4MI/AAAAAAAAGSY/Tu4kE8x9SnI/s1600/google.png" alt="Google" /></a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://frinmash.blogspot.com" target="_blank">
                                    <img src="https://2.bp.blogspot.com/-3_cATk7Wlho/UwNI3eoTTLI/AAAAAAAAGSQ/Y8cpq6S-SeQ/s1600/linkedin.png" alt="LinkedIn" /></a>
                        </div>
                  

                    <div class="row">
                        <div class="col-lg-12"> </div>
                        <div class="col-lg-12">
                            <form class="form-horizontal" method="POST" action=" " >
                                <div>
                                    <label class="col-lg-6 control-label">Add Comment </label> 
                                    <br />
                                    <div class="col-lg-12">
                                        <textarea class="form-control" rows="2" cols="5" name="senderName" placeholder="Enter your name" required ></textarea>
                                        <br />
                                        <textarea class="form-control" rows="5" cols="10" name="Content" placeholder="Comment" required></textarea>
                                    </div>
                                </div>
                                <br />
                                <input type="submit" name="postcomment" value="Comment" class="btn btn-primary" style="background: #001D4A;border: none;">

                            </form>  

                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-lg-12"></div>
                        <div class="col-lg-12">
                            <h1> All comments</h1>
                            <?php foreach ($comments as $comment) { ?>
                                <p>    <?php echo $comment->Content; ?> </p>
                                <p> Posted by:   <?php echo $comment->senderName; ?> </p>
                                <hr>
                            <?php } ?>
                        </div> 
                    </div>
                    
                </div>
                    
            </div>

        </div>



        <script>
            function addLikeCounter(blogID) {
                var xhttp; //new variable
                xhttp = new XMLHttpRequest();//create XHR object
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {//when XHR object is ready
                        document.getElementById("counter").innerHTML = this.responseText;//how to deal with server response
                    }
                };//end of readystate change function

                xhttp.open("GET", "index.php?controller=blog&action=likeBlog&blogID=" + blogID, true);
                xhttp.send();
            }

            function subtractLikeCounter(blogID) {
                var xhttp; //new variable
                xhttp = new XMLHttpRequest();//create XHR object
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {//when XHR object is ready
                        document.getElementById("counter").innerHTML = this.responseText;//how to deal with server response
                    }
                };//end of readystate change function


                xhttp.open("GET", "index.php?controller=blog&action=dislikeBlog&blogID=" + blogID, true);
                xhttp.send();
            }
        </script>
        <!--<script src="../jsFunctions.js" type="text/javascript"></script>-->
    </body>
</html>
