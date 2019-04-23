<?php

class Comment {

    public $BlogID;
    public $UserID;
    public $Content;
    public $DatePosted;
 public $senderName;
 
    public function __construct($BlogID, $UserID, $Content, $DatePosted, $senderName) {
 
        $this->BlogID = $BlogID;
        $this->UserID = $UserID;
        $this->Content = $Content;
        $this->DatePosted = $DatePosted;
        $this->senderName = $senderName;
    }

    public function fetchComment($blogid) {

        $list = [];
        $db = Db::getInstance();
        $fetchcomment = $db->prepare("Call fetchComments (:BlogID)"); //stored procedure that returns all blogs in reverse chronological order
//        $fetchcomment->bindParam(':BlogID', $blogid);
        $fetchcomment->execute(array('BlogID' => $blogid));

        foreach ($fetchcomment->fetchAll() as $comment) {
            $list[] = new Comment($comment['BlogID'], $comment['UserID'], $comment['Content'], $comment['DatePosted'], $comment['senderName']);
        }
        return $list;


      
    }

}
