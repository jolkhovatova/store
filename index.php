<?php
class GetSet
{
    private $number = 1;

    public function __get($name)
    {
        // TODO: Implement __get() method.
        //echo "You get {$name}";
        if($name == 'number'){
            // ...
            return $this->number;
        }
    }
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo "You set {$name}";
    }
}

$obj = new GetSet();
echo $obj->number;
//echo $obj->number = 999;


