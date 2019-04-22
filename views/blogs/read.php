
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

&nbsp; 

  