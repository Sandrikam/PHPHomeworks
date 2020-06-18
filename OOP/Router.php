<?php
include "Request.php";

class Router()
{
$path = $_SERVER['PATH_INFO'];
$header = $_SERVER['HTTP_ACCEPT'];
$request = $_SERVER['REQUEST_METHOD'];

if (isset($path)) {
    if ($request = "GET") {
        function _get();
    }
    if ($request = "DELETE") {
        function _Delete();
    }
    if ($request = "POST") {
        function _Post();
    }
} else {
    echo "input Path";
}

