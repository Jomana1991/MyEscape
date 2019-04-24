<?php

class userController {
    public function login() {
        #session_start();//removed as now in layout
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
             
            if (!empty($_SESSION['username'])) {
            // if logged in can skip login page and go straight to create blog page
            header('location:?controller=blog&action=create');
            }        
            else{
                 require_once('views/users/login.php');
            }
        } 
         else { 
            User::login();
             
            require_once('views/blogs/create.php');
            require_once('./models/blog.php');
            $blogs = Blog::add();
           
      }
    }

    public function contactus(){
         if($_SERVER['REQUEST_METHOD'] == 'GET'){
              require_once('views/users/contactus.php');
           }
          else { 
                User::contactus();

          }

    }


    public function register() {
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/users/register.php');
       }
      else { 
            User::register();
             
//            $blogs = User::login(); 
//            require_once('views/users/login.php');
      }
      
    }
    
    public function readMine(){
     if (!isset($_GET['username']))#change delete so sends to readmine not read all?
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $blogs = User::readMine($_GET['username']);
      #require_once('./models/user.php'); //did this when trying to get create to redirect to readMine not readAll
      require_once('views/users/readMine.php');
      }
        catch (Exception $ex){
            return call('pages','error');
        }
    }
    
    
    
    
    public function changePassword() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            
            require_once('views/users/changePassword.php');
        }       
            else{

                if (User::confirmUserExists()){
                    try{ User::modify();

                    require_once('views/users/login.php');
                    }
                    catch (Exception $ex){
                    return call('pages','error');
                    }
                }
                
                else{
                    $message = "Username does not exist.";
        
                    echo '<script type="text/javascript">alert("'.$message.'");history.go(-1);</script>';
                }
        }
      
    }
    
 }
