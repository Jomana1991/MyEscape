<?php


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
<?php echo $blog->title . "<br>"; ?>
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
        <?php
        $file = 'views/blogImages/' . $blog->title . "_" . $blog->username . '.jpeg';

        if (file_exists($file)) {
            $img = "<img src='$file' width='150' />";
            echo $img;
        }
        ?>
        &nbsp;
        <br><br>

        <p>
            <a href='?controller=blog&action=likeBlog&blogID=<?php echo $blog->blogID; ?>' class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
            </a>
            <a href='?controller=blog&action=dislikeBlog&blogID=<?php echo $blog->blogID; ?>' class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-down"></span> Dislike
            </a>
            <br>
            <span class="badge">Score: <?php echo $blog->likecounter; ?> </span>
            <br>
        </p>

        <br />
        <br />

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-6">
                <form class="form-horizontal" method="POST" action=" " >
                    <div>
                        <label class="col-lg-5 control-label">Add Comment </label> 
                        <br />
                        <div class="col-lg-9">
                            <input class="form-control"  name="senderName" placeholder="Enter your name" required> 
                            <br />
                            <textarea required class="form-control" rows="5" cols="10" name="Content" placeholder=" Enter your comment" ></textarea>
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
        
<!--        <script type="text/javascript">
        $(function() {
            setInterval(function() {
                $.ajax({
                    url:'read.php',
                    success:function(res){
                        $('.').html(res);
                    }
                })
                
            }, 5000);
            
            
        })
        
    </script>-->
    </body>
</html>

&nbsp; 