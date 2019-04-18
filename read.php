<p>Below is the full Blog:</p>


<p>Blog Title: <?php echo $blog->title ."<br>"; ?></p>
<p>Blog content: £<?php echo $blog->content; ?></p>
<?php
$file = 'views/images/' . $blog->title . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "no product image";
}
?>
