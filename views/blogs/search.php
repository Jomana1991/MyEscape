


<?php
#session_start();//removed as now in layout
//if (isset($_GET['searchblog'])) {
//   $_GET['searchblog'] = $_SESSION ['query'];
//  header ("location:?controller=blog&action=search&query=".$_SESSION['query']); 
// 
//} 
?>

<html>
    <head>
        <title> </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
<p>Search for a blog below</p>

<form action=" " method="POST">
    <input type="text" id="query" name="query" placeholder="Enter your search here"/>
    <input type="submit" value="Search" />
</form>

<div class="result">
    
</div>




<?php
if (isset($_POST['query'])) {
  
    if ((($_POST['query']) && ($blogs)) == 1) {

        foreach ($blogs as $blog) {

            echo "<h2>Results</h2>" . "<br>";
            echo "<strong>" . $blog->title . "</strong>" . "<br>";
            echo $blog->username . "<br>";
            echo $blog->categoryName . "<br>";
            echo $blog->countryName . "<br>";
            echo $blog->continentName . "<br>";


            //If blog is greater than 200 characters, the content will be shortened to 150 characters, if not the whole content will be echo'd
            if (strlen($blog->content) > 150) {
                echo substr($blog->content, 0, strpos(wordwrap($blog->content, 150), "\n")) . '...' . "<br><br>";
                //        here I am using wordwrap to line breakat the nearest word to 150 characters(so you don't get half words),
                //        strpos then returns the position of the first line break, and the content will therefore be shortened to this position by substr
            } else {
                echo $blog->content . "<br><br>";
            }
        }
    } else if ((($_POST['query']) && ($blogs)) == 0) {
        echo 'no result found' . "<br>" . "<br>";
    } else {
        echo " ";
    }
}




?> 
&nbsp; &nbsp;
<!--
<script>
$(document).ready(function(){
    $('#query').keyup(function(){
        var txt = $(this).val();
        if (txt != '')
        {
            
            
        }
        else {
            $('.result').html ('');
            $.ajax({
                url:"?controller=blog&action=search.php",
                method:"post",
                data:{search:txt},
                datatype:"text",
                success:function(data)
                {
                    $('.result').html(data);
                }
            });
        }
    });
});

</script>-->

    </body>
</html>

