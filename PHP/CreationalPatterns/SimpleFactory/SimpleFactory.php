<?php
namespace PHP\CreationalPatterns\SimpleFactory;

class SimpleFactory
{
    static public function createObject($in)
    {
        if ($in == 1) return new Class1;
        if ($in == 2) return new Class2;
        if ($in == 3) return new Class3;
    }
}
