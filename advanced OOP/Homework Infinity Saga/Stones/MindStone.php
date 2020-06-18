<?php
include_once 'Stones.php';
class MindStone extends stones
{
public function accessAllMinds()
{
    echo"Booom! You have access To all existing minds. *Shouts Jealosly*";
}
}
$stoneAbility = new MindStone('Yellow','New York','Scepter','Vision');
$stoneAbility->accessAllMinds();
$stoneAbility->introduction();

