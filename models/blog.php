<?php

class Blog {

    // defining the attributes
    public $blogID;
    public $userName;
    public $title;
    public $content;
    public $countryName;
    public $continentName;
    public $categoryName;
    public $username;
    public $likecounter;
    public $blogImageDestination;

    public function __construct($blogID, $title, $content, $countryName, $continentName, $categoryName, $username, $likecounter) {
        $this->blogID = $blogID;
        $this->title = $title;
        $this->content = $content;
        $this->countryName = $countryName;
        $this->continentName = $continentName;
        $this->categoryName = $categoryName;
        $this->username = $username;
        $this->likecounter = $likecounter;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        if(!is_null($db)){
            try{
               
        $req = $db->query('Call findAllPublishedBlogs'); //stored procedure that returns all blogs in reverse chronological order

        foreach ($req->fetchAll() as $blog) {
            $list[] = new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'], $blog['Username'], $blog['LikeCounter']);
        }
            }  catch(PDOException $e){
                $e->getMessage();
                throw new Exception(); 
                // log this exception somewhere
            }  
            
        return $list;
            
    }
    }

    
    public static function find($id) {
      $db = Db::getInstance();
      if(!is_null($db)){
          try{
      
      $id = intval($id);//use intval to make sure $id is an integer
      $req = $db->prepare("Call findBlogByID(:blogID)");
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('blogID' => $id));
      $blog = $req->fetch();
      
      if($blog){
              return new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'],$blog['Username'], $blog['LikeCounter']);
      }
      
          } catch(PDOException $e){
                $e->getMessage();
                
                // log this exception somewhere
                throw new Exception(); 
            }                     
      }
    }

    public static function filterInput($blogDetail) {//create a sanitising function for sanitising strings
        if (isset($_POST["$blogDetail"]) && $_POST["$blogDetail"] != "") {
            return filter_input(INPUT_POST, $blogDetail, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        }

        
     
    }


       
      
    public static function add() 
    { 

        $db = Db::getInstance();

        if(!is_null($db)){
            try {
     //
        $stmt = $db-> prepare("select CategoryID, CategoryName from category order by CategoryID");
        $result =$stmt->fetchAll();
        $req = $db->prepare( "Call addBlog(:username, :title, :content, :countryName, :continentName, :categoryName)"); 
            // sanitize input, set parameters and execute
        

        $blogDetails = filter_input_array(INPUT_POST);

        //asking whether title is empty refers to whether the addform has been submitted yet, if not the query is run
        //I could ask whether the general $_POST array is empty as it's not - it contains the username and password from the login page
        if (!empty($_POST['title'])) {//loops through Post Superglobal array, sanitising each input item
            foreach ($blogDetails as $blogDetail => $blogValue) {
                ${$blogDetail} = Blog::filterInput($blogDetail);
            }

            $username = $_SESSION['username'];

            $req->bindParam(':username', $username);
            $req->bindParam(':title', $title);
            $req->bindParam(':content', $content);
            $req->bindParam(':countryName', $countryName);
            $req->bindParam(':continentName', $continentName);
            $req->bindParam(':categoryName', $categoryName);

            $req->execute();

        }
            }
        catch(PDOException $e){
                $e->getMessage();
                // log this exception somewhere
                throw new Exception(); 
            }
                      
        
    //only upload blog image if one loaded
       if (!empty($_FILES[self::UploadKey]['name'])) {
                    Blog::uploadFile($title."_".$username);
        }//need to handle so that if there is an error with image upload, blog content not added to db
        }   
        }

    const AllowedTypes = ['image/jpeg','image/jpg'];

    const UploadKey = 'blogUploader';

    //die() function calls replaced with trigger_error() calls
    //replace with structured exception handling
    public static function uploadFile(string $name) {


        if ($_FILES[self::UploadKey]['error'] == (1 || 2)) {
            trigger_error("File too big!");
            die();
        }

        if (!in_array($_FILES[self::UploadKey]['type'], self::AllowedTypes)) {
            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::UploadKey]['type']);
            die();
        }

        if ($_FILES[self::UploadKey]['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[UploadKey]['error']);
            die();
            ;
        }

        $tempFile = $_FILES[self::UploadKey]['tmp_name'];
        #$macpath = "/Applications/XAMPP/xamppfiles/htdocs/MyEscape/views/blogImages/";
        $filepath = "C:/xampp/htdocs/MyEscape/views/blogImages/";
        $destinationFile = $filepath . $name . '.jpeg';


        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("Handle Error");
        }

        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }

        // $uploaddb = $db->prepare ( Insert into blogimage(BlogID,ImageName) Values ($destinaionFile,  where 
    }

    public static function modify($id) {
        $db = Db::getInstance();

        if(!is_null($db)){
  try{


        $req = $db->prepare("Call updateBlog(:blogID, :username, :title, :content, :countryName, :continentName, :categoryName)");
        $req->bindParam(':blogID', $id);
        $req->bindParam(':username', $username);
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        $req->bindParam(':countryName', $countryName);
        $req->bindParam(':continentName', $continentName);
        $req->bindParam(':categoryName', $categoryName);


        $blogUpdateDetails = filter_input_array(INPUT_POST);

        //asking whether title is empty refers to whether the addform has been submitted yet, if not the query is run
        if (!empty($_POST['title'])) {//loops through Post Superglobal array, sanitising each input item
            foreach ($blogUpdateDetails as $blogDetail => $blogValue) {
                ${$blogDetail} = Blog::filterInput($blogDetail);
            }


            $req->execute();
        }
  }
        catch(PDOException $e){
                $e->getMessage();
                // log this exception somewhere
                throw new Exception(); 
            }
                    
            //upload product image if it exists
            if (!empty($_FILES[self::UploadKey]['name'])) {
                Blog::uploadFile($title . "_" . $username);
            }
        }

        }
    
        

    public static function delete($blogid) {
        $db = Db::getInstance();
        //make sure $id is an integer
        if(!is_null($db)){
            try{

        $blogid = intval($blogid);
        $stmt = $db->prepare('call deleteBlog(:BlogID)');
        $stmt->bindParam(':BlogID', $blogid);

        // the query was prepared, now replace :id with the actual $id value
        $stmt->execute();
        
        }catch(PDOException $e){
                $e->getMessage();
                // log this exception somewhere
                throw new Exception(); 
            }
            
    }
    }

    public static function search() {

             $db = Db::getInstance();
             if(!is_null($db)){
             $list = [];
             
            if (isset($_POST['query']) && $_POST['query'] != "") {
                $search = filter_input(INPUT_POST, 'query', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            $likesearch = "%$search%";
            try{

            $sqlsearch =   $db->prepare("Call searchBlog (:query)");
         
            $sqlsearch->execute(array ('query' => $likesearch));
            
            foreach ($sqlsearch->fetchAll() as $blog) {
                $list[] = new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'], $blog['Username'], $blog['LikeCounter']);
            }
            }catch(PDOException $e){
                $e->getMessage();
                // log this exception somewhere
                throw new Exception(); 
            }
                        
            return $list; 
             }
           
}
    public function getBlogImageDestination() {
        return $this->blogImageDestination;
    }

   
    

public function addComment($blogid,$username) {


        $db = Db::getInstance();
        if(!is_null($db)){
        try{
        if (!empty($username)) {

           
            if (isset($_POST['Content']) && $_POST['Content'] != "") {
                $Content = filter_input(INPUT_POST, 'Content', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['senderName']) && $_POST['senderName'] != "") {
                $senderName = filter_input(INPUT_POST, 'senderName', FILTER_SANITIZE_SPECIAL_CHARS);
            }

            $sql = $db->prepare("CALL addComment(:Username, :BlogID, :Content, :senderName)");
             $sql->bindParam(':Username', $username);
            $sql->bindParam(':BlogID', $blogid);
            $sql->bindParam(':Content', $Content);
            $sql->bindParam(':senderName', $senderName);
           

            $sql->execute();

            if ($sql) {
                header('header:?controller=blog&action=read&blogID=' . $blogid);
            }
        } else {
        if (isset($_POST['Content']) && $_POST['Content'] != "") {
            $Content = filter_input(INPUT_POST, 'Content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['senderName']) && $_POST['senderName'] != "") {
            $senderName = filter_input(INPUT_POST, 'senderName', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $sql = $db->prepare("INSERT INTO comment (BlogID, Content, senderName) VALUES (:BlogID, :Content, :senderName)");
        $sql->bindParam(':BlogID', $blogid);
        $sql->bindParam(':Content', $Content);
        $sql->bindParam(':senderName', $senderName);

        $sql->execute();

        if ($sql) {
            header('header:?controller=blog&action=read&blogID=' . $blogid);
        }
    }
        }
        catch(PDOException $e){
            $e->getMessage();
                // log this exception somewhere
            throw new Exception(); 
        }
        }
    }

            
    public function setBlogImageDestination($newBlogImageDestination){
                $this->blogImageDestination=$newBlogImageDestination;
            }
  
    
    public static function like($id) {
        $db = Db::getInstance();
  
        if(!is_null($db)){
            try{
        $req = $db->prepare("Call addLikeCounter(:blogID)");
        $req->bindParam(':blogID', $id); 
        $req->execute();
            }
            catch(PDOException $e){
                $e->getMessage();
                // log this exception somewhere
            throw new Exception(); 
            }
        }
    }       
        

    public static function dislike($id) {
        $db = Db::getInstance();
  
        if(!is_null($db)){
            try{
        $req = $db->prepare("Call subtractLikeCounter(:blogID)");
        $req->bindParam(':blogID', $id); 
        $req->execute();
        }
            catch(PDOException $e){
                $e->getMessage();
                // log this exception somewhere
            throw new Exception(); 
            }
        }
    }   

    
    
     public static function counter($id) {
      $db = Db::getInstance();
      if(!is_null($db)){
            try{
      $id = intval($id);//use intval to make sure $id is an integer
      $req = $db->prepare("Call findBlogByID(:blogID)");
      $req->execute(array('blogID' => $id));
      $blog = $req->fetch();
      
      if($blog){
              return ($blog['LikeCounter']);
      }
      else{
            throw new Exception('A real exception should go here'); //replace with a more meaningful exception
      }
      }
            catch(PDOException $e){
                $e->getMessage();
                // log this exception somewhere
            throw new Exception(); 
            }
        }
    } 

}

?>