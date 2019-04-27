<?php

//session_start();
$_SESSION ['blogID'] = $_GET ['blogID'];

?>
<html>
    <head>
        <title> </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>


        <h2>
            <?php echo $blog->title. "<br>"; ?>
        </h2>
        <p>
            <?php echo $blog->content; ?>
        </p>

        <?php
        $file = 'views/blogImages/' . $blog->title . "_" . $blog->username . '.jpeg';

        if (file_exists($file)) {
            $img = "<img src='$file' width='150' />";
            echo $img;
        } else {
            echo '';
        }
        ?>
 
&nbsp;
<br><br>

<!--Attempting AJAX-->

    <a class="btn btn-default btn-sm" id="thumb-button" onclick="addLikeCounter(<?php echo $blog->blogID;?>)">
          <span class="glyphicon glyphicon-thumbs-up" ></span> Like
    </a>
    <a class="btn btn-default btn-sm" id="thumb-button" onclick="subtractLikeCounter(<?php echo $blog->blogID;?>)">
          <span class="glyphicon glyphicon-thumbs-down" ></span> Dislike
    </a>

    <br>

<p id="counter" class="badge"></p>
    <br>


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

    </body>
</html>

&nbsp; 


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