<?php
include_once 'index.php';
//registering routes
$RegRoutes = array('URL', 'Name');
//creating router
//defining global variables
global $url;
global $name;
global $method;
//creating Route function where url is the key and name is function
//function route($url, $name)
//{
//    route('/Avengers', 'Endgame');    //adding elements manually
//    route("/CptAmerica", "WinterSoldier");
//    //automating adding process
//    route($url, $name);
//    //finding array generally in code in order to add $url into
//    global $RegRoutes;
//    $RegRoutes[$url] = $name;
//    echo $url;
//}

//Defining GET request

$RegRoutes->get($name, $url);


//$RegRoutes = Set_element($url,'URL')


print $path;

if (strpos($path, '{') !== false && isset($_SERVER['PATH_INFO']) && $_SERVER['REQUEST_METHOD'] == $method)
//parsing needed info and take neccessary


//comparing info with saved info

    if ($url == $RegRoutes) {
        //echo compared info
        echo '
routes match match.
';
        if (function_exists(route($url, $name))) {
            echo route();
        }
    } else {
        echo '
routes do not match.
';
    }



//recieving function


//calling function to include function
