<?php
namespace PHP\CreationalPatterns\Singleton;

/**
*  getInstance - The method is a factory. Creates an object only once,
*  if the item doesn't exist yet. Marker - NULL value for static
*  properties $instances, if the value is not null, then the object has already been created.
*/
/**
*getInstance - Метод - фабрика. Создает объект только один раз,
*если объекта ещё нет. Маркер - значение NULL у статического
*свойства $instances, если значение не null, то объект уже создан.
 */
class TestSingleton
{
    /**
     * The field stores a link to the created object or NULL,
     * if the object has not been created yet
     * Поле хранит в себе ссылку на созданный объект или NULL,
     * если объект ещё не создавался
    */
    private static $instances = null;

    // part of the business logic
    // часть бизнес-логики
    private static $status;    // kill

    /**
     * Constructor of type protected, to prevent the creation of a new one
     * object with the new operator
     * Конструктор типа protected, для запрета создания нового 
     * объекта оператором new
     */
    protected function __construct() { }

    /**
     * Запрет клонирования.
     * Prohibition of cloning.
     */
    protected function __clone() { }

    /**
     * Disable recovery from strings
     * Запрет восстановления из строк
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
      * The getInstance method is an object factory. On line 55
      * check the contents of the $instances static variable,
      * if the value is NULL, then the object has not been created yet,
      * means we create it on line 56 and put a link to it
      * to the instances variable. If the instances variable contains
      * value, then do nothing.
      * The function may take no parameters, or take more than
      * it all depends on the business logic.
      * To test the factory, a line with echo (57) has been added, which
      * displays a message if you entered the object creation block.
      * Line 60 prints the value of the $instances variable,
      * it contains a reference to an object created now or earlier.
     */
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

    /**
      * Then you can start creating business logic methods,
      * i.e. for which the class was created.
      * The task of this class is to store the $status variable,
      * it stores the status of the user. Status assigned
      * once, when creating an object and it cannot be changed before
      * a new script processing cycle, only then it will be possible to
      * create a new object.
      * The value comes from outside, through the object factory on line 53
      * and is assigned to the $status static property on line 58.
      * kill
      */
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
     * kill
     */
    public function getStatus()
    {
        return self::$status;
    }
}
