<?php
require_once ('db_connection.php');
require_once ('functions.php');

$name = "'" .$_POST['name']. "'";
$email = "'" .$_POST['email']. "'";
$comment = "'" .$_POST['comment']. "'";

$sql_in_db = "INSERT INTO comments(name, email, comment) VALUES (" . $name. "," . $email . "," . $comment . ")";
$conn->query($sql_in_db);

$comments = getComments($conn);
echo json_encode($comments);

