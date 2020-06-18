<?php
include_once 'Stones.php';
class RealityStone extends stones
{
    public function changeReality()
    {
        echo "Reality can be, Whatever I want";
    }
}
$stoneAbility = new RealityStone('Red','Jane Forrester','Aether','Jane Forrester');
$stoneAbility->changeReality();
$stoneAbility->introduction();