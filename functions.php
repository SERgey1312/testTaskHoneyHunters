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

function validationData($name, $email, $comment){
    $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    $checkName = true;
    $checkComment = true;
    if (strlen($email) > 60 && strlen($email) < 5){
        $checkEmail = false;
    }
    if (strlen($name) > 40 && strlen($email) < 2){
        $checkName = false;
    }
    if (strlen($comment) > 240 && strlen($comment) < 3){
        $checkComment = false;
    }

    return $checkEmail && $checkName && $checkComment;
}