<?php
include_once 'Stones.php';
class TimeStone extends stones
{
 public function controlTimeAndSpace()
 {
     echo"Keep in Mind, Dormammu is Around! and playin with time can mess up the continium";
 }

}
$stoneAbility = new TimeStone('Green','New York','Eye of Agamoto','Dr.Strange');
$stoneAbility->controlTimeAndSpace();
$stoneAbility->introduction();

