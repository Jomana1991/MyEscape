<?php
class BlogController {
   
    public function readAll() {
      $blogs = Blog::all();
      require_once('views/blogs/readAll.php');
    }

    
    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['BlogID']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $blog = Blog::find($_GET['BlogID']);
      require_once('views/blogs/read.php');
      }
      catch (Exception $ex){
      return call('pages','error');
      }
    }
    
    
    public function create() {
      // we expect a url of form ?controller=products&action=create
      // if it's a GET request display a blank form for creating a new product
      // else it's a POST so add to the database and redirect to readAll action
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/blogs/create.php');
      }
      else { 
            Blog::add();
             
            $blogs = Blog::all(); 
            require_once('views/blogs/readAll.php');
      }
      
    }
    
    
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['BlogID']))
        return call('pages', 'error');#requires better exception handling

        // we use the given id to get the correct blog for updating
        $blog= Blog::find($_GET['BlogID']);
      
        require_once('views/blogs/update.php');
        }
      else
          { 
            $id = $_GET['BlogID'];
            Blog::modify($id);
                        
            $blogs = Blog::all();
            require_once('views/blogs/readAll.php');
      }
      
    }
    public function delete() {
            Blog::delete($_GET['BlogID']);
            
            $blogs = Blog::all();
            require_once('views/blogs/readAll.php');
      }
      
    }
  
?>
