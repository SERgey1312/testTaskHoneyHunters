<?php

function getComments($conn) {
    $sql_from_db = "select * from comments";
    $comments = $conn->query($sql_from_db);
    $commentsArr = [];
    foreach($comments as $row){
        $commentId = $row["id"];
        $commentName = $row["name"];
        $commentEmail = $row["email"];
        $commentBody = $row["comment"];

        $arr = [
            "id" => $commentId,
            "name" => $commentName,
            "email" => $commentEmail,
            "comment" => $commentBody,
        ];

        array_push($commentsArr, $arr);
    }
    return $commentsArr;
}