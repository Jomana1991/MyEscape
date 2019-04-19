
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
    else
    {
    return;
    }
?>

