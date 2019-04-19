<?php

class User {

    public $Username;
    public $Password;
    public $Email;

    public function __construct($Username, $Password, $Email) {

        $this->Username = $Username;
        $this->Password = $Password;

        $this->Email = $Email;
    }

    public static function login() {//add in santisation for email
        $db = Db::getInstance();
        $query = $db->prepare("SELECT * FROM user WHERE Username = :Username AND Password = :Password");

        if(isset($_POST['Username'])&& $_POST['Username']!=""){
        $Username = filter_input(INPUT_POST,'Username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['Password'])&& $_POST['Password']!=""){
        $Password = filter_input(INPUT_POST,'Password', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        $query->bindParam(':Username', $Username);
        $query->bindParam(':Password', $Password);

        $query->execute();
    $results = $query->fetchAll();
        if ($results) {
             header('location:?controller=blog&action=create');
            
        } else {
            die ( 'user not found') ;
            
        }
    }

    public static function register() {
        $db = Db::getInstance();
        $rej = $db->prepare("INSERT INTO user (Username, Email, Password) VALUES ( :Username, :Email, :Password)");

        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $Email = $_POST["Email"];

        $rej->bindParam(':Username', $Username);
        $rej->bindParam(':Password', $Password);
        $rej->bindParam(':Email', $Email);
        
        $result = $rej->execute();
         
         if ($result ==1 ) { header('location:?controller=user&action=login');}
    }
    
    public static function readMine($Username) 
    {
      $list = [];
      $db = Db::getInstance();
      
       $sqlfindmine= 'SELECT 
               b.BlogID
               ,u.Username
               ,b.Title
               ,b.Content
                ,cou.CountryName
                ,con.ContinentName
                ,cat.CategoryName
                ,b.DatePosted
               ,b.LikeCounter
               
                FROM `blog` as b
               INNER JOIN country as cou
               ON b.CountryID = cou.CountryID
              INNER JOIN continent as con
               ON b.ContinentID = con.ContinentID
               INNER JOIN category as cat
               ON b.CategoryID = cat.CategoryID
                INNER JOIN user as u
               ON b.UserID = u.UserID
               
               WHERE u.Username = :Username;';
      
      $req = $db->prepare($sqlfindmine);
      
      require_once('blog.php');
      
      $req->execute(array('Username' => $Username));
      foreach($req->fetchAll() as $blog) 
          {
        $list[] = new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'],$blog['Username'], $blog['LikeCounter']);
      }
      return $list;
    }
    
    
    public static function contactus() {
        $db = Db::getInstance();
        $stmt = $db->prepare("INSERT INTO userfeedback (FullName, Email,Comments) VALUES ( :FullName, :Email, :Comments)");

        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $comments = $_POST["comments"];

        $stmt->bindParam(':FullName', $fullname);
        $stmt->bindParam(':Email', $email);
        $stmt->bindParam(':Comments', $comments);
        
        $result = $stmt->execute();
         
         if ($result ==1 ) { echo "Thanks for the feedback,we will get back to you soon";}
    }
    

}
