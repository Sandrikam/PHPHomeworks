<?php
include "index.php";
include_once 'IRequest.php';

class Request()
{
function __construct() {
    //still trying to figure out what goes here :(
};

    public function _get()
{
    if ($path == "/movies" && $header == "application/json") {
        $responce = json_encode($database);
        header("content-Tye: text/xml");
        print_r($responce);
    }
    if (strpos($path, "/movies/") !== false) {
        $title = substr($path, 8);
        if (isset($database[$title]) && $heaader == "application/json") ;
        print_r($responce);
    } else {
        echo " ";
    }
};

     public function _Post()
{
    $data = file_get_contents("php://input");
    $data = json_decode($data, 1);
    foreach ($data as $movie) {
        if (isset($database[$movie["Titile"]])) {
            echo " You have this movie already, don't disturb me please :D ";
        } else {
            //adding movie to database
            $database[$movie["Titile"]] = [
                "genre" => $movie["genre"],
                "release_date" => $movie["release_date"],
                "imdb_rating" => $movie["imdb_rating"],
            ];
            $database = json_encode($database);
            $file = fopen("movies.json", "w+");

            fwrite($file, $database);
            fclose($file);
            echo " Dope! You Did it Noobmaster 69! ";
        }
    }
}

    public function _Delete()
{
    if (strpos($path, "/movies/delete") !== false) {
        $title = substr($path, 8);
        if (isset($database[$title])) {
            unset ($database[$title]); //deleting movie from database

            $database = json_encode($database);
            $file = fopen("movies.json", "w+"); //opens json file
            fwrite($file, $database);
            fclose($file);
            echo "You got what you wanted, Movie Deleted";
        } else {
            echo " who You Trying to Fool? File ain't in directory :))";
        }
    }

}
}