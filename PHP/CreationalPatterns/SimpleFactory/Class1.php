<?php
namespace PHP\CreationalPatterns\SimpleFactory;
/**
 * создвется класс одного из объектов
 */
class Class1 implements InterfaceClass
{
    /**
     * the method returns information to identify the object
     * метод возвращает информацию для идентификации объекта
     */
    public function gerInfo()
    {
        return "<p>Class №1</p>";
    }
}
