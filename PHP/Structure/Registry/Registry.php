<?php
namespace PHP\Structure\Registry;

/**
 * Шаблон реестр
 */
class Registry
{
    private static $registry = null;
    private $arrayRegistry = [];

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function registry()
    {
        if (is_null(self::$registry)) {
            self::$registry = new self();
            echo '<h1>Создан реестр</h1>';
        }
        return self::$registry;
    }

    public function setClass($key, $link)
    {
        $this->arrayRegistry[$key] = $link;
    }

    public function getClass($key)
    {
        return $this->arrayRegistry[$key];
    }

}











class Plus
{
    public function __construct()
    {
        echo '<h1>Екземпляр класса Plus создан</h1>';
    }

    public function plus($a, $b)
    {
        echo '<h1>'.$a+$b.'</h1>';
    }
}

class Minus
{
    public function __construct()
    {
        echo '<h1>Екземпляр класса Minus создан</h1>';
    }

    public function minus($a, $b)
    {
        echo '<h1>'.$a-$b.'</h1>';
    }
}

