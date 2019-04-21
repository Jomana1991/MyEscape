<!--no longer needed - flexible navbar  <a href='?controller=pages&action=logout'>logout</a>-->


<p>Here is a list of all blogs:</p>

<?php foreach($blogs as $blog) { ?>
  <p>
    <?php echo $blog->title ."<br>";
    
    echo $blog->countryName."<br>";
    echo $blog->continentName."<br>";
    echo $blog->username."<br>";
    echo $blog->categoryName."<br>";
    
    //If blog is greater than 200 characters, the content will be shortened to 150 characters, if not the whole content will be echo'd
    if (strlen($blog->content) > 150){ 
        echo substr($blog->content,0,strpos(wordwrap($blog->content, 150), "\n")).'...'."<br>";
//        here I am using wordwrap to line breakat the nearest word to 150 characters(so you don't get half words),
//        strpos then returns the position of the first line break, and the content will therefore be shortened to this position by substr
    }   
    else {
        echo $blog->content."<br>";
    
    }
      
    ?> &nbsp; &nbsp;
    
    <a href='?controller=blog&action=read&blogID=<?php echo $blog->blogID; ?>'> Read Full Blog </a> &nbsp; &nbsp;
    <a href='?controller=blog&action=update&blogID=<?php echo $blog->blogID; ?>'> Update Blog </a> &nbsp; &nbsp;
    <a href='?controller=blog&action=delete&blogID=<?php echo $blog->blogID; ?>'> Delete Blog </a> &nbsp;
  </p>

<?php } ?>
