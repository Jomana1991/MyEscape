<?php




class BlogController {

    public function readAll() {
        try{
        $blogs = Blog::all();
        require_once('views/blogs/readAll.php');
        }
        catch (Exception $ex) {
                return call('pages', 'error');
            }
    }

  
public function read() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database



    try {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['blogID']))
                return call('pages', 'error');

            
                // we use the given id to get the correct post
                $blogid = $_GET['blogID'];
                Blog::incrementViewCount($blogid);
                $blog = Blog::find($_GET['blogID']);


                require_once './models/comment.php';
                $comments = Comment::fetchComment($blogid);
                require_once('views/blogs/read.php');
                
            
        } else {
            if (!empty($_SESSION['username'])){
            $username = $_SESSION['username'];
            }
            else 
            { $username = ' ';}
            $blogid = $_GET['blogID'];
            Blog::addComment($blogid,$username);

            $blog = Blog::find($blogid);

            require_once './models/comment.php';
            $comments = Comment::fetchComment($blogid);
            require_once('views/blogs/read.php');

        }
        } catch (Exception $ex) {
                return call('pages', 'error');
            }
    }

    public function addComment() {
        try{
         if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['blogID']))
                return call('pages', 'error');#requires better exception handling
            // we use the given id to get the correct blog for updating
            $blog = Blog::find($_GET['blogID']);

     require_once('views/blogs/find.php');
        }
        else {
            $blogid = $_GET['blogID'];
            Blog::addComment($blogid);

         $blog = Blog::find($blogid);

           require_once('views/blogs/find.php');
        }
        } catch (Exception $ex) {
                return call('pages', 'error');
            }
    }

    public function create() {
        // we expect a url of form ?controller=products&action=create
        // if it's a GET request display a blank form for creating a new product
        // else it's a POST so add to the database and redirect to readAll action
        try{
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/blogs/create.php');
        } else {
            Blog::add();

            #Can't get this to work
            #$blogs = User::readMine($_GET['username']);
            require_once('./models/user.php');

            $blogs = User::readMine($_SESSION['username']);
            require_once('views/users/readMine.php');
        }
        } catch (Exception $ex) {
                return call('pages', 'error');
            }
    }

    public function update() {

        try{
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['blogID']))
                return call('pages', 'error');#requires better exception handling
            // we use the given id to get the correct blog for updating
            $blog = Blog::find($_GET['blogID']);

            require_once('views/blogs/update.php');
        }
        else {
            $id = $_GET['blogID'];
            Blog::modify($id);

            $blogs = Blog::all();
            require_once('views/blogs/readAll.php');
        }
        } catch (Exception $ex) {
                return call('pages', 'error');
            }
    }

    public function delete() {
        try{
        Blog::delete($_GET['blogID']);

        require_once('./models/user.php');
        $blogs = User::readMine($_SESSION['username']);
        require_once('views/users/readMine.php');
        } catch (Exception $ex) {
                return call('pages', 'error');
            }
    }

   
 public function search() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/blogs/search.php');
        } else {

            if (!empty($_POST['query'])) {
                Try {
                    $blogs = Blog::search();
                    
             //       require_once('views/blogs/search.php');
                    foreach ($blogs as $blog) {
                         echo '<br>';
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
                } catch (Exception $ex) {
                    return call('pages', 'error');
                }
            } else {
                echo '<br><br>please type something!<br><br>';
            }
        }
    }



    public function likeBlog() {

        
        if (!isset($_GET['blogID']))
            return call('pages', 'error');

        try {
            Blog::like($_GET['blogID']);

            echo "Score: ".Blog::counter($_GET['blogID']);
           
            //Non-AJAX way
            #$blog = Blog::find($_GET['blogID']);
            #require_once('views/blogs/read.php');
            


        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function dislikeBlog() {
        if (!isset($_GET['blogID']))
            return call('pages', 'error');

        try {
            Blog::dislike($_GET['blogID']);

            echo "Score: ".Blog::counter($_GET['blogID']);
            
             //Non-AJAX way
            #$blog = Blog::find($_GET['blogID']);
            #require_once('views/blogs/read.php');
            


        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }


public function viewBlog() {
        
        if (!isset($_GET['blogID']))
            return call('pages', 'error');

        try {
           
            $blog = Blog::find($_GET['blogID']);
            require_once('views/blogs/read.php');
            
        } catch (Exception $ex) {
            return call('pages', 'error');
        }       
    }
}
?>
