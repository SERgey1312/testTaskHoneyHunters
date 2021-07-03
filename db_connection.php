<?php
if ($_SERVER['SERVER_NAME'] == "testtaskhoneyhunters.herokuapp.com"){
    $url = parse_url(getenv("DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conn = new mysqli($server, $username, $password, $db);

    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
} else {
    $server = 'localhost:3306';
    $dbname = 'honeyhunters';
    $username = 'root';
    $password = 'password';

    $conn = new mysqli($server, $username, $password, $dbname);

    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
}
