<?php
session_start();

 require_once('../connection.php');

$connect = Db::getInstance();

if(isset($_POST['postcomment'])) 
{
    $BlogID = $_SESSION['blogID'];
    $Content = $_POST['Content'];
    $senderName = $_POST['senderName'];
    
    if ($Content != '') 
    {
        $sql = "INSERT INTO comment (BlogID, Content, senderName) VALUES ('$BlogID', '$Content', '$senderName')";
        $query = $connect->prepare ($sql);
        execute ($query);
        if ($query) 
        {
            header ('header:?controller=blog&action=read&blogID='.$BlogID);
        }
            
    }
    
}
?>