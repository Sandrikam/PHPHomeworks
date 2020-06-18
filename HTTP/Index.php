<?php
  //Project By Aleksandre Maisuradze
$data = file_get_contents("MovieData.json");
$data = json_decode($data, 1);

$path = $_SERVER["PATH_INFO"];
$accept = $_SERVER["HTTP_ACCEPT"];
$request = $_SERVER["REQUEST_METHOD"];
$xml["status"];
    if($request == "GET") {
        include 'Getfunction.php'
    }
    if($request=="Post") {
        include 'Postfunction.php'
    }
        if($request == "DELETE") {
            include 'DELETEfunction.php'
        }
