<?php
namespace PHP\CreationalPatterns\SimpleFactory;

//Lint for youtube : https://youtu.be/A-V_uAMFDsk

/**
 * создвется класс одного из объектов
 */
class Class2 implements InterfaceClass
{
    /**
     * the method returns information to identify the object
     * метод возвращает информацию для идентификации объекта
     */
    public function gerInfo()
    {
        return "<p>Class №2</p>";
    }
}
