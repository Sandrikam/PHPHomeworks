<?php
/*
 * Aleksandre Maisuradze.
 *
 * DISCLAIMER: Code isn't working semi close as it's supposed to
 */
function GetMovieNames()
{
//Getting Json File
    $data = file_get_contents('movies.json');
//reading and decoding Json file
    $database = json_decode($data, true);
    //printing whole array
    print_r($database);
}

include "Request.php";
include "Router.php";
include "Template.php";