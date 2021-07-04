<?php
require_once ('db_connection.php');
require_once ('functions.php');

$comments = getComments($conn);
echo json_encode($comments);
