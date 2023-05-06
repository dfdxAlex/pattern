<?php
namespace PHP\CreationalPatterns\SimpleFactory;
/**
 * создвется класс одного из объектов
 */
class Class3 implements ISF
{
    /**
     * the method returns information to identify the object
     * метод возвращает информацию для идентификации объекта
     */
    public function gerInfo()
    {
        return "<p>Class №3</p>";
    }
}