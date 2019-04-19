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
      
    
    public function __construct($blogID, $title, $content, $countryName, $continentName, $categoryName, $username, $likecounter)
    {
      $this->blogID    = $blogID;
      $this->title    = $title;
      $this->content    = $content;
      $this->countryName = $countryName;
      $this->continentName = $continentName;
      $this->categoryName = $categoryName;
      $this->username = $username;
      $this->likecounter=$likecounter;
    } 

    
    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('Call findAllPublishedBlogs'); //stored procedure that returns all blogs in reverse chronological order

        foreach ($req->fetchAll() as $blog) {
            $list[] = new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'], $blog['Username'], $blog['LikeCounter']);
        }
        return $list;
    }

    
    public static function find($id) {
      $db = Db::getInstance();
      
      $id = intval($id);//use intval to make sure $id is an integer
      $req = $db->prepare("Call findBlogByID(:blogID)");
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('blogID' => $id));
      $blog = $req->fetch();
      
      if($blog){
              return new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'],$blog['Username'], $blog['LikeCounter']);
      }
      else{
            throw new Exception('A real exception should go here'); //replace with a more meaningful exception
      }
    }

    
    public static function filterInput($blogDetail) {//create a sanitising function for sanitising strings
        if(isset($_POST["$blogDetail"])&& $_POST["$blogDetail"]!=""){    
            return filter_input(INPUT_POST,$blogDetail,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
            }
    }
       
      
    public static function add() 
    {   session_start();
        $db = Db::getInstance();
        $req = $db->prepare( "Call addBlog(:username, :title, :content, :countryName, :continentName, :categoryName)"); 
            // sanitize input, set parameters and execute
        
        $blogDetails = filter_input_array(INPUT_POST);
                   
        //asking whether title is empty refers to whether the addform has been submitted yet, if not the query is run
        //I could ask whether the general $_POST array is empty as it's not - it contains the username and password from the login page
        if(!empty($_POST['title'])){//loops through Post Superglobal array, sanitising each input item
        
            foreach($blogDetails as $blogDetail => $blogValue) {
                ${$blogDetail} = Blog::filterInput($blogDetail);
            }
                
            $username=$_SESSION['username'];

            $req->bindParam(':username', $username);
            $req->bindParam(':title', $title);
            $req->bindParam(':content', $content);
            $req->bindParam(':countryName', $countryName);
            $req->bindParam(':continentName', $continentName);
            $req->bindParam(':categoryName', $categoryName);

            $req->execute();
        
        
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
        
         
            if ($_FILES[self::UploadKey]['error'] == (1||2)) {  
                trigger_error("File too big!");
                die();
            }

            if (!in_array($_FILES[self::UploadKey]['type'],self::AllowedTypes)){
                trigger_error("Handle File Type Not Allowed: " . $_FILES[self::UploadKey]['type']);
                die();
                }

            if ($_FILES[self::UploadKey]['error']>0){
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
        if(!empty($_POST['title'])){//loops through Post Superglobal array, sanitising each input item
        
            foreach($blogUpdateDetails as $blogDetail => $blogValue) {
                ${$blogDetail} = Blog::filterInput($blogDetail);
            }
        
     
            $req->execute();
            //upload product image if it exists
                    if (!empty($_FILES[self::UploadKey]['name'])) {
                        Blog::uploadFile($title."_".$username);
                    }
        }
    }
        
    public static function delete($blogid) {
        $db = Db::getInstance();
        //make sure $id is an integer

        $blogid = intval($blogid);
        $stmt = $db->prepare('call deleteBlog(:BlogID)');
        $stmt->bindParam(':BlogID', $blogid);

        // the query was prepared, now replace :id with the actual $id value
        $stmt->execute();
    }

    public static function search() {
      
             $db = Db::getInstance();
             $list = [];
             
            if (isset($_POST['query']) && $_POST['query'] != "") {
                $search = filter_input(INPUT_POST, 'query', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            $likesearch = "%$search%";

            $sqlsearch = "SELECT 
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
               
               WHERE (cou.CountryName LIKE :query ) OR (cat.CategoryName LIKE :query) OR (con.ContinentName LIKE :query) OR (b.Title LIKE :query) OR (b.Content LIKE :query)
               ORDER BY b.DatePosted DESC;";
         
            $db->prepare($sqlsearch);
            $req->execute(array ('query' => $likesearch));
            
            foreach ($req->fetchAll() as $blog) {
                $list[] = new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'], $blog['Username'], $blog['LikeCounter']);
            }
            
            return $list;

}
  
  
    public function getBlogImageDestination(){
                return $this->blogImageDestination;
            }

            
    public function setBlogImageDestination($newBlogImageDestination){
                $this->blogImageDestination=$newBlogImageDestination;
            }
  


}

?>