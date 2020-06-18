<?php
#data = file_get_contents("php://input");
$data = json_decode($data,1);
foreach($data as$movie)
    }
    //now time to check if we own info about that movie
        if(isset($data[$movie["title"]])){
            echo "Salesman: -Slaps The Roof of the Car: This Badboy has so many movies in":
        }
        else{
            //that badboy doesn't have any movies so we should add it there
            $data[$movie["title"]] = [
                "genre"          =>$movie["genre"],
                "release-date"   => $movie["release-date"],
                "rating"         => $movie["rating"],
                "title"          => $movie["title"],
            ];
            $data = json_encode($data);
            $file = fopen("MovieData.json", "w+");
            fwrite($file,$data);
            fclose($file);
            echo"Congrats Boeh!! Outstanding Move!!! But it's illegal";
        }
        if(strpos($path,"/MovieData/")!==false) {
            $title =substr($path,strpos($path, "/", 2)+1);
        }