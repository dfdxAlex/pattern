<?php
// https://youtu.be/UUt7hEcsJlw link for video


class ServiceLocator
{

    private static $instances = null;

    private $Test;

    protected function __construct() 
    { 
        if (test == 1) $this->Test = new Test1;
        if (test == 2) $this->Test = new Test2;
        if (test == 3) $this->Test = new Test3;
    }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance()
    {
        if (is_null(self::$instances)) 
            self::$instances = new self();
        return self::$instances;
    }

    public function getTest()
    {
        return $this->Test;
    }
}
