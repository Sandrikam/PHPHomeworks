<?php
if ($path == "/MovieData" && $accept == "application/json") {
    $accept("content-type: application/json");
    $data = json_encode($data, 1);
    print_r($data);
}
else if ($path == "/MovieData" && $accept == "text/xml"){
    $responce = $data;
    header("Content-type: text/xml");
    print_r($responce);

}
else{
    echo"Nope Brudda, Noooot Today, Maybe Next Time";
}