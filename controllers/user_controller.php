<?php

class userController {
    public function login() {
        
         if($_SERVER['REQUEST_METHOD'] == 'GET'){
             require_once('views/blogs/login.php');
         }
         
         else { 
            User::login();
             
            require_once('views/blogs/create.php');
             require_once('./models/blog.php');
            $blogs = Blog::add();
      }
 
      
      
}


    public function register() {
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/blogs/register.php');
       }
      else { 
            User::register();
             
//            $blogs = User::login(); 
//            require_once('views/blogs/login.php');
      }
      
    }
    
    public function readMine(){
     if (!isset($_GET['Username']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $blogs = User::readMine($_GET['Username']);
      require_once('views/blogs/readMine.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }
 }