<?php

class DB {
    
    private static $instance = NULL;

    //Singleton Design Pattern
    public static function getInstance() {
      try
        {
            if (!isset(self::$instance)) 
            {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=travelblog', 'blog', 'ADFJBLOG', $pdo_options);
            }
        }
        catch(PDOException $e){
            $e->getMessage();
            require_once 'views/pages/error.php';
        }
        finally 
        {
            return self::$instance;
        }        
    }
}
