<?php
namespace PHP\CreationalPatterns\Singleton;

class TestSingleton
{

    private static $instances = null;

    private static $status;    // kill

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance($status): TestSingleton   // kill
    //public static function getInstance($status): TestSingleton // kill comment
    {
        if (is_null(self::$instances)) {
            self::$instances = new self();
            echo "<p>Создали объект</p>";  // kill
            self::$status=$status;         // kill
        }
        return self::$instances;
    }

    public function getStatus()
    {
        return self::$status;
    }
}
