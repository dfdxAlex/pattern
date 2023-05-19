<?php
namespace PHP\CreationalPatterns\AbstractFactory;

class ListOneGreen implements IList
{
    public function outList()
    {
        echo "Список 1<br>
              брокколи<br>
              шпинат<br>
              капуста<br>
              салат<br>
             ";
    }
}
