<?php

class User {

    public $username;
    public $password;
    public $email;

    public function __construct($username, $password, $email) {

        $this->username =$username;
        $this->password =$password;

        $this->email =$email;
    }

    
    public static function login() {//add in santisation for email
               
            $db = Db::getInstance();
            if(!is_null($db)){
            try{
            $query = $db->prepare("SELECT * FROM user WHERE Username = :username AND Password = :password");
            if(isset($_POST['username'])&& $_POST['username']!=""){
                $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if(isset($_POST['password'])&& $_POST['password']!=""){
                $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            
            $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
            
            $query->bindParam(':username', $username);
            $query->bindParam(':password', $hashedPassword);
            $query->execute();
            $results = $query->fetchAll();
            if ($results) {
                 header('location:?controller=blog&action=create');
            } 
            else {
                $message = "Username and/or password are incorrect.\\nPlease try again.";
        
                echo '<script type="text/javascript">alert("'.$message.'");history.go(-1);</script>';
                die();
            }
            }
            catch(PDOException $e){              
                $e->getMessage();
                // log this exception somewhere
                throw  new Exception();
            }                     
         }
            
    }
        
    
    

    public static function register() {
        $db = Db::getInstance();
         if(!is_null($db))
        {
            try{
        
        if(isset($_POST['username'])&& $_POST['username']!=""){
            $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['password'])&& $_POST['password']!=""){
            $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        
        $username =$_POST["username"];
        $password =$_POST['password'];
        $email =$_POST["email"];

           
        $sql_u = $db->prepare("SELECT * FROM user where Username='$username'");
        $sql_e = $db->prepare("SELECT * FROM user where Email = '$email'");
        $res_u = $sql_u->execute();
        $res_e = $sql_e->execute();
     
  	if ($sql_u->fetchColumn()> 0) {
  	   die("Sorry... username already taken"."Try differnt username". "<a href='?controller=user&action=register'>Register</a> "); 
         
        }
        elseif ($sql_e->fetchColumn() > 0) {
        die("Sorry... email is already taken")  ;    
        
        }
        else {
        $hashed_password= password_hash($password, PASSWORD_DEFAULT);
        $rej = $db->prepare("INSERT INTO user (Username, Email, Password) VALUES ( :username, :email, :password)");
    


        $rej->bindParam(':username', $username);
        $rej->bindParam(':password', $hashed_password);
        $rej->bindParam(':email', $email);

        
        $result = $rej->execute();
         
         if ($result ==1 ) { 
             echo "Please enter the login details";
             header('location:?controller=user&action=login');}            
            
            }
            }
            catch(PDOException $e){
                $e->getMessage();
                // log this exception somewhere
                throw  new Exception();
            }
            
        }
    }

    
    public static function readMine($username) 
    {        
      $list = [];
      $db = Db::getInstance();
      if(!is_null($db)){      
       try{   
            $sqlfindmine= "Call readMyBlogs (:username)";
       
      
            $req = $db->prepare($sqlfindmine);
            require_once('blog.php');
            $req->execute(array(':username' => $username));
            foreach($req->fetchAll() as $blog) 
                {
              $list[] = new Blog($blog['BlogID'], $blog['Title'], $blog['Content'], $blog['CountryName'], $blog['ContinentName'], $blog['CategoryName'],$blog['Username'], $blog['LikeCounter'],$blog['ViewCounter']);
            }
            return $list;
       }
       catch(PDOException $e){
           $e->getMessage();           
           
           // log this exception somewhere
           throw  new Exception();
       }
             
    }
    }
    
    
    public static function contactus() {
        $db = Db::getInstance();
        if(!is_null($db)){
        try{    

            $stmt = $db->prepare("call addFeedback( :name, :email, :message)");

            $contactUsForm = filter_input_array(INPUT_POST);
            if (!empty($_POST['name'])) {//loops through Post Superglobal array, sanitising each input item
                foreach ($contactUsForm as $formDetail => $formValue) {
                    ${$formDetail} = User::filterInput($formDetail);
                }
            $email=filter_var($email, FILTER_SANITIZE_EMAIL);#additional filter for email
            }

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            $result = $stmt->execute();

             if ($result ==1 ) {
                 $successmessage = "Thanks for the feedback, we will get back to you soon";
                 echo '<script type="text/javascript">alert("'.$successmessage.'");</script>';
                 
             }

        }
        catch(PDOException $e){
            $e->getMessage();
            // log this exception somewhere
            throw  new Exception();
        }        
    }
    }
    
    
    public static function filterInput($userDetail) {//create a sanitising function for sanitising strings
        if (isset($_POST["$userDetail"]) && $_POST["$userDetail"] != "") {
            return filter_input(INPUT_POST, $userDetail, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        }
    }
    
    
    public static function modify() {
        $db = Db::getInstance();
        if(!is_null($db))
        {
        try{
        $req = $db->prepare("Call updatePassword(:username, :newPassword);");
        $req->bindParam(':username', $username);
        $req->bindParam(':newPassword', $newPasswordHashed);
        
        $passwordUpdateDetails = filter_input_array(INPUT_POST);
        //asking whether title is empty refers to whether the addform has been submitted yet, if not the query is run
        if (!empty($_POST['username'])) {//loops through Post Superglobal array, sanitising each input item
            foreach ($passwordUpdateDetails as $formDetail => $formValue) {
                ${$formDetail} = User::filterInput($formDetail);
            }
            
            $newPasswordHashed=password_hash($newPassword, PASSWORD_DEFAULT);
            
            $req->execute();
            
        }
        }
        catch (PDOException $e){
            $e->getMessage();
            // log this exception somewhere
            throw  new Exception();
        }
        }
    }
    
    public static function confirmUserExists() {
        $db = Db::getInstance();
        if(!is_null($db)){
        try{
        $req = $db->prepare("Call confirmUserExists(:username);");
        $req->bindParam(':username', $username);        
        $passwordUpdateDetails = filter_input_array(INPUT_POST);
        //asking whether title is empty refers to whether the addform has been submitted yet, if not the query is run
        if (!empty($_POST['username'])) {//loops through Post Superglobal array, sanitising each input item
            foreach ($passwordUpdateDetails as $formDetail => $formValue) {
                ${$formDetail} = User::filterInput($formDetail);
            }
            $req->execute();
            $user = $req->fetch();
            
             if($user){
              return true;
      }
            else{
            throw new Exception('A real exception should go here'); //replace with a more meaningful exception
            }
        }
        }
        catch (PDOException $e){
            $e->getMessage();
            // log this exception somewhere
            throw  new Exception();
        }
        }
    }

    
    
    public static function emailUs(){ //NB this doesn't currently work as we do not have a mail/web server - we are working on local server.
        $errors = '';
        $myemail = 'faithege@hotmail.co.uk';
        
        if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['message'])) {
                $errors .= "\n Error: all fields are required";
        }
        $contactUsForm = filter_input_array(INPUT_POST);
        if (!empty($_POST['name'])) {//loops through Post Superglobal array, sanitising each input item
            foreach ($contactUsForm as $formDetail => $formValue) {
                ${$formDetail} = User::filterInput($formDetail);
            }
        $email=filter_var($email, FILTER_SANITIZE_EMAIL);#additional filter for email
        }
        
##keep going change email_address to email
        if( empty($errors))
        {
                $to = $myemail; 
                $email_subject = "Contact form submission: $name";
                $email_body = "You have received a new message.".
                " Here are the details:\n Name: $name \n Email: $email \n Message \n $message"; 

                $headers = "From: $myemail\n"; 
                $headers .= "Reply-To: $email";

                mail($to,$email_subject,$email_body,$headers);
                //redirect to the 'thank you' page
//                header('Location: views/users/contactus.php');
        } 
            }

}

