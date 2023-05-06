<?php
namespace PHP\CreationalPatterns\Singleton;
// https://youtu.be/Zq0f8lsDuF8 link for video
class TestSingletonNC
{

    private static $instances = null;

    private static $status;    // kill

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance($status): TestSingletonNC   // kill
    //public static function getInstance(): TestSingletonNC // kill comment
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
