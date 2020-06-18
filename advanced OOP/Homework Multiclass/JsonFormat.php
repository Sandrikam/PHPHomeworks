<?php
include_once 'FileFormat.php';

class jsonFormat extends Lib implements FileFunction
{
    protected $name;

    public function __construct($fileFormat, $name)
    {
        parent::__construct($fileFormat);
        $this->name = $name;
    }

    public function Write($info)
    {
        $file = fopen("example.json", "w+");
        fwrite($file, json_encode($info, true));
        fclose($file);
    }

    public function Read()
    {
        $str = file_get_contents('example.json');
        $json = json_decode($str, true);
        echo '<pre>' . print_r($json, true) . '</pre>';
    }

    public function Delete()
    {
        unlink($this->name);
    }

    public function Append($info)
    {


        $mvi = file_get_contents('example.json');
        $tempArray = json_decode($mvi);
        array_push($tempArray, $info);
        $jsonData = json_encode($tempArray);
        file_put_contents('example.json', $jsonData);
    }
}
