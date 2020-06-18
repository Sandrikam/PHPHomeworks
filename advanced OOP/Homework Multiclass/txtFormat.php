<?php
include_once 'FileFormat.php';

class txtFormat extends Lib implements FileFunction
{
    protected $name;

    public function __construct($fileFormat, $name)
    {
        parent::__construct($fileFormat);
        $this->name = $name;
    }

    public function Write($info)
    {
        $file = fopen('text.txt', 'w+');
        fwrite($file, $info);
        fclose($file);
    }

    public function Read()
    {
        $file = file_get_contents('text.txt');
        echo $file;
    }

    public function Delete()
    {
        unlink($this->name);
    }

    public function Append($info)
    {
        $fp = fopen('text.txt', 'a+');
        fwrite($fp, $info);
        fclose($fp);
    }
}