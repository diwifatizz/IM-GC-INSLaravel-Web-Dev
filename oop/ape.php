<?php
class Ape extends Animal
{
    function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 2;
    }

    function yell()
    {
        echo "Auooo";
    }
}
?>