<?php
namespace PHP\CreationalPatterns\AbstractFactory;

class ListOneRed implements IList
{
    public function outList()
    {
        echo "Список 1<br>
              помидоры<br>
              свекла<br>
              редис<br>
             ";
    }
}
