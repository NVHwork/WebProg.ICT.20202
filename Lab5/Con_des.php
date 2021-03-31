<?php
class BaseClass
{
    protected $name = "BaseClass";
    function __construct()
    {
        print("In " . $this->name . " constructor<br>");
    }
    function __destruct()
    {
        print("Destroying " . $this->name . "<br>");
    }
}


class Subclass extends BaseClass
{
    function __construct()
    {
        $this->name = "SubClass";
        parent::__construct();
    }
    function __destruct()
    {
        parent::__destruct();
    }
}

// first subclass is constructed
$obj1 = new SubClass();

// baseclass is constructed
$obj2 = new BaseClass();

// when php ends
// baseclass is destroyed
// then the subclass is destroyed (order is from the newest constructed object)