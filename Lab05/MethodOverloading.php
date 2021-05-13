<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' " . implode(', ', $arguments) . "<br>";
    }
    /** As of PHP 5.3.0 */
    public static function __callstatic($name, $arguments)
    {
        // Note: value of $name is case sensitive. 
        echo "Calling static method '$name' " . implode(', ', $arguments) . "<br>";
    }
}

$obj = new MethodTest;
$obj->Hehe('in object context');
MethodTest::Hehe('in static context');