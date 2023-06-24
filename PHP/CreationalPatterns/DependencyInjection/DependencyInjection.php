<?php

// link for video https://youtu.be/FJt9qmziIHI

class DependencyInjection
{
    private $class1;
    private $class2;
    private $class3;

    public function __construct(
                                   Service $class1, 
                                   Service $class2, 
                                   Service $class3
                               ) 
    { 
        $this->class1 = $class1;
        $this->class2 = $class2;
        $this->class3 = $class3;
    }

    public function getTest($test)
    {
        if ($test == 1) return $this->class1;
        if ($test == 2) return $this->class2;
        if ($test == 3) return $this->class3;
    }
}
