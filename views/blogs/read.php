
<h2>
    <?php echo $blog->title ."<br>"; ?>
</h2>
<p>
    <?php echo $blog->content; ?>
</p>

<?php
    $file = 'views/blogImages/' . $blog->title ."_".$blog->username. '.jpeg';
    
    if(file_exists($file)){
        $img = "<img src='$file' width='150' />";
        echo $img;
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
<!--    <a href='?controller=blog&action=dislikeBlog&blogID=<?php echo $blog->blogID; ?>' class="btn btn-default btn-sm" id="thumb-button" onClick="disableButton()">
          <span class="glyphicon glyphicon-thumbs-down"></span> Dislike
    </a>-->
    <br>
<p id="counter"><span class="badge" ></span></p>
<!--    <p id="counter"></p>-->
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