<?php

//session_start();
$_SESSION ['blogID'] = $_GET ['blogID'];

?>
<html>
    <head>
    <br><br><br>
        <title> </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <style>
            .fader
            {
            position: absolute;
                    height: 100%;
                    width:100%;
                    left: 0;
                    background-image: url("img/orange.jpg");                   
                    background-repeat: repeat;
                    background-position: center;
                    background-size: auto;
                    opacity: 0.30;
                    }
        </style>
    </head>
    <body>

        <div class='fader'>
        </div>  
        <br>
        
        <div class="col-md-12" align="center">
            <h2><?php echo $blog->title . "<br>"; ?></h2> 
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4" align="justify">
                <p>
                    <?php echo $blog->content; ?>
                </p>
            </div>     
             <div class="col-md-4">
             </div>
        </div>
        <div class="row">
            <div class="col-md-12"align="center">
            <?php
            $file = 'views/blogImages/' . $blog->title . "_" . $blog->username . '.jpeg';

            if (file_exists($file)) {
                $img = "<img src='$file' width='150' />";
                echo $img;
            } else {
                echo '';
            }
            ?>
            </div>
        </div>    
<!--Attempting AJAX-->
<div class="row">
    <div class="col-md-4" >
    </div>
    <div class="col-md-4" >

        <a class="btn btn-default btn-sm" id="thumb-button" onclick="addLikeCounter(<?php echo $blog->blogID;?>)">
              <span class="glyphicon glyphicon-thumbs-up" ></span> Like
        </a>
        <a class="btn btn-default btn-sm" id="thumb-button" onclick="subtractLikeCounter(<?php echo $blog->blogID;?>)">
              <span class="glyphicon glyphicon-thumbs-down" ></span> Dislike
        </a>
        <p id="counter" class="badge"></p>
        <p id="viewCount" align="right">Views : <?php echo $blog->viewcounter; ?> </p>
    </div>
    <div class="col-md-4" >
    </div>
</div>
<!--Non AJAX way-->
<!--<p>
    <a href='?controller=blog&action=likeBlog&blogID=<?php echo $blog->blogID; ?>' class="btn btn-default btn-sm" id="thumb-button" onClick="disableButton()">
          <span class="glyphicon glyphicon-thumbs-up"></span> Like
    </a>
    <a href='?controller=blog&action=dislikeBlog&blogID=<?php echo $blog->blogID; ?>' class="btn btn-default btn-sm" id="thumb-button" onClick="disableButton()">
          <span class="glyphicon glyphicon-thumbs-down"></span> Dislike
    </a>
    <br>
    <span class="badge" id="counter">Score: <?php echo $blog->likecounter; ?></span>
    <br>
</p>-->



       <br />
        <br />

        <div class="row">
            <div class="col-lg-4"> </div>
                <div class="col-lg-6">
                    <form class="form-horizontal" method="POST" action=" " >
                        <div>
                            <label class="col-lg-5 control-label">Add Comment </label> 
                            <br />
                            <div class="col-lg-9">
                                <textarea class="form-control" rows="2" cols="5" name="senderName" placeholder="Enter your name" required ></textarea>
                                <br />
                                <textarea class="form-control" rows="5" cols="10" name="Content" placeholder="comment" required></textarea>
                            </div>
                        </div>
                        <br />
                        <input type="submit" name="postcomment" value="comment" class="btn btn-primary">

                    </form>  

                </div> 
        </div>
        
         <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-6">
                <h1> All comments</h1>
                <?php foreach($comments as $comment) { ?>
                <p>    <?php echo $comment->Content; ?> </p>
                <p> Posted by:   <?php echo $comment->senderName; ?> </p>
                <hr>
             <?php   }?>
            </div> 
        </div>

 <div class='fader'>
        </div> 

  

    </body>
</html>


<script>
    function addLikeCounter(blogID) {
    var xhttp; //new variable
    xhttp = new XMLHttpRequest ();//create XHR object
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){//when XHR object is ready
                    document.getElementById("counter").innerHTML = this.responseText;//how to deal with server response
                                                       }
                               };//end of readystate change function
    
    xhttp.open("GET","index.php?controller=blog&action=likeBlog&blogID="+blogID,true);
    xhttp.send();
                        }
                        
    function subtractLikeCounter(blogID) {
    var xhttp; //new variable
    xhttp = new XMLHttpRequest ();//create XHR object
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){//when XHR object is ready
                    document.getElementById("counter").innerHTML = this.responseText;//how to deal with server response
                                                       }
                               };//end of readystate change function
    
    xhttp.open("GET","index.php?controller=blog&action=dislikeBlog&blogID="+blogID,true);
    xhttp.send();
                        }
</script>
<!--<script src="../jsFunctions.js" type="text/javascript"></script>-->

