<?php
include_once 'Stones.php';
class SpaceStone extends stones
{
    //adding additional functionalities to a stone
 public function createPortal()
 {
     echo"Be carefull! you don't want to recreate 2012 in NY :P";
 }
}
//explaines characteristics of a stone
$stoneAbility = new SpaceStone('Blue','New York','Tesseract','Loki');
$stoneAbility->createPortal();
$stoneAbility->introduction();
