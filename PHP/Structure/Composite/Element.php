<?php

/**
 * класс создает примитивные объекты, с названием и массой
 * class creates primitive objects, with name and mass
 * 
 * Метод getM() возвращает массу простого объекта
 * The method getM() returns the mass of a simple object
 */
class Element extends IEl
{
    public function __construct(string $name, int $m)
    {
        $this->name = $name;
        $this->m = $m;
    }

    public function getM()
    {
        return $this->m;
    }
}
