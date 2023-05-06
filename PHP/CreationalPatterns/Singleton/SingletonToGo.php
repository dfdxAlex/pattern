<?php
namespace PHP\CreationalPatterns\Singleton;

class SingletonToGo
{

    private static $instances = null;

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): SingletonToGo
    {
        if (is_null(self::$instances)) 
            self::$instances = new self();
        return self::$instances;
    }

}
