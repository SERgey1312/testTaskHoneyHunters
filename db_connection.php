<?php

    $url = parse_url('mysql://b45fcdaa903f14:d0ab8960@eu-cdbr-west-01.cleardb.com/heroku_6e9c21ce3c72933?reconnect=true');

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $conn = new mysqli($server, $username, $password, $db);

//    $server = 'localhost:3306';
//    $username = 'root';
//    $password = 'password';
//    $db = 'honeyhunters';
//
//    $conn = new mysqli($server, $username, $password, $db);


