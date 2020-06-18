<?php
include "Router.php";

//is not defining file as Class. i guess i'm doing something wrong.
class _Route extends Router
{
    function route($url, $name)
    {
        route('/Avengers', 'Endgame');    //adding elements manually
        route("/CptAmerica", "WinterSoldier");
        //automating adding process
        route($url, $name);
        //finding array generally in code in order to add $url into
        global $RegRoutes;
        $RegRoutes[$url] = $name;
        echo $url;
    }


}
