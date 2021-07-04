<?php
require_once ('db_connection.php');

if($conn){
    echo 111;
}

//$sql_from_db = "select * from comments";
//$comments = $conn->query($sql_from_db);
//$commentsArr = [];
//foreach($comments as $row){
//    $commentId = $row["id"];
//    $commentName = $row["name"];
//    $commentEmail = $row["email"];
//    $commentBody = $row["comment"];
//
//    $arr = [
//        "id" => $commentId,
//        "name" => $commentName,
//        "email" => $commentEmail,
//        "comment" => $commentBody,
//    ];
//
//    array_push($commentsArr, $arr);
//}
//
//echo json_encode($commentsArr);

