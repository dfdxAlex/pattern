<?php

/**
 * класс использует любые объекты из шаблона Компоновщик
 * the class uses any objects from the Linker template
 * 
 * Чтобы не усложнять демонстрационную модель, 
 * объекты принимаются только в конструкторе.
 * To keep the demo model simple, 
 * objects are only accepted in the constructor
 * 
 * метод getM22() возвращает массу товара, 22 ничего не значит
 * the method getM22() returns the mass of goods, 22 means nothing
 */

class Result
{
    private $mas = [];

    public function __construct(IEl ...$params)
    {
        foreach($params as $val)
            array_push($this->mas,$val);
    }

    public function getM22()
    {
        $rez = 0;
        foreach($this->mas as $value) {
            $rez+=$value->getM();
        }
        return $rez;
    }
}
