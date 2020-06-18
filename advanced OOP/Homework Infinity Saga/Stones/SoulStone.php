<?php
include_once 'Stones.php';

class SoulStone extends stones
{
Public Function soulExchange()
{
    echo "Soul for a soul";
}
}
$stoneAbility = new SoulStone('yellow','Vormir','Vormir','Cosmic Entity');
$stoneAbility->soulExchange();
$stoneAbility->introduction();