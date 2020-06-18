<?php

include_once "Lib.php";

interface FileFunction
{
//  Overriding content
    public function Write($information);
//  Reading content
    public function Read();
//  Deleting content
    public function Delete();
//  Adding data into content
    public function Append($information);
}


