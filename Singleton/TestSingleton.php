<?php
namespace libraries\piotr;

/**
*getInstance - Метод - фабрика. Создает объект только один раз,
*если объекта ещё нет. Маркер - значение NULL у статического
*свойства $instances, если значение не null, то объект уже создан.
 */
class TestSingleton
{
    /**
     * Поле хранит в себе ссылку на созданный объект или NULL,
     * если объект ещё не создавался
     */
    private static $instances = null;

    // часть бизнес-логики
    private static $status;

    /**
     * Конструктор типа protected, для запрета создания нового 
     * объекта оператором new
     */
    protected function __construct() { }

    /**
     * Запрет клонирования.
     */
    protected function __clone() { }

    /**
     * Запрет восстановления из строк
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * Метод getInstance - это фабрика объектов. В строке 55 
     * проверяем содержимое статической переменной $instances,
     * если значение равно NULL, то объект ещё не создан, 
     * значит создаем его в строке 56 и помещаем ссылку на него
     * в переменную instances. Если в переменной instances есть 
     * значение, то ничего не делаем.
     * Функция может не принимать параметров, или принимать больше,
     * всё зависит от бизнес-логики.
     * Для тестирования фабрики добавлена строка с echo (57), которая
     * выводит сообщение, если зашли в блок создания объекта.
     * В строке 60 выводится значение переменной $instances,
     * оно содержит ссылку на созданный сейчас или ранее объект.
     */
    public static function getInstance($status): TestSingleton
    {
        if (is_null(self::$instances)) {
            self::$instances = new self();
            echo "<p>Создали объект</p>";
            self::$status=$status;
        }
        return self::$instances;
    }

    /**
     * Дальше можно начинается создание методов бизнес-логики,
     * т.е. того, ради чего создавали класс.
     * Задача данного класса хранить в себе переменную $status,
     * в ней хранится статус пользователя. Статус присваивается 
     * однажды, при создании объекта и его нельзя изменить до
     * нового цикла отработки скрипта, только тогда можно будет
     * создать новый объект.
     * Значение приходит извне, через фабрику объектов в строке 53
     * и присваивается статическому свойству $status в строке 58.
     */
    public function getStatus()
    {
        return self::$status;
    }
}
