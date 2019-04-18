<?php

class User {

    public $Username;
    public $Password;
    public $Email;

    public function __construct($username, $Password, $Email) {

        $this->Username = $Username;
        $this->Password = $Password;

        $this->Email = $Email;
    }

    public static function login() {
        $db = Db::getInstance();
        $query = $db->prepare("SELECT * FROM user WHERE Username = :Username AND Password = :Password");

        $Username = $_POST["Username"];
        $Password = $_POST["Password"];

        $query->bindParam(':Username', $Username);
        $query->bindParam(':Password', $Password);

        $query->execute();
        $results = $query->fetchAll();

        if (count($results) == 0) {
            echo 'user not found';
        } else if (count($results) == 1) {
            header('location:?controller=blog&action=create');
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

}
