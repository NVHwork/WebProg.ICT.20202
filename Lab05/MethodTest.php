<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        if ($name == 'run') {
            $this->run(implode(', ', $arguments));
        } else if ($name == 'firrun') {
            $this->firrun(implode(', ', $arguments));
        }
    }


    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
            . implode(', ', $arguments) . "\n";
    }

    private function run($name)
    {
        echo $name;
    }

    private function firrun($name)
    {
        echo "rrr";

        echo $name;
    }
}

$obj = new MethodTest();
$obj->firrun('in object context', 'segsfdfdgdg');
