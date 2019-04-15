<?php
  class Blog {

    // we define 3 attributes
    public $blogID;
    public $title;
    public $content;
    public $countryName;
    public $continentName;
    public $categoryName;
    public $username;
    public $likecounter;


    public function __construct($blogID, $title, $content, $countryName, $continentName, $categoryName, $username, $likecounter) {
      $this->blogID    = $blogID;
      $this->title  = $title;
      $this->content = $content;
      $this->countryName = $countryName;
      $this->continentName = $continentName;
      $this->categoryName = $categoryName;
      $this->username = $username;
      $this->likecounter=$likecounter;
    }

   
    public static function all() {
        
       $sql='SELECT 
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


                WHERE b.Published =1
                ORDER BY b.DatePosted DESC';
      $list = [];
      $db = Db::getInstance();
      $req = $db->query($sql);
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $blog) {
        $list[] = new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'],$blog['Username'], $blog['LikeCounter']);
      }
      return $list;
    }

//    public static function find($id) {
//      $db = Db::getInstance();
//      //use intval to make sure $id is an integer
//      $id = intval($id);
//      $req = $db->prepare('SELECT * FROM product WHERE id = :id');
//      //the query was prepared, now replace :id with the actual $id value
//      $req->execute(array('id' => $id));
//      $product = $req->fetch();
//if($product){
//      return new Product($product['id'], $product['name'], $product['price']);
//    }
//    else
//    {
//        //replace with a more meaningful exception
//        throw new Exception('A real exception should go here');
//    }
//    }
//
//public static function update($id) {
//    $db = Db::getInstance();
//    $req = $db->prepare("Update product set name=:name, price=:price where id=:id");
//    $req->bindParam(':id', $id);
//    $req->bindParam(':name', $name);
//    $req->bindParam(':price', $price);
//
//// set name and price parameters and execute
//    if(isset($_POST['name'])&& $_POST['name']!=""){
//        $filteredName = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//    if(isset($_POST['price'])&& $_POST['price']!=""){
//        $filteredPrice = filter_input(INPUT_POST,'price', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//$name = $filteredName;
//$price = $filteredPrice;
//$req->execute();
//
////upload product image if it exists
//        if (!empty($_FILES[self::InputKey]['name'])) {
//		Product::uploadFile($name);
//	}
//
//    }
//    
//    public static function add() {
//    $db = Db::getInstance();
//    $req = $db->prepare("Insert into product(name, price) values (:name, :price)");
//    $req->bindParam(':name', $name);
//    $req->bindParam(':price', $price);
//
//// set parameters and execute
//    if(isset($_POST['name'])&& $_POST['name']!=""){
//        $filteredName = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//    if(isset($_POST['price'])&& $_POST['price']!=""){
//        $filteredPrice = filter_input(INPUT_POST,'price', FILTER_SANITIZE_SPECIAL_CHARS);
//    }
//$name = $filteredName;
//$price = $filteredPrice;
//$req->execute();
//
////upload product image
//Product::uploadFile($name);
//    }
//
//const AllowedTypes = ['image/jpeg', 'image/jpg'];
//const InputKey = 'myUploader';
//
////die() function calls replaced with trigger_error() calls
////replace with structured exception handling
//public static function uploadFile(string $name) {
//
//	if (empty($_FILES[self::InputKey])) {
//		//die("File Missing!");
//                trigger_error("File Missing!");
//	}
//
//	if ($_FILES[self::InputKey]['error'] > 0) {
//		trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
//	}
//
//
//	if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
//		trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
//	}
//
//	$tempFile = $_FILES[self::InputKey]['tmp_name'];
//        $path = "C:/xampp/htdocs/MVC_Skeleton/views/images/";
//	$destinationFile = $path . $name . '.jpeg';
//
//	if (!move_uploaded_file($tempFile, $destinationFile)) {
//		trigger_error("Handle Error");
//	}
//		
//	//Clean up the temp file
//	if (file_exists($tempFile)) {
//		unlink($tempFile); 
//	}
//}
//public static function remove($id) {
//      $db = Db::getInstance();
//      //make sure $id is an integer
//      $id = intval($id);
//      $req = $db->prepare('delete FROM product WHERE id = :id');
//      // the query was prepared, now replace :id with the actual $id value
//      $req->execute(array('id' => $id));
//  }
//  
}
?>

