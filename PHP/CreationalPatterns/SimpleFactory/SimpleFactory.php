<?php
namespace PHP\CreationalPatterns\SimpleFactory;

//Lint for youtube : https://youtu.be/A-V_uAMFDsk

class SimpleFactory
{
    // метод создает разные объекты в зависимости от условий.
    // the method creates different objects depending 
    // on the conditions.
    static public function createObject($in)
    {
        if ($in == 1) return new Class1;
        if ($in == 2) return new Class2;
        if ($in == 3) return new Class3;
    }
}
