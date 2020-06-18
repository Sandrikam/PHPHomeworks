<?php
class stones
{
    public $color;

    public $location;

    public $origin;

    public $owner;

    public function __construct($color,$location,$origin,$owner)
    {
        $this ->color=$color;
        $this->location=$location;
        $this->origin=$origin;
        $this->owner=$owner;
    }
    public function introduction()
    {
        echo"This Stone is{$this->color}. and Owner is{$this ->owner}";
    }
}



