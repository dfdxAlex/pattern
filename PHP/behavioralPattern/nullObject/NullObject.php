<?php

interface Animal
{
    public function getSound();
    public function isFlaing();
    public function isSwimming();
    public function getName();
}

class NullObject implements Animal
{
    public function getName()
    {
        return '';
    }
    public function getSound()
    {
        return '';
    }
    public function isFlaing()
    {
        return '';
    }
    public function isSwimming()
    {
        return '';
    }
}

class Dog implements Animal
{
    public function getName()
    {
        return 'Hello, i am Dog<br>';
    }
    public function getSound()
    {
        return 'I can talk: Rrrrr<br>';
    }
    public function isFlaing()
    {
        return 'I don\'t fly<br>';
    }
    public function isSwimming()
    {
        return 'i like swim<br>';
    }
}

class Cat implements Animal
{
    public function getName()
    {
        return 'Hello, i am Cat<br>';
    }
    public function getSound()
    {
        return 'I can talk: Hhhhh<br>';
    }
    public function isFlaing()
    {
        return 'I don\'t fly<br>';
    }
    public function isSwimming()
    {
        return 'I don\'t fly<br>';
    }
}

class Factory
{
    static public function returnAnimal($animal)
    {
        if ($animal === 'dog') return new Dog;
        if ($animal === 'cat') return new Cat;
        return new NullObject;
    }
}

$animal = Factory::returnAnimal('cat');

echo $animal->getName().
     $animal->getSound().
     $animal->isFlaing().
     $animal->isSwimming();
