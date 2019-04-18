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
    public static function all() 
    {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('Call findAllPublishedBlogs'); //stored procedure that returns all blogs in reverse chronological order
      
      foreach($req->fetchAll() as $blog) 
          {
        $list[] = new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'],$blog['Username'], $blog['LikeCounter']);
      }
      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
//      $sqlfind = 'SELECT 
//                b.BlogID
//                ,u.Username
//                ,b.Title
//                ,b.Content
//                ,cou.CountryName
//                ,con.ContinentName
//                ,cat.CategoryName
//                ,b.DatePosted
//                ,b.LikeCounter
//
//                FROM `blog` as b
//                INNER JOIN country as cou
//                ON b.CountryID = cou.CountryID
//                INNER JOIN continent as con
//                ON b.ContinentID = con.ContinentID
//                INNER JOIN category as cat
//                ON b.CategoryID = cat.CategoryID
//                INNER JOIN user as u
//                ON b.UserID = u.UserID
//                
//                WHERE b.BlogID = :BlogID;';



      $req = $db->prepare("Call findBlogByID(:BlogID)");
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('BlogID' => $id));
      $blog = $req->fetch();
if($blog){
      return new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'],$blog['Username'], $blog['LikeCounter']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }

public static function modify($id) {
    $db = Db::getInstance();
//    $sqlmodify="UPDATE blog SET
//                UserID = (SELECT UserID FROM user WHERE Username = :username) 
//                ,Title = :title
//                , Content = :content
//                , CountryID = (SELECT CountryID FROM country WHERE CountryName = :countryName)
//                , ContinentID = (SELECT ContinentID FROM continent WHERE ContinentName = :continentName)
//                , CategoryID = (SELECT CategoryID FROM category WHERE CategoryName = :categoryName)
//
//                WHERE BlogID=:blogID";
    
    $req = $db->prepare("Call updateBlog(:blogID, :username, :title, :content, :countryName, :continentName, :categoryName)");
    $req->bindParam(':blogID', $id);
    $req->bindParam(':username', $username);
    $req->bindParam(':title', $title);
    $req->bindParam(':content', $content);
    $req->bindParam(':countryName', $countryName);
    $req->bindParam(':continentName', $continentName);
    $req->bindParam(':categoryName', $categoryName);
    
// set name and price parameters and execute
if(isset($_POST['username'])&& $_POST['username']!=""){
        $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['countryName'])&& $_POST['countryName']!=""){
        $countryName = filter_input(INPUT_POST,'countryName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['continentName'])&& $_POST['continentName']!=""){
        $continentName = filter_input(INPUT_POST,'continentName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['categoryName'])&& $_POST['categoryName']!=""){
        $categoryName = filter_input(INPUT_POST,'categoryName', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $title = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['content'])&& $_POST['content']!=""){
        $content = filter_input(INPUT_POST,'content', FILTER_SANITIZE_SPECIAL_CHARS);
    }

$req->execute();
//upload product image if it exists
//        if (!empty($_FILES[self::InputKey]['name'])) {
//		Blog::uploadFile($name);
//	}
    }
    
    public static function add() 
    {
        $db = Db::getInstance();
       // $req = $db->prepare("Insert into blog(Title, Content, UserID,) values (:Title, :Content)");
        $req = $db->prepare( "Insert into blog(BlogID, UserID, Title, Content, CountryID, ContinentID, CategoryID, DatePosted, LikeCounter, Published) 
                                                values (:BlogID, :UserID, :Title, :Content, :CountryID, :ContinentID, :CategoryID, :DatePosted, :LikeCounter, :Published)"); 
            // set parameters and execute
//    if(isset($_POST['Title'])&& $_POST['Title']!="")
//    {
//        $filteredTitle = filter_input(INPUT_POST,'Title', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//    
//    if(isset($_POST['Content'])&& $_POST['Content']!="")
//    {
//        $filteredContent = filter_input(INPUT_POST,'Content', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
    
    $Title = $_POST['Title'];
    $Content = $_POST['Content'];
        $bid="";
        $uid=5;
        $cid= $_POST['Country'];
        $conid= $_POST['Continent'];
        $catid=$_POST['Category'];
        $dp="13/5/19";
        #$lic=20;
        #$pub="True";
        $req->bindParam(':BlogID', $bid);
        $req->bindParam(':UserID', $uid);
        $req->bindParam(':Title', $Title);
        $req->bindParam(':Content', $Content);
        $req->bindParam(':CountryID', $cid);
        $req->bindParam(':ContinentID', $conid);
        $req->bindParam(':CategoryID', $catid);
        $req->bindParam(':DatePosted', $dp);
        #$req->bindParam(':LikeCounter', $lic);
        #$req->bindParam(':Published', $pub);

    $req->execute();
    //upload product image
    Blog::uploadFile($Title);
    }
const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myUploader';
//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
public static function uploadFile(string $name) {
	if (empty($_FILES[self::InputKey])) {
		//die("File Missing!");
                trigger_error("File Missing!");
	}
	if ($_FILES[self::InputKey]['error'] > 0) {
		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
	}
	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
	}
	$tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "/Applications/XAMPP/xamppfiles/htdocs/MyEscape/views/images/";
	$destinationFile = $path .$name . '.jpeg';
       
	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
        
        // $uploaddb = $db->prepare ( Insert into blogimage(BlogID,ImageName) Values ($destinaionFile,  where 
}



public static function delete($blogid) {
      $db = Db::getInstance();
      //make sure $id is an integer

      $blogid = intval($blogid);
      $stmt = $db->prepare('call deleteBlog(:BlogID)');
      $stmt->bindParam(':BlogID',$blogid);

      // the query was prepared, now replace :id with the actual $id value
      $stmt->execute();
  }
  
}
?>