<?php

class ObjectTracker
{
    private static $nextSerial = 0;
    private $id, $name;
    function __construct($name)
    {
        $this->name = $name;
        $this->id = ++self::$nextSerial;
    }

    function __clone()
    {
        $this->name = "Clone of $this->name";
        $this->id = ++self::$nextSerial;
    }
    function getId()
    {
        return ($this->id);
    }
    function getName()
    {
        return ($this->name);
    }
    function setName($name)
    {
        $this->name = $name;
    }
}

$ot = new ObjectTracker("Zeev's Object");
$ot2 = clone $ot;
$ot2->setName("Another object");
// 1 Zeev's Object 
print($ot->getId() . " " . $ot->getName() . "<br>");
//2 clone of Zeev's Object
print($ot2->getId() . " " . $ot2->getName() . "<br>");

// clone with `=` operators
// the result is due to the fact that, now variable $ot2 is point to the same instance of $ot
$ot2 = $ot;
print($ot2->getId() . " " . $ot2->getName() . "<br>");