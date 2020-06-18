<?php

class Lib
{
    public $fileFormat;

    public function __construct($fileFormat)

    {
        $this->fileFormat = $fileFormat;

    }

    public function getFileType()
    {
        echo "<h1> My file type is {$this-> fileFormat}</h1>";
    }
}