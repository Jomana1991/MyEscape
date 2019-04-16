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
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $blog) 
          {
        $list[] = new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'],$blog['Username'], $blog['LikeCounter']);
      }
      return $list;
    }
<<<<<<< HEAD
    
    
//    public static function find($id) {
//      $db = Db::getInstance();
//      //use intval to make sure $id is an integer
//      $id = intval($id);
//      $req = $db->prepare('SELECT * FROM blog WHERE id = :id');
//      //the query was prepared, now replace :id with the actual $id value
//      $req->execute(array('id' => $id));
//      $blog = $req->fetch();
//if($blog){
//      return new Blog($blog['id'], $blog['name'], $blog['price']);
//    }
//    else
//    {
//        //replace with a more meaningful exception
//        throw new Exception('A real exception should go here');
//    }
//    }
    
=======
    public static function find($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM blog WHERE BlogID = :BlogID');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('BlogID' => $id));
      $blog = $req->fetch();
if($blog){
      return new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryID'], $blog['ContinentID'], $blog['CategoryID'],$blog['UserID'], $blog['LikeCounter']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception('A real exception should go here');
    }
    }
>>>>>>> master
public static function update($id) {
    $db = Db::getInstance();
    $req = $db->prepare("Update product set name=:name, price=:price where id=:id");
    $req->bindParam(':id', $id);
    $req->bindParam(':name', $name);
    $req->bindParam(':price', $price);
// set name and price parameters and execute
if(isset($_POST['name'])&& $_POST['name']!=""){
        $filteredName = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['price'])&& $_POST['price']!=""){
        $filteredPrice = filter_input(INPUT_POST,'price', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$name = $filteredName;
$price = $filteredPrice;
$req->execute();
//upload product image if it exists
        if (!empty($_FILES[self::InputKey]['name'])) {
		Blog::uploadFile($name);
	}
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
    //Blog::uploadFile($Title);
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
        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
	$destinationFile = $path . $name . '.jpeg';
	if (!move_uploaded_file($tempFile, $destinationFile)) {
		trigger_error("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tempFile)) {
		unlink($tempFile); 
	}
}
public static function remove($id) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('delete FROM product WHERE id = :id');
      // the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
  }
  
}
?>