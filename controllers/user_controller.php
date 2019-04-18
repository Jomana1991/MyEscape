<?php

class userController {
    public function login() {
        
         if($_SERVER['REQUEST_METHOD'] == 'GET'){
             require_once('views/blogs/login.php');
         }
         
         else { 
            User::login();
             
            $blogs = Blog::add(); 
            require_once('views/blogs/create.php');
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
     
 }
