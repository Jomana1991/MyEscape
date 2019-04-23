<?php

 require_once('./connection.php');
$connect = Db::getInstance();

$query = "
SELECT * FROM comment 
WHERE parentCommentID = '0' 
ORDER BY CommentID DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">By <b>'.$row["senderName"].'</b> on <i>'.$row["DatePosted"].'</i></div>
  <div class="panel-body">'.$row["Content"].'</div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["CommentID"].'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($connect, $row["CommentID"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM comment WHERE parentCommentID = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading">By <b>'.$row["senderName"].'</b> on <i>'.$row["DatePosted"].'</i></div>
    <div class="panel-body">'.$row["Content"].'</div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["CommentID"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["CommentID"], $marginleft);
  }
 }
 return $output;
}

?>

