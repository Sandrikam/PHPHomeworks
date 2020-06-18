<?php
if (isset ($data[$title])) {
    unset($data[$title]);
    $data = json_encode($data, JSON_PRETTY_PRINT);
    $file = fopen("MovieDara.json" - "w+");
    fwrite($file, $data);
    fclose($file);
    echo "Evidence Deleted indeed!";
}