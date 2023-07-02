<?php

/**
 * Класс создает и хранит сложные объекты. 
 * Объекты могут принимать в себя как простые, 
 * так и сложные объекты классов интерфейса IEl или IElement
 * The class creates and stores complex objects. 
 * Objects can take both simple and complex objects 
 * of interface IEl or IElement
 * 
 * Метод addEl(IEl $in) добавляет любой объект в свой объект.
 * The addEl(IEl $in) method adds any object to its object.
 * 
 * Метод killM(IEl $in) удаляет любой объект из своего объекта.
 * The killM(IEl $in) method removes any object from its object.
 * 
 * Метод getM() возвращает массу своего объекта.
 * The getM() method returns the mass of its object.
 */

class Box extends IElement
{
    public function __construct(IEl $in)
    {
        $this->mas[] = $in;
    }

    public function getM()
    {
        $rez = 0;
        foreach($this->mas as $value) {
            $rez+=$value->getM();
        }
        return $rez;
    }

    public function addEl(IEl $in)
    {
        $this->mas[] = $in;
    }

    public function killM(IEl $in)
    {
        foreach($this->mas as $key=>$val) {
            if ($val === $in) {
                unset($this->mas[$key]);
                return ;
            }
        }
    }
}
