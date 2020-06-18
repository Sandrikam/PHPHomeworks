<?php
//Aleksandre Maisuradze
include_once "Lib.php";
include_once "FileFormat.php";

//Filling the Txt file
//Added value
$txtinfo = "<h1> Hello There :P </h1>";
$txt = new txtFormat("text", "text.txt");


$txt->Read();
