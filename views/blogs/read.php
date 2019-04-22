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
        <br />
        <br />

        <div class="row">
            <div class="col-lg-4">
                <div class="col-lg-6">
                    <form class="form-horizontal" method="POST" action=" " >
                        <div>
                            <label class="col-lg-5 control-label">Add Comment </label> 
                            <br />
                            <div class="col-lg-9">
                                <textarea class="form-control" rows="2" cols="5" name="senderName" placeholder="Enter your name">  </textarea>
                                <br />
                                <textarea class="form-control" rows="5" cols="10" name="Content" placeholder="comment">  </textarea>
                            </div>
                        </div>
                        <br />
                        <input type="submit" name="postcomment" value="comment" class="btn btn-primary">

                    </form>  

                </div> 

            </div>

        </div>

    </body>
</html>

