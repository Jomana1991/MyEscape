


<?php 

session_start();
//if (isset($_GET['searchblog'])) {
//   $_GET['searchblog'] = $_SESSION ['query'];
//  header ("location:?controller=blog&action=search&query=".$_SESSION['query']); 
// 
//} 
?>
 <p>Search for a blog below</p>

 <form action=" " method="POST">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>



<h4>Results</h4>

<?php 
    if (isset($_POST['query'])) {

        foreach ($blogs as $blog) { 


            echo "<strong>".$blog->title ."</strong>". "<br>";
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
    }
    else { 
        echo 'No results, please try searching for something else';
    }
        ?> 
&nbsp; &nbsp;



